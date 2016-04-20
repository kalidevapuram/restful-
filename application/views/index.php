<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">
			<h3>Products</h3>
			<table class="table table-bordered">
				<thead>
			    <tr>
			    	<th>id</th>			     
			      <th>Name</th>
			      <th>Description</th>
			      
			      <th>Price</th>
			      <th>created_at</th>
			      <th>Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			    
			     <?php foreach ($data as $key ) 
			      {?>
			      <tr>
			      <th scope="row"><?= $key['id']?></th>
			     
			      	<td><?= $key['Name']?></td>
			      	<td><?= $key['Descriptions']?></td>
			      	<td><?= $key['Price']?></td>
			      	<td><?= $key['created_at']?></td>
			      	<td><a href="/products/show/<?= $key['id']?>">show</a>
			      	<a href="/products/edit/<?= $key['id']?>">edit</a>
			      	<form action="/products/destroy/<?= $key['id']?>" method="post">
			      		<input type="submit" value="Remove">
			      	</form>
			      	</td>
			      	</tr>
			      <?php } ?>  
			    
			  </tbody>
			</table>
			<form action="new" method="post"><a href="new">Add a new Product</a></form>
		</div>
	</div>

</body>
</html>