<?php require_once('/layouts/header.php'); ?>
<style type="text/css">
    ul>li, a{cursor: pointer;}
</style>


<div class="row">
    <div class="col-md-12">
        <ul class="breadcrumbs-alt">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a class="active-trail active" href="#">Pages</a>
            </li>
            <li>
                <a class="current" href="#">Elements</a>
            </li>
        </ul>
    </div>
</div>
<div  ng-app="myApp"> 
    <div ng-controller="customersCrtl">

        <div class="row">
            <div class="col-md-2">PageSize:
                <select ng-model="entryLimit" class="form-control">
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
            <div class="col-md-3">Filter:
                <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" />
            </div>
            <div class="col-md-4">
                <h5>Filtered {{ filtered.length}} of {{ totalItems}} total customers</h5>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12" ng-show="filteredItems > 0">
                <table class="table table-striped table-bordered">
                    <thead>
                    <th>ID&nbsp;<a ng-click="sort_by('id');"><i class="glyphicon glyphicon-sort"></i></a></th>
                    <th>Name&nbsp;<a ng-click="sort_by('name');"><i class="glyphicon glyphicon-sort"></i></a></th>
                    <th>Name2&nbsp;<a ng-click="sort_by('name2');"><i class="glyphicon glyphicon-sort"></i></a></th>

                    </thead>
                    <tbody>
                        <tr ng-repeat="data in filtered = (list| filter:search | orderBy : predicate :reverse) | startFrom:(currentPage - 1) * entryLimit | limitTo:entryLimit">
                            <td>{{data.id}}</td>
                            <td>{{data.name}}</td>
                            <td>{{data.name2}}</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12" ng-show="filteredItems == 0">
                <div class="col-md-12">
                    <h4>No customers found</h4>
                </div>
            </div>
            <div class="col-md-12" ng-show="filteredItems > 0">    
                <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>


            </div>
        </div>
    </div>
</div>    
<script src="./angularjs/js/angular.min.js"></script>
<script src="./angularjs/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="./angularjs/app/app.js"></script>   

<?php require_once('/layouts/footer.php'); ?>



