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
<div class="card" id ="profile">
  <img src="images.png" alt="John" style="width:100%">
  <h1>Jamie Santos</h1>
  <p class="title">Shopper</p>
</div>
        <div id="exTab1" class="container">	

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#1a">MY SHOPPING LIST</a>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href="#2a">ORDERS</a> -->
              
            </li>
           
        </ul>
			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
                       <?php  
                         $strJsonFileContents = file_get_contents("json/cart.json");
                         $array = json_decode($strJsonFileContents, true);
                    
                          foreach($array['cart'] as $cart) {
                            echo "<div class='card' id='list'>";
                            $productname = $cart['productName'];
                            $price = $cart['price'];
                            $quantity = $cart['quatity'];
                           echo "<div class = 'row' style='margin-left:10px'>";
                           echo "<div id='list'>";
                           echo "<p>" . 'Shopping List 1' . "</p>";                         
                           echo "<p>" . 'SM North Hypermarket'. "</p>";
                           echo "<p>" . '4 Items on list'. "</h5>";
                           echo "<p>" . 'Last Transaction: July 20, 2019'. "</p>";
                           echo "</div>";
                           echo "<div>";
                                 echo  "<p>" . 'Php ' . '3,205.OO' . "</p>";
                                 echo  "<small>" . 'Old Price: 3,225.00' . "</small>";
                              
                           echo " </div>";

                                 echo " </div>";
                                 echo " </div>";
                          }    
                          ?>
                </div> 
                
                <a href="shopping_list.php">Shopping list</a>     
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
                               echo "<small>" . '00005' . "</small>";                         
                               echo "<small>" . 'july 20,2019'. "</small>";
                               echo "<small>" . 'Metro Supermarket'. "</small>";
                               echo "<small>" . 'Receipt No: 20021022'. "</small>";
                               echo "</div>";
    
                               echo "<div>";
                                     echo  "<h6>" . 'Php ' . '3,205.OO' . "</h6>";
                                     echo  "<small>" . 'You saved P202.OO from your transaction' . "</small>";
                                  
                               echo " </div>";
    
                                     echo " </div>";
                                     echo " </div>";
                                
                            
                              }    
                              ?>        

             </div>
                </div>
         <!-- <div class ="tab-content clearfix"> -->

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