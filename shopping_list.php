<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Team Ideya++</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <!-- <a href="#" class="navbar-brand mr-3">Shopping List</a> -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Services</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Register</a>
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </div>    
</nav>


    <div class="jumbotron">
    <div class="container">
<!-- <div class="card" id ="profile">
  <img src="images.png" alt="John" style="width:100%">
  <h1>Jamie Santos</h1>
  <p class="title">Shopper</p>
</div> -->
        <div id="exTab1" class="container">	

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#1a">NEW SHOPPING LIST</a>
            </li>
        
        </ul>
			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
                       <?php  
                         $strJsonFileContents = file_get_contents("json/shoppingList.json");
                         $array = json_decode($strJsonFileContents, true);

                         $stores = file_get_contents("json/stores.json");
                         $storesArray = json_decode($stores, true);
                         $count_item = 0;
                          foreach($array['shoppingList'] as $list) {
                            echo "<div class='card' id='list'>";
                                    $productname = $list['productName'];
                                    $price = $list['price'];
                                    $quantity = $list['quatity'];
                                    $oldprice = $price +10;
                                    $image = $list['image'];

                                echo "<div class = 'row'>";
                                        echo "<div id='image'>";
                                        //TODO: image url from jsonfile
                                        echo "<img src= $image  width='50' height='60'>";
                                        echo "</div>";

                                        echo "<div style ='display:inline-flex;margin-right:10px;'>";
                                                echo  "<h5>" . 'Php ' . $price . "</h5>";
                                            
                                        echo "</div>";

                                        echo "<div style ='display:inline-block'>";
                                                echo  "<small>" . 'Old Price ' . "</small>";
                                                echo  "<h5>" . 'Php ' .  $oldprice. "</h5>";
      
                                        echo "</div>";
                                  

                                echo " </div>";
                            echo " </div>";
                            
                            //search stores
                            // $count;
                         
                            foreach($storesArray['stores'][0]['products'] as $storesnames){
                             
                                if($storesnames['name']== $productname){
                                     
                                    // foreach($storesArray['stores'][0]['products'] as $storesnames){
                                    
                                        if($storesnames['name'] == $productname){
                                            
                                            $count_item++;
                                            $itemname = $storesnames['name'];
                                            $itemprice = $storesnames['price'];
                                        }else {
                                            $count_item = 0;
                                    }
                             //  }
                                    // $count_item++;
                                    
                                }
                            }

                            foreach($storesArray['stores'] as $storeslist) {

                                if($storeslist['products'][0]['name'] == $productname)
                                {
                                    $count;
                                    echo "<div class='card' id='list'>";
                                    echo "<h3 style ='color:red;'>" . $storeslist['name'] . "</h3>" . 'got' . ' ' .  $count_item . ' items ' . ' from your list';
                                    echo "<button data-toggle='modal' data-target='#myModal'>" .'Check Items' . "</button>";
                                    // <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                                        foreach($storesArray['stores'][0]['products'] as $storesnames){
                             
                                          if($storesnames['name'] == $productname){
                                             
                                            // foreach($storesArray['stores'][0]['products'] as $storesnames){
                                            
                                                if($storesnames['name'] == $productname){
                                                    
                                                    // $count_item++;
                                                    // $itemname = $storesnames['name'];
                                                    // $itemprice = $storesnames['price'];
                                                    // echo $itemname;
                                                    // echo $itemprice;
                                                    
                                                }else {
                                                    // $count_item = 0;
                                            }
                                     //  }
                                            // $count_item++;
                                            
                                        }
                                    }
                                    
                                     echo "</div>";
                                    $count++;
                                }
                                
                                else {
                                    $count = 0;
                                }

                                
                              } 





                              

                          }    
                                // <!-- Trigger the modal with a button -->

                                // <!-- Modal -->
                               echo "<div id='myModal' class='modal fade'role='dialog'>";
                               echo "<div class='modal-dialog'>";

                                    // <!-- Modal content-->
                                    echo "<div class='modal-content'>";
                                    echo "<div class='modal-header'>";
                                       
                                   echo "</div>";
                                   echo "<div class='modal-body'>";

                                    // <?php 
                                    $stores = file_get_contents("json/stores.json");
                                     $storesArray = json_decode($stores, true);
                                        foreach($storesArray['stores'] as $storesnames){
                                            foreach($storesnames['products'] as $prods){
                                             if($prods['name']== $productname){
                                                 
                                                // foreach($storesArray['stores'][0]['products'] as $storesnames){
                                        
                                                   // if($storesnam['name'] == $productname){
                                                        
                                                        // $count_item++;
                                                    $itemname = $prods['name'];
                                                    echo  $itemname . "<br>";
                                                   $itemprice = $prods['price'];
                                                    echo   $itemprice . "<br>";
                                                    }else {
                                                        // $count_item = 0;
                                                }
                                        //  }
                                                // $count_item++;
                                            }  
                                            }
                                        // }
                                    // 
                                       
                                  echo  "</div>";
                                  echo  "<div class='modal-footer'>";
                                      echo  "<button type='button' class='btn btn-default' data-dismiss='modal'>" . 'Close' . "</button>";
                                   echo "</div>";
                                   echo "</div>";

                              echo  "</div>";
                              echo  "</div>";
                          echo "<h5 style='color:red;text-align:center'>" .  "<h4 id = 'totalstore'>" . $count . "</h4>" .  'Stores Found!' . "</h5>";

                          ?> 
                </div> 
              
                <div class="tab-pane" id="2a" data-toggle="tab">
                
                <?php  
                             $strJsonFileContents = file_get_contents("json/cart.json");
                             $array = json_decode($strJsonFileContents, true);
                             
                              foreach($array['cart'] as $cart) {
                                echo "<div class='card' id='list'>";
                                $productname = $cart['productName'];
                                $price = $cart['price'];
                                $quantity = $cart['quatity'];
                            echo "<div id = 'legend' style = 'display:inline'>";
                              echo "<img src='assets/yellow.png' width='20' height='20'>" . 'Fullfilled';
                              echo "<img src='assets/green.jpg' width='20' height='20'>" . 'On Store';
                              echo "<img src='assets/blue.png' width='20' height='20'>" . 'Cancelled';
                            echo "</div>";
                               echo "<div class = 'row'>";
                               echo "<div id='list'>";
                               echo "<h5>" . '00005' . "</h5>";                         
                               echo "<h5>" . 'july 20,2019'. "</h5>";
                               echo "<h5>" . 'Metro Supermarket'. "</h5>";
                               echo "<h5>" . 'Receipt No: 20021022'. "</h5>";
                               echo "</div>";
    
                               echo "<div>";
                                     echo  "<h5>" . 'Php ' . '3,205.OO' . "</h5>";
                                     echo  "<small>" . 'You saved P202.OO from your transaction' . "</small>";
                                  
                               echo " </div>";
    
                                     echo " </div>";
                                     echo " </div>";
                                
                            
                              }    
                              ?>        
    
             </div>
                </div>

		</div>
       
         
			</div>
  </div>

    
    </div>
    <div class="row">
      
    </div>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2019 Team Ideya++</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
</body>
<script src= "scripts.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>                            