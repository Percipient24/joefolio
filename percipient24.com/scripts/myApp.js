var myApp = angular.module('myApp', []);

var controllers = {};

controllers.SimpleController = function ($scope)
{
	$scope.customers = ['Dave','Joe','Bob'];
}

myApp.controller('SimpleController', controllers);

myApp.config(function($routeProvider){
	$routeProvider
		.when('/',
			{
				controller: 'SimpleController',
				templateUrl: 'View1.html'
			})
		.when('',
			{
				controller: 'SimpleController',
				templateUrl: 'View2.html'
			})
		.otherwise({redirectTo:'/'})
})