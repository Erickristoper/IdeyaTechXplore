<?php
 $contentBodyJson = file_get_contents('php://input');
 $content = json_decode($contentBodyJson, true);
 $item_name = $content['itemName'];
 $item_price = $content['price'];
 echo $item_name;
?>