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
		<input type='submit' value='Add to cart' /><br />
		</form>
		</div>
		</div>";
	}
}
$LotR = new SaleItem(0, "The Lord of the Rings", "J.R. Tolkien", "http://ecx.images-amazon.com/images/I/51Nq%2Bl67AEL._AA160_.jpg", 11.87);
$EotW = new SaleItem(1, "The Eye of the World", "Robert Jordan", "http://ecx.images-amazon.com/images/I/5164%2Bq5eGfL._AA160_.jpg", 7.99);
$WoK = new SaleItem(2, "The Way of Kings", "Brandon Sanderson", "http://ecx.images-amazon.com/images/I/51bjoG8C%2B4L._AA160_.jpg", 8.99);
$CT = new SaleItem(3, "The Crown Tower", "Michael J. Sullivan", "http://ecx.images-amazon.com/images/I/51jIQA2jq9L._AA160_.jpg", 8.89);
$BtS = new SaleItem(4, "Belgarath the Sorcerer", "David Eddings", "http://ecx.images-amazon.com/images/I/51BmlSQXY5L._AA160_.jpg", 7.99);
$NotW = new SaleItem(4, "The Name of the Wind", "Patrick Rothfuss", "http://ecx.images-amazon.com/images/I/51HGCx5Rh6L._AA160_.jpg", 7.99);
$WFR = new SaleItem(4, "Wizards First Rule", "Terry Goodkind", "http://ecx.images-amazon.com/images/I/51rBfVFsqYL._AA160_.jpg", 6.91);
$GotM = new SaleItem(4, "Gardens of the Moon", "Steven Erikson", "http://ecx.images-amazon.com/images/I/51f1-OdVfuL._AA160_.jpg", 5.44);
$items_for_sale = array($LotR, $EotW, $WoK, $CT, $BtS, $NotW, $WFR, $GotM);
?>