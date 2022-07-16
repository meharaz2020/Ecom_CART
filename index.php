
<?php  session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cart</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <h1 class="text-center">Cart System 
              <?php
              $count=0;
              if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
              }
              
              ?>
            
            <a href="mycart.php" class="btn btn-outline-success">Cart(<?php echo $count;?>)</a>
        
        
        </h1>

            <div class="col-lg-3">

                <!-- item1 -->
                <form action="manage_cart.php" method="post">
                    <div class="card" style="width: 18rem;">
                        <img src="bag1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bag 1</h5>
                            <p class="card-text">Price: 100</p>
                            <button type="submit" name="add_to_cart" class="btn btn-sm btn-success">Add to Cart</button>
                            <input type="hidden" name="item_name" value="bag 1">
                            <input type="hidden" name="item_price" value="100">
                        </div>
                    </div>
                </form>
                <!-- iteam1 end -->
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <!-- item2 -->
                    <div class="card" style="width: 18rem;">
                        <img src="bag2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bag 2</h5>
                            <p class="card-text">Price: 200</p>
                            <button type="submit" name="add_to_cart" class="btn btn-sm btn-success">Add to Cart</button>
                            <input type="hidden" name="item_name" value="bag 2">
                            <input type="hidden" name="item_price" value="200">
                        </div>
                    </div>
                    <!-- iteam2 end -->
                </form>
            </div>


            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <!-- item3 -->
                    <div class="card" style="width: 18rem;">
                        <img src="bag3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bag 3</h5>
                            <p class="card-text">Price: 300</p>
                            <button type="submit" name="add_to_cart" class="btn btn-sm btn-success">Add to Cart</button>
                            <input type="hidden" name="item_name" value="bag 3">
                            <input type="hidden" name="item_price" value="300">
                        </div>
                    </div>
                    <!-- iteam3 end -->
                </form>
            </div>


            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <!-- item4 -->
                    <div class="card" style="width: 18rem;">
                        <img src="bag4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bag 4</h5>
                            <p class="card-text">Price: 400</p>
                            <button type="submit" name="add_to_cart" class="btn btn-sm btn-success">Add to Cart</button>
                            <input type="hidden" name="item_name" value="bag 4">
                            <input type="hidden" name="item_price" value="400">
                        </div>
                    </div>
                    <!-- iteam3 end -->
                </form>
            </div>

        </div>
    </div>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>