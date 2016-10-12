// JavaScript Document

var app = angular.module('mailerApp', [])

app.controller('FormController', function($http, $scope) {
		this.submit = function(v) {
			
			if(v){
				var data = {
					"name": this.review.name,
					"quantity": this.review.quantity,
					"address": this.review.address,
					"address2": this.review.address2,
					"comment": this.review.comment,
					"author": this.review.author,
					"url" : this.review.url,
					"radio" : this.review.radio,
				};
				console.log(data);
				$http.post('email-form.php', data);
				$scope.contactForm.$setPristine();
				this.review = {};
				confirm("Buy The Things We Cook Now?");
			} else {
				alert("Please be sure all required fields are filled before submitting.");
			};
		};
	}).controller('MasonryController', function($scope) {	
});