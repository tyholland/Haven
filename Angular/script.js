var app = angular.module('haven', []);

app.controller('superHaven', function($scope) {
	/*********************************************
		Each individual character's default
		image.
	*********************************************/
	$scope.bigDog = '../Images/bigdog.jpg';
	$scope.tMac = '../Images/t-man.jpg';
	$scope.tBoom = '../Images/t-boom.jpg';
	$scope.mightyOne = '../Images/mighty-one.jpg';
	$scope.snookie = '../Images/snookie.jpg';

	/*********************************************
		This function changes the character's
		main image to a secondary image.
	*********************************************/
	$scope.switchImage = function() {
		$scope.bigDog = '../Images/superbigdog.jpg';
		$scope.tMac = '../Images/supert-mac.jpg';
		$scope.tBoom = '../Images/supert-boom.jpg';
		$scope.mightyOne = '../Images/supermighty-one.jpg';
		$scope.snookie = '../Images/supersnookie.jpg';
	}

	/*********************************************
		This function changes the character's
		secondary image back to the main image.
	*********************************************/
	$scope.restoreImage = function() {
		$scope.bigDog = '../Images/bigdog.jpg';
		$scope.tMac = '../Images/t-mac.jpg';
		$scope.tBoom = '../Images/t-boom.jpg';
		$scope.mightyOne = '../Images/mighty-one.jpg';
		$scope.snookie = '../Images/snookie.jpg';
	}
});