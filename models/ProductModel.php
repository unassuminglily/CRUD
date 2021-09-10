<?php

require('../database/connection.php');

// inherit the methods from Connection, it's a class which contains the functions of the vatious instances
class Product extends Connection{


	function add_product($name, $desc, $quantity){
		// return true or false
		return $this->query("insert into products(name, description, qty) values('$name', '$desc', '$quantity')");
	}

	function delete_one_product($id){
		// return true or false
		return $this->query("delete from products where id = '$id'");
	}

	function update_one_product($id, $name, $description, $qty){
		// return true or false
		return $this->query("update products set name='$name', description='$description', qty='$qty' where id = '$id'");
	}

	function select_all_products(){
		// return array or false
		return $this->fetch("select * from products");
	}

	function select_one_product($id){
		// return associative array or false
		return $this->fetchOne("select * from products where id='$id'");
	}

}

?>