<?php

	$page = urldecode($_POST['page']);
	if($page == "") { $page = "home"; }
?>

	<?php
		if($page == 'home'
			|| $page == 'call-for-papers' 
			|| $page == 'register' 
			|| $page == 'sponsorship' 
			|| $page == 'organizer'
			|| $page == 'selected-papers' 
			|| $page == 'y-u-no' ) {
				
			include("../page/" . $page . ".php");
		} else {
			include("../page/error.html");
		}
		
	?>