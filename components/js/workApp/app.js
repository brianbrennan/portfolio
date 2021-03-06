var app = angular.module("workApp",["ngAnimate","ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider.
      when('/', {
      	controller: 'WorkController',
        templateUrl: 'components/partials/main.html',
        controllerAs:'app'
      }).
      when('/:work_id', {
      	controller: 'WorkController',
        templateUrl: 'components/partials/single.html',
        controllerAs: 'app'
      }).
      otherwise({
        redirectTo: '/'
      });
});

var works = [
	{"name":"First Piece of Work","work_id":"00"},
	{"name":"Second Piece of Work","work_id":"01"},
	{"name":"Third Piece of Work","work_id":"02"},
	{"name":"Fourth Piece of Work","work_id":"03"},
	{"name":"Fifth Piece of Work","work_id":"04"}
	];


app.controller('WorkController',function($scope,$http,$routeParams){
	this.works = works;
  this.num = $routeParams.work_id;
});
