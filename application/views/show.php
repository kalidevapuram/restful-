<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
</head>
<body>
	<div>
	

		<h3> Product <?=     $pro_data['id']?></h3>
		<h4>Name: <?=    $pro_data['Name']?> </h4>
		<h4>Description: <?= $pro_data['Descriptions']?> </h4>
		<h4>Price: <?= $pro_data['Price']?></h4>
		
		<a href="/products/edit/<?=$pro_data['id']?>">Edit</a>
		<a href="/products">Back</a>
	
	
	</div>
</body>
</html>