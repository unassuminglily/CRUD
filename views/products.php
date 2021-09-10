<?php

require('../controllers/ProductController.php');
// return array of all rows, or false (if it failed)
$products = select_all_products_controller();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Products</title>
</head>
<body>

	<h1>Products</h1>

	<div class="container">
<!-- whatever goes into the form is sent to product action -->
		<form method="post" action="../actions/productAction.php" >
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Product Name" name="name" >
			</div>

			<div class="form-group">
				<textarea class="form-control" placeholder="description" name="description"></textarea>
			</div>

			<div class="form-group">
				<input class="form-control" type="number" placeholder="Quantity" name="qty">
			</div>

			<input type="submit" name="addProductButton">
		</form>
	</div>
	<br>
	<br>







	 <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
				<th></th>
				<th></th>
            </tr>
        </thead>

        <tbody>
			<?php
			foreach($products as $x){
				echo 
				"
				<tr>
					<td>{$x['name']}</td>
					<td>{$x['description']}</td>
					<td>{$x['qty']}</td>
					<td><a href='updateProduct.php?id={$x['id']}'>Update</a></td>
					<td><a href='../actions/productAction.php?deleteProductID={$x['id']}'>Delete</a></td>
				</tr>
				";
			}

			?>

		
        </tbody>
    </table>
	
	
</body>
</html>