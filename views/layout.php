<!DOCTYPE html>
<html lang="en">
<head>
  <title>Angular & PHP Tutorial</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--angular js cdn-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="https://code.angularjs.org/1.6.4/angular-route.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!--our code-->
  <!--our code-->
  <script src="js/app.js"></script>
  <script src="js/controller.js"></script>
</head>
<body>
	<div class="container">
		<h2 style="font-style: italic; color: darkblue;">Angular & PHP</h2>
		<hr></hr>
		<div class="main"><?php require_once("routes.php");?></div>
	</div>
	<br />
</body>
</html>
