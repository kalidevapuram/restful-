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
	<h4>Edit Product <?=$pr_data['id']?></h4>

	<form action="/update/<?=$pr_data['id']?>" method="post">
		Name:<input type="text" name="name" value="<?php echo $pr_data['Name'];?>"><br><br><br>
		Description:<input type="text" name="description" value="<?php echo $pr_data['Descriptions'];?>"><br><br><br>
		Price:<input type="text" name="price" value="<?php echo $pr_data['Price'];?>"><br><br><br>
		<input type="submit" value="update">
	</form>

	<a href="/products/show/<?=$pr_data['id']?>">show</a>
	<a href="/products">Back</a>
	</div>
</body>
</html>