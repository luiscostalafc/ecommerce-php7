<?php

use \Hcode\Page;
use \Hcode\Model\Product;
use \Hcode\Model\Category;


$app->get('/', function() {

$products = Product::listAll();	
    
$page = new Page();

$page->setTpl("index", [
'products'=>Product::chekList($products)

]);	

});

$app->get("/categories/:idcategoy", function($idcategory){


$category = new Category();

$category->get((int)$idcategory);

$page = new Page();

$page->setTpl("category", [
'category'=>$category->getValues(),
'products'=>Product::checkList($category->getProducts())

]);


});




?>