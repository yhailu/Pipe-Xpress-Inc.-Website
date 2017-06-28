<?php
/* 
 * Author: Yesusera Hailu
 */
require_once "include/smarty.php";
/*$string = file_get_contents("include/productdata/data.json");
$json_a = json_decode($string, true);
$data = $json_a['data'];
//var_dump($data);
foreach ($data as $key => $value){
    //echo($key); 
    if($value['sc'] == '001'){
        echo $value['title']. "<br/>";
    }
    //echo($value['sc']."   :");
}
//var_dump($json_a);
//var_dump($json_a['data'][0]);
foreach ($json_a[0] as $product => $value) {
    $a=2;
    echo($value[$a]['title']); 
    $a++;
   
}

foreach ($json_a as $product){
    //print_r($product);
    $i = 0;
    
    if($product[$i]['sc'] == 001){
        echo($product[$i]['title']);
    }
    $i++;
    
}*/

$smarty->display("products.tpl");
