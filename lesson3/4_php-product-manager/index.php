<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

echo
	'<div class="container" style="

		padding: 16px;
		max-width: 700px;
		margin: 100px auto;
		border: 3px solid black;
	">';
try {
	//  display ============================================================================================
	// NOTE: code viết ở đây :)

	$productManager = new ProductManager();
	$productManager->add(new Product("1. Laptop"));
	$productManager->add(new Product("2. Mobile"));

	$products = $productManager->getProducts();
	foreach ($products as $product) {
		echo $product->getName() . "<br/>";
	}
	// ============================================================================================
} catch (Throwable $e) {
	// Bắt tất cả lỗi và ngoại lệ (Error và Exception)

	echo ' <br />
	<strong>
		Caught exception: ', $e->getMessage(), "
	</strong>
	<br />";

} finally {// không đặt cũng được, nhưng đặt finnally cho chắc :)
	echo '<a style="
		display: block;
		text-align: center;
		border: 1px solid black;
		text-decoration: none;
		color: black;
		font-weight: bold;
		margin-top: 16px;
		padding: 8px;
	" href="../">
		Trang chủ
	</a>';
}
echo '
</div>';