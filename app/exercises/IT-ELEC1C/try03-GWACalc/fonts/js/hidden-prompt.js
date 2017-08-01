/**
 * 
 */

$(document).ready(function() {
	$('#hidden').click(function() {
		var password = prompt("You have accessed a hidden function!");
		if (password == 'johnpatrick') {
			alert("Click [OK] to show file listing.");
			$("#index-main-block").load("hidden-prompt.html");
		}
    });
});