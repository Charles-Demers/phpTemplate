<?php 
	require_once 'functions/init.php';

	$title = 'Home';
	require_once 'includes/head.php';
?>
<!-- Content starts -->

<a href="#" class="profile-link" id="1">This is link #1</a>

<script>
	$(function(){

		//On hover of profile link
		$('.profile-link').on('mouseover', showProfileBox(this));

		function showProfileBox(element)
		{
			var id = element.attr('id');
			alert(id);
		}
	});
</script>

<!-- Content ends -->
<?php 
	require_once 'includes/foot.php';
?>