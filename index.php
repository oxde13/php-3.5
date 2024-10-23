<?php
//Задача 1: Создание простого массива
$names = ['Ivan', 'Artem', 'Ira', 'Kira'];
foreach ($names as $name) {
  print_r($name."\n");
}

//Задача 2: Индексы массива
$a = [1, 2, 4, 6, 7];
echo $a[2] ."\n";

//Задача 3: Ассоциативный массив

$friends = [
  "name" => "John",
  "age" => 30,
  "city" => "Rostov"
];

echo $friends["name"];
echo $friends["age"]."\n";

//Задача 4: Массивы с циклами

$numbers = [1, 6, 101, 98, 0];
foreach ($numbers as $number) {
  if ($number>10) {
    echo $number."\n";
  }  
}

//Задача 5: Работа с массивами функций

$b = [1, 5, 6, 4, 7];
echo array_sum($b)."\n";

//Задача 6: Учет товаров в магазине

$products =[
  [  "name"=> "apple",
  "price" => "10",
  "quantity" => "2"
],
[
  "name"=> "pear",
  "price" => "12",
  "quantity" => "20"
],
[
  "name"=> "plum",
  "price" => "13",
  "quantity" => "5"
],
[
  "name"=> "pineapple",
  "price" => "30",
  "quantity" => "28"
],
[
  "name"=> "cherry",
  "price" => "40",
  "quantity" => "23"
  ]
];

$list = [];
foreach ($products as $product) {
  echo  $product ["name"];
  echo  $product ["price"]."\n";
};

function add ($products2) {
  global $products;
  array_push($products, $products2);
  
};
$products2 =
[  "name"=> "banana",
"price" => "10",
"quantity" => "2"
];

add ($products2);

print_r($products);




function total_quantity ($quantity, $name) {
  global $products;
  
  foreach ($products as &$product) {
    if ($product['name'] == $name) {
    
      $product['quantity'] = $quantity;
    };
  };
  
};

total_quantity (30, 'apple');

print_r($products);
