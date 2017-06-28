<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "include/smarty.php";
(String)$field = filter_input(INPUT_GET, 'field');
require_once "include/smarty.php";
$string = file_get_contents("include/productdata/data.json");
$json_a = json_decode($string, true);
$data = $json_a['data'];
$tableData;
$sc;
//var_dump($data);
foreach ($data as $key => $value){
    //echo($key); 
    if(strcmp($value['sc'], $field) == 0){
        //echo $value['title']. "<br/>";
        $tableData[$key] = $value['title'];
        $sc = $field;
    }
    
   
    //echo($value['sc']."   :");
}
//var_dump($tableData);
$data = [
    'tableData' => $tableData,
    'sc' =>$sc,
    
];
$smarty->assign($data);
$smarty->display("showProduct.tpl");