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
                $('#Category')[0].reset();
                $scope.frmTitle = "Add Product";
                
                $http.get('./angularjs/ajax/category/getCategorys.php').success(function (response) {
                    $scope.data_category = response;

                    console.log($scope.data_category);
                });
                $http.get('./angularjs/ajax/location/getLocations.php').success(function (response) {
                    $scope.data_location = response;

                    console.log($scope.data_category);
                });
                break;
            case "edit" :

                $scope.frmTitle = "Edit Product";
                $('#image').val("");
                $http.get('./angularjs/ajax/category/getCategorys.php').success(function (response) {
                    $scope.data_category = response;

                    console.log($scope.data_category);
                });
                $http.get('./angularjs/ajax/location/getLocations.php').success(function (response) {
                    $scope.data_location = response;

                    console.log($scope.data_category);
                });
                $scope.id = id;
                $http.get('./angularjs/ajax/product/getProduct.php?id=' + id).success(function (response) {
                    $scope.data = response;
                    $scope.category = $scope.data[0];
                    $scope.category.square=parseFloat($scope.category.square, 10);
                    $scope.category.price=parseFloat($scope.category.price, 10);
                    $scope.category.bathroom=parseFloat($scope.category.bathroom, 10);
                    $scope.category.hot=parseFloat($scope.category.square, 10);
                    $scope.category.bedroom=parseFloat($scope.category.bedroom, 10);
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


            var url = './angularjs/ajax/product/addProduct.php';

            var formData = new FormData($("form#Category")[0]);
            formData.append('state', state);
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    if (response== '100') {
                        alert("Please input image!");
                    }else if(response== '101'){
                        alert("Please chose image file for upload image!");
                    } else {
                        alert("ADd new item Succsess!");
                        location.reload();
                    }

                }
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


