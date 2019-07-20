<?php
    $contentBodyJson = file_get_contents('php://input');
    $content = json_decode($contentBodyJson, true);
    $item_name = $content['itemName'];
    $strJsonFileContents = file_get_contents("json/items.json");
     // Convert to array 
     $array = json_decode($strJsonFileContents, true);
    //   var_dump($array); // print array
    //   var_dump($array['cart'][0]['productName']); 
    $itemsdetails = $array['items'];
    echo json_encode($itemsdetails);
    $items = array();
    
foreach ($array as $rkey => $itemsdetails){
    if ($itemsdetails[0]['name'] == $item_name){
        $items[] = $itemsdetails;
    } 
}

// header('Content-Type: application/json');
// echo json_encode(['result' => $items]);
echo json_encode(['result' => $items]);
// echo json_encode($customers);


    //   foreach($array['cart'] as $cart) {
    //     $productname = $cart['productName'];
    //     $price = $cart['price'];
    //     $quantity = $cart['quatity'];
    //          echo  "<td>" .  $productname . "</td>";
    //          echo "<td>" .  $price . "</td>";
    //          echo  "<td>" . $quantity . "</td>" ;
    //          echo "</ul>";
    //          echo "</td>";

    //   }
      ?>


?>