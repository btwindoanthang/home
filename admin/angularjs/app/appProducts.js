var app = angular.module('myApp', ['ui.bootstrap']);

app.filter('startFrom', function () {
    return function (input, start) {
        if (input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});
app.controller('customersCrtl', function ($scope, $http, $timeout) {

    $http.get('./angularjs/ajax/product/getProducts.php').success(function (data) {
        $scope.list = data;

        $scope.currentPage = 1; //current page
        $scope.entryLimit = 5; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;
    });
    $scope.setPage = function (pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function () {
        $timeout(function () {
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function (predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };

    $scope.modal = function (state, id) {
        $scope.state = state
        switch (state) {
            case "add" :
                $scope.frmTitle = "Add Product";
                break;
            case "edit" :

                $scope.frmTitle = "Edit Product";
                $scope.id = id;
                $http.get('./angularjs/ajax/product/getProduct.php?id=' + id).success(function (response) {
                    $scope.data = response;
                    $scope.category = $scope.data[0];
                    console.log($scope.category);
                });
                break;
            default :
                $scope.frmTitle = "Không Biết";
                break;
        }
        $("#myModal").modal('show');
    };
    $scope.save = function (state, id) {
        if (state == "add") {
            var data = new FormData();
            jQuery.each(jQuery('#image')[0].files, function (i, file) {
                data.append('file-' + i, file);
            });
            
            //console.log(JSON.stringify(data));
            var url = './angularjs/ajax/product/addProduct.php';
            
            //var data = $.param($scope.category);
            $http({
                method: 'POST',
                url: url,
                data: data,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })
                    .success(function (response) {
                        console.log(response);
                        return;
                        location.reload();
                    })
                    .error(function (response) {
                        console.log(response);
                        alert('Have errors, Please check log');
                    });
        }

        if (state == "edit") {

            var url = './angularjs/ajax/product/editProduct.php';
            var data = $.param($scope.category);

            $http({
                method: 'POST',
                url: url,
                data: data,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })
                    .success(function (response) {
                        console.log(response);
                        location.reload();
                    })
                    .error(function (response) {
                        console.log(response);
                        alert('Have errors, Please check log');
                    });
        }
    }

    $scope.confirmDelete = function (id) {
        var isConfirmDelete = confirm('Do you want do delete record?');
        if (isConfirmDelete) {
            $http.get('./angularjs/ajax/product/deleteproduct.php?id=' + id)
                    .success(function (response) {
                        console.log(response);
                        location.reload();
                    })
                    .error(function (response) {
                        console.log(response);
                        alert('Have errors, Please check log');
                    });
            ;
        } else {
            return false;
        }
    }
});


