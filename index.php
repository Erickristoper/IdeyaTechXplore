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
</head>
<body> 
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a href="#" class="navbar-brand mr-3">Shopping List</a>
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
<div class="container">
<a href="home.php">Home</a>    
    <div class="jumbotron">
        <h1>Shopping Cart</h1>
        <p class="lead">Enhance your shopping experience today!.</p>
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Search</span>
        </div>
        <input class="form-control" id="itemname" aria-label="With textarea">
        <input type="button" id="submit" value="Go">
        </div>
    

        <!-- <div class="container"><h1>Items </h1></div> -->
        <div id="exTab1" class="container">	

        <!-- <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#1a">ALL STORES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#2a">ON SALE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#3a">CATEGORIES</a>
            </li>
        </ul> -->
			
  </div>

        <div class="card" id="list">
                <div class = "row" id="product">               
            <div>
                                    
                            </div>
        <!-- <div class="table-responsive">
        <table class="table">
        <thead>
                       <tr>
                       <tr class="spacer"></tr>
                         <th>Product Name</th>
                         <th>Price</th>
                         <th>Quantity</th>
                         <th>&nbsp;</th>
                       </tr> 
                    </thead>
                    <tbody>
                       <?php  
                        //  echo "<tr>";
                        //  $strJsonFileContents = file_get_contents("json/cart.json");
                        //  // Convert to array 
                        //  $array = json_decode($strJsonFileContents, true);
                        // //   var_dump($array); // print array
                        // //   var_dump($array['cart'][0]['productName']); 
                    
                        //   foreach($array['cart'] as $cart) {
                        //     $productname = $cart['productName'];
                        //     $price = $cart['price'];
                        //     $quantity = $cart['quatity'];
                        //          echo  "<td>" .  $productname . "</td>";
                        //          echo "<td>" .  $price . "</td>";
                        //          echo  "<td>" . $quantity . "</td>" ;
                        //          echo "</ul>";
                        //          echo "</td>";
                        //   ?>
                           
                          </td>
                       </tr>
                     
                      ?>
                    </tbody>

  </table>
</div> -->
                
    </div>
    
    </div>
    <a href="shopping_list.php">Shopping list</a>     
    <hr>
    <!-- <footer>
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
    </footer> -->

</body>
<script src= "scripts.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>                            