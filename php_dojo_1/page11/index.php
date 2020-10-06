<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

$totalPrice=0;
$maxPrice=0;
$maxPriceMenu = "";
// この下にコードを書いてください
foreach($menus as $menu){
  $name = $menu['name'];
  $price = $menu["price"];
  $totalPrice += $price;
  
  
  echo $menu["name"]."は".$menu["price"]."円です";
  echo '<br>';
  
  if($maxPrice<=$price){
    $maxPrice = $price;
    $maxPriceMenuName = $name;
  }
  
}
echo "合計金額は".$totalPrice."円です";
echo '<br>';
echo $maxPriceMenuName."が最高価格で".$maxPrice."円です"
?>