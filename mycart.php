<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>My Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center border rounded bg-light"><a href="index.php">My Cart</a></h4>
            </div>
         
    <div class="col-lg-8">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Remove</th>

    </tr>
  </thead>
  <tbody>
    <?Php
    $total=0;
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key => $value){
       $total=$total+$value['price'];
            echo "
            <tr>
            <th>1</th>
            <td>$value[item_name]</td>
            <td>$value[price]</td>
            <td><input type='number' value='$value[Quantity]' min='1' max='10'></td>
            <td>

            <form action='manage_cart.php' method='post'>

            <button name='Remove_item' class='btn btn-outline-danger'>Remove</button>
            <input type='hidden' name='item_name' value='$value[item_name]'>
            
            </form>

                         
            </td>
          </tr>
            ";
          }
    }
       
    ?>
    
    
  </tbody>
</table>
    </div>
    <div class="col-lg-4">
      <h3>Total</h3>
      <h5><?php echo $total;  ?></h5>
    </div>

    </div>
    </div>
</body>
</html>
 