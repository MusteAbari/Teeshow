<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oxygen:400,300" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Condiment" rel="stylesheet">
		<link rel="stylesheet" href="/style.css"/ media="screen and (min-width: 800px)">
		<link rel="stylesheet" href="/mobile.css"/ media="screen and (max-width: 800px)">
		<link rel="stylesheet" href="/stylesheet/style.css"/ media="screen and (min-width: 1000px)">

    <title><?php echo $title; ?></title>
	</head>
	<body>
	   <header>
		     <section>
			        <h1></h1>
		     </section>
	   </header>
     <?php
      require 'templates/nav.php';
      ?>

      <?php echo $content; ?>

	  <footer>
		   
	  </footer>

</body>
</html>
