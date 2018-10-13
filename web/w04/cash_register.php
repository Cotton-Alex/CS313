<?php

$url = 'cart.php';

$product_image = array(
	"<img src='https://cf.geekdo-images.com/small/img/rQjxEM5tXcxTEpZOP2sWh6lfrKc=/fit-in/200x150/pic3283110.png'>",
	"<img src='https://cf.geekdo-images.com/small/img/vUgVFW2ZjbqzxFozyqjMq8ITU4c=/fit-in/200x150/pic2630294.png'>",
	"<img src='https://cf.geekdo-images.com/small/img/8tpGZcSivddqAD3JHZzsqh47Rbw=/fit-in/200x150/pic4122337.jpg'>",
	"<img src='https://cf.geekdo-images.com/small/img/cO-X3SmPeGLkirB1fcLxKgGCxeI=/fit-in/200x150/pic3355171.jpg'>"
	);

$games = array(
	"Santorini",
	"Potion Explosion",
	"Go Cuckoo!",
	"Rhino Hero: Super Battle"
	);

$amounts = array("28.99",
	"30.49",
	"19.99",
	"33.33"
	);

//Load
if (!isset($_SESSION["total"])) {
	$_SESSION["total"] = 0;
	for ($i = 0; $i < count($games); $i++) {
		$_SESSION["product_image"][$i] = 0;
		$_SESSION["qty"][$i] = 0;
		$_SESSION["amounts"][$i] = 0;
	}
}

//Reset
if (isset($_GET['reset'])) {
	if ($_GET["reset"] == 'true') {
		unset($_SESSION["qty"]);
		unset($_SESSION["amounts"]);
		unset($_SESSION["total"]);
		unset($_SESSION["cart"]);
	}
}

//Add games
if (isset($_GET["add"])) {
	$i = $_GET["add"];
	$qty = $_SESSION["qty"][$i] + 1;
	$_SESSION["amounts"][$i] = $amounts[$i] * $qty;
	$_SESSION["cart"][$i] = $i;
	$_SESSION["qty"][$i] = $qty;
	header("Location: $url");
}

//Delete games
if (isset($_GET["delete"])) {
	$i = $_GET["delete"];
	$qty = $_SESSION["qty"][$i];
	$qty--;
	$_SESSION["qty"][$i] = $qty;
	if ($qty == 0) {
		$_SESSION["amounts"][$i] = 0;
		unset($_SESSION["cart"][$i]);
	} else {
		$_SESSION["amounts"][$i] = $amounts[$i] * $qty;
	}
}
?>