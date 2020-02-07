<?php

if(isset($_POST) && !empty ($_POST)){
	
	echo "<pre>";
		print_r($_POST);
	    print_r($_REQUEST);
		print_r($_SERVER);
	exit('Am ajuns aici');
	
}


?>





<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>My Dream</title>
   
	</head>
    
<body>
	<!-- HEADER -->
	
	<?php include('html/header.html');?>
	
	<!-- END HEADER -->
	<main>
	<?php include('html/form.html');?>
	</main>
	
<!-- footer -->	
	
	<?php include('html/footer.html');?>
	
<!-- end footer -->		
</body>
</html>