$(document).ready(function() {
	$('.oleg_is_ok').on('submit', function (e) {
		e.preventDefault();
		var data = $(this).serialize();
		$.ajax({
			type: "GET",
			url: "/form.php",
			data: data
		});
	})
});