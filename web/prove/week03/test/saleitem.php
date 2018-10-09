<?php
class SaleItem
{
	public $item_id;
	public $quantity;
	public $name;
	public $description;
	public $image;
	public $price;
	function __construct($item_id, $name, $description, $image, $price) {
		$this->item_id = $item_id;
		$this->name = $name;
		$this->description = $description;
		$this->image = $image;
		$this->quantity = 1;
		$this->price = $price;
	}
	public function outputBrowse() {
		return "
		<div class='w3-card w3-show-inline-block w3-margin' style='vertical-align: top;'>
		<header class='w3-container w3-green'><h3>$this->name</h3></header>
		<div class='w3-container'>
        <img src = $this->image ><br />
		<p>$this->description</p>
		<p>Price: \$$this->price</p>
		<form action='cart.php' name='update_$this->item_id'>
		<input type='hidden' name='additemid' value='$this->item_id' /><br />
		<input type='number' name='quantity' value=$this->quantity /><br />
		<input type='submit' value='Add to cart/update quantity' /><br />
		</form>
		</div>
		</div>";
	}
}
$fast_car = new SaleItem(0, "FAST CAR", "This car goes fast", "http://ecx.images-amazon.com/images/I/51Nq%2Bl67AEL._AA160_.jpg", 100000);
$slow_car = new SaleItem(1, "SLOW CAR", "This car goes slow", "slow_car.jpg", 30000);
$ugly_car = new SaleItem(2, "UGLY CAR", "This car is soooo ugly, please take it!", "ugly_car.jpg", 24000);
$green_car = new SaleItem(3, "GREEN CAR", "This car is green", "green_car.jpg", 60000);
$motorcycle = new SaleItem(4, "MOTORCYCLE", "This ca.... wait, this shouldn't be here.", "motorcycle.jpg", 8000);
$items_for_sale = array($fast_car, $slow_car, $ugly_car, $green_car, $motorcycle);
?>