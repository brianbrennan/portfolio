var app = angular.module("workApp",["ngAnimate","ngRoute"]);




app.controller('workController',function($scope,$http){
	$scope.works = [
			{"name":"First Piece of Work"},
			{"name":"First Piece of Work"},
			{"name":"First Piece of Work"},
			{"name":"First Piece of Work"},
			{"name":"First Piece of Work"}
		];
});