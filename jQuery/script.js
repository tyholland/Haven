$(document).ready(function() {
	/*********************************************
		Each individual element has two calls.
		The first call happen on the mouseover
		and the second call happens on the
		mouseout.
	*********************************************/
	$('#photo1').on('mouseover', switchImage)
		.on('mouseout', restoreImage);

	$('#photo2').on('mouseover', switchImage)
		.on('mouseout', restoreImage);

	$('#photo3').on('mouseover', switchImage)
		.on('mouseout', restoreImage);

	$('#photo4').on('mouseover', switchImage)
		.on('mouseout', restoreImage);

	$('#photo5').on('mouseover', switchImage)
		.on('mouseout', restoreImage);

	/*********************************************
		This function changes the character's
		main image to a secondary image.
	*********************************************/
	function switchImage() {
		var $this = $(this),
			hero = $this.attr('name');
		$this.attr('src', '/Haven/Images/super' + hero + '.jpg');
	}

	/*********************************************
		This function changes the character's
		secondary image back to the main image.
	*********************************************/
	function restoreImage() {
		var $this = $(this),
			hero = $this.attr('name');
		$this.attr('src', '/Haven/Images/' + hero + '.jpg');
	}
});