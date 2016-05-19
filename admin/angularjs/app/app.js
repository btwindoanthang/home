var app = angular.module('myApp', ['ui.bootstrap']);

app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});
app.controller('customersCrtl', function ($scope, $http, $timeout) {
    
    $http.get('./angularjs/ajax/getCategorys.php').success(function(data){
        $scope.list = data;
       
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 5; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;
    });
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() { 
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };
    
    $scope.modal = function (state,id) {
		$scope.state = state
		switch (state) {
			case "add" :
				$scope.frmTitle = "Add Category";
				break;
			case "edit" :
                            
				$scope.frmTitle = "Edit Category";
				$scope.id = id;
				$http.get('./angularjs/ajax/getCategory.php/?id=' + id).success(function (response) {
					$scope.category = response;
                                        console.log(response);
				});
				break;
			default :
				$scope.frmTitle = "Không Biết";
				break;
		}
		$("#myModal").modal('show');
	};
});


