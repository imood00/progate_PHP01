<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

$totalPrice=0;
// この下にコードを書いてください
foreach($menus as $menu){
  $price = $menu["price"];
  $totalPrice += $price;
  echo $menu["name"]."は".$menu["price"]."円です";
  echo '<br>';
}
echo "合計金額は".$totalPrice."円です";

?>