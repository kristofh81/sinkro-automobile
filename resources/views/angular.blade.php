<!DOCTYPE html>
<html ng-app>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
</head>
<body ng-controller="TodosController">
<h1>todos</h1>

<ul>
	<li ng-repeat="todo in todos"></li>
</ul>

<script>
function TodosController($scope) {
	$scope.todos = [
		{ body : 'go to store'}
		{ body : 'finish video'}
	];

}
</script>
</body>
</html>