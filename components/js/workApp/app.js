var app = angular.module("workApp",["ngAnimate","ngRoute"]);

app.config(function($routeProvider){
	$routeProvider.when("/",
	{
		controller:"WorkController",
		controllerAs: "app"
	});
});


app.controller('WorkController',function($scope,$http){
	$scope.works = [
	{"name":"First Piece of Work","img":"https://unsplash.it/800"},
	{"name":"Second Piece of Work","img":"https://unsplash.it/601"},
	{"name":"Third Piece of Work","img":"https://unsplash.it/880"},
	{"name":"Fourth Piece of Work","img":"https://unsplash.it/600"},
	{"name":"Fifth Piece of Work","img":"https://unsplash.it/700"}
	];
});