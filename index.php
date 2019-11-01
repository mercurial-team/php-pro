<?php
class Product{
	public $id;
	public $name;
	public $description;
	public $category;
	public $image;
	public $price;
	
	public function __construct($id = null, $name = null, $description = null, $category = null, $image = null, $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
		$this->image = $image;
        $this->price = $price;
    }
	
	public function display(){
		echo "<div class = 'product'>".
		"<h1> {$this->name}</h1>".
		"<p>id: {$this->id}</p>".
		"<img src = '{$this->image}'>".
		"<p> {$this->description}</p>".
		"<p>Категория: {$this->category}</p>".
		"<p>Цена: {$this->price}$</p></div>";	
	}
	
}

class Sale extends Product{
	
    public $discount;
	public $salePrice;
	
	public function __construct($id = null, $name = null, $description = null, $category = null, $image = null, $price = null, $discount = 0)
    {
		parent::__construct($id, $name, $description, $category, $image, $price);
        $this->discount = $discount;
		$this->salePrice = $this->price * (1 - $this->discount);
	}
		
	public function display(){
		echo "<div class = 'product'>".
		"<h1> {$this->name}</h1>".
		"<p>id: {$this->id}</p>".
		"<img src = '{$this->image}'>".
		"<p> {$this->description}</p>".
		"<p>Категория: {$this->category}</p>".
		"<p>Старая цена: <span class = 'old_price'>{$this->price}$</span></p>".
		"<p>Новая цена {$this->salePrice}$</p></div>";	
	}

}
$product = new Product(1, "Динамит", "Этот товар просто бомба!", "Взрывчатка", "img/dinamite.jpg", "100");
$product2 = new Sale(2, "Динамит", "Этот товар просто бомба!", "Взрывчатка", "img/action.jpg", "100", 0.5);
echo"<link href = 'css/style.css' rel='stylesheet'>";

echo"<div class = 'catalog'>";//Это все конечно в идеале в отдельный класс положить
	$product->display();
	$product2->display();
echo"</div>";

/*class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // Выведет 1
$a2->foo(); // выведет 2
$a1->foo(); // выведет 3
$a2->foo(); // выведет 4
*/
//Переменная созданная как статичная, привязана к классу как таковому, а не к его экземплярам.

/*class A {
    public function foo() {
        static $x = 0;
        echo ++$x; //Префиксный инкремент
    }
}
class B extends A {
}
$a1 = new A(); //экземпляр класса А
$b1 = new B(); //экземпляр класса В
$a1->foo(); //выведет 1, счетчик x в классе А увеличивается.
$b1->foo(); //выведет 1, счетчик x в классе B увеличивается.
$a1->foo(); //выведет 2, счетчик x в классе А увеличивается.
$b1->foo(); //выведет 2, счетчик x в классе B увеличивается.
*/
// Класс B наследник класса A, но это не значит что у них общие внутренние переменные. По сути - это 2 копии класса.


