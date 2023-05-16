<?php
//session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
    case "add":
        if(!empty($_POST["qty"])) {
            $productByCode = $db_handle->runQuery("SELECT * FROM product WHERE product_id='" . $_GET["code"] . "'");
            $itemArray = array($productByCode[0]["product_id"]=>array('name'=>$productByCode[0]["product_name"], 'code'=>$productByCode[0]["product_id"], 'quantity'=>$_POST["qty"], 'price'=>$productByCode[0]["selling_price"], 'image'=>$productByCode[0]["product_image"]));
            
            if(!empty($_SESSION["cart_item"])) {
                if(in_array($productByCode[0]["product_id"],array_keys($_SESSION["cart_item"]))) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                            if($productByCode[0]["product_id"] == $k) {
                                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["qty"];
                            }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
        }
    break;
    case "remove":
        if(!empty($_SESSION["cart_item"])) {
            foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);              
                    if(empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
            }
        }
    break;
    case "empty":
        unset($_SESSION["cart_item"]);
    break;  

    mysqli_query($db_handle,"insert into addtocart values('','')");
}
}
?>