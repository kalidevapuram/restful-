<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div id="container" class="col-xs-6 col-xs-offset-1">
	<h4>Add a new product</h4>
	<form action="form" method="post">
		<p style='color:red'> <?php echo $this->session->flashdata('error'); ?></p>
		<p style='color:green'> <?php echo $this->session->flashdata('added'); ?></p>
		Name:<input type="text" name="name"><br><br><br>
		Description:<input type="text" name="description"><br><br><br>
		Price:<input type="text" name="price"><br><br><br>
		<input type="submit" value="create">
	</form>
	<a href="/products"> Go back</a>

</body>
</html>