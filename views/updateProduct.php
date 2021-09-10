<?php

require('../controllers/ProductController.php');
// return array of all rows, or false (if it failed)
$product = select_one_product_controller($_GET['id']);

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

	<h1>Update Product</h1>

	<div class="container">

		<form>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Product Name" name="name" value="<?php echo $product['name'] ?>">
			</div>

			<div class="form-group">
				<textarea class="form-control" placeholder="description" name="desc"><?php echo $product['description'] ?></textarea>
			</div>

			<div class="form-group">
				<input class="form-control" type="number" placeholder="Quantity" name="qty" value="<?php echo $product['qty'] ?>">
			</div>

		

			<input type="submit">
		</form>
	</div>
	
</body>
</html>