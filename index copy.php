<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><i>ECOMMERCE</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto pr-5">
            <ul class="nav-links d-flex">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="Cart.html"><i class="bi bi-cart pl-3"></i></a></li>
            </ul>
          </div>
        </div>
    </nav>

    <?php
      include_once('db.php');

      $database = new Database();
      $db = $database->getConnection();

      $query = 'SELECT * FROM product';
      $stmt = $db->prepare($query);
      $stmt->execute();

      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo <<<END
        <tr>
           <td>{$row['ID']}</td>
           <td>{$row['product_name']}</td>  
           <td>{$row['product_price']}</td>
        </tr>
        END;
      }
    ?>

      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 pt-5 pb-5 ml-0">
            <div class="card h-20" style="width:22rem">
                <img class="card-img-top" src="img/Gas/A21A3041200BLA_BLACK.png" alt="Card image cap">
                <div class="card-body">
                <span class="card-title">Gas</span>
                <h5 class="card-text">Simple t-shirts.</h5>
                <i class="bi bi-currency-rupee">$</i>
                <span class="pro-price">1500</span>
                <br>
                <a href="#"><i class="bi bi-cart"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 pt-5 pb-5">
            <div class="card" style="width: 22.5rem;">
                <img class="card-img-top" src="img/compos sutra/S20CSJNSH3LBU_BLUE.png" alt="Card image cap">
                <div class="card-body">
                <span class="card-title">Compos sutra</span>
                <h5 class="card-text">Levis.</h5>
                <span class="rupee">$</span>
                <span class="pro-price">500</span>
                <br>
                <a href="#"><i class="bi bi-cart"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 pt-5 pb-5"> 
            <div class="card" style="width: 22.5rem;">
                <img class="card-img-top" src="img/jack and jon/S22JJ153540901_WHITE.png" alt="Card image cap">
                <div class="card-body">
                <span class="card-title">Jacl and jon</span>
                <h5 class="card-text">Cotton Regular Fit Man t-shirt.</h5>
                <span class="rupee">$</span>
                <span class="pro-rupee">700</span>
                <br>
                <a href="#"><i class="bi bi-cart"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 pt-5 pb-5">
            <div class="card" style="width: 22.5rem;">
                <img class="card-img-top" src="img/jack and jons/S22JJ246286601_BROWN.png" alt="Card image cap">
                <div class="card-body">
                <span class="card-title">Jack and jon</span>>
                <h5 class="card-text">Printed cotton slim shirt.</h5>
                <span class="rupee">$</span>
                <span class="pro-rupee">1500</span>
                <br>
                <a href="#"><i class="bi bi-cart"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="img/LEFTI/S22MFS-12862OLI_GREEN.png" alt="Card image cap">
                <div class="card-body">
                <span class="card-title">Lefti</h5>
                <h5 class="card-text">Printed Cotton slim shirt.</h5>
                <span class="rupee">$</span>
                <span class="pro-rupee">1600</span>
                <br>
                <a href="#"><i class="bi bi-cart"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card" style="width: 21rem;">
                <img class="card-img-top" src="img/pepe/S22ALDOSSIPGRE_GREEN.png" alt="Card image cap">
                <div class="card-body">
                <span class="card-title">Pepe</span>
                <h5 class="card-text">Cotton Elastane Mid Rise Crop Fit Mens Jean.</h5>
                <span class="rupee">$</span>
                <span class="pro-rupee">1000</span>
                <br>
                <a href="#"><i class="bi bi-cart"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="img/pape 2/S22TROJANSSIPWH_WHITE.png" alt="Card image cap">
                <div class="card-body">
                <span class="card-title">pape</span>
                <h5 class="card-text">Printed slim t-shirt.</h5>
                <span class="rupee">$</span>
                <span class="pro-rupee">900</span>
                <br>
                <a href="#"><i class="bi bi-cart"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="card" style="width: 22rem;">
              <img class="card-img-top" src="img/vio jeans/S22VOSH1570GRE_GREY.png" alt="Card image cap">
              <div class="card-body">
              <span class="card-title">Vio Jeans</span>
              <h5 class="card-text">Printed Cotton slim shirt.</h5>
              <span class="rupee">$</span>
              <span class="pro-rupee">1000</span>
              <br>
              <a href="#"><i class="bi bi-cart"></i></a>
              </div>
          </div>
      </div>
      </div>


      <!-- footer -->
      <footer class="pt-5">
        <footer class="footer py-2 ">
          <div class="container-fluid pt-10" id="footer">
            <div class="row justify-content-center">
              <div class="col-md-12 text-center mt-5">
                <h2 class="footer-heading"><a href="/index.html" class="logo"><i>Ecommerce</i></a></h2>
                <p class="menu mt-5">
                  <a href="tel:+917058451564"><i class="bi bi-telephone mt-3"></i> +(91)-705-845-1564</a>
                  <a href="mailto:akshaygehlot003@gmail.com" ><i class="bi bi-envelope-open"></i>
                    Akshaygehlot003@gmail.com</a>
                </p>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-12 text-center">
                <p class="copyright">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright ©
                  <script>document.write(new Date().getFullYear());</script>2022 Akshay Gehlot. All rights reserved.
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
              </div>
            </div>
          </div>
        </footer>
      </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>





<div class="row">

      <section id="cart" class="section">
        <table width="100%">
          <thead>
            <tr>
              <td>Remove</td>
              <td>Image</td>
              <td>Product</td>
              <td>Price</td>
              <td>Quantity</td>
              <td>Subtotal</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><i class="bi bi-x colum"></i></td>
              <td><img src="img/Gas/A21A3041200BLA_BLACK.png" alt=""></td>
              <td>Simple t-shirts.</td>
              <td>$100</td>
              <td><input type="number" value="1"></td>
              <td>$100</td>
            </tr>
          </tbody>
        </table>
      </section>
      <section id="cart" class="section">
        <table width="100%">
          <tbody>
            <tr>
              <td><i class="bi bi-x colum"></i></td>
              <td><img src="img/Gas/A21A3041200BLA_BLACK.png" alt=""></td>
              <td>Simple t-shirts.</td>
              <td>$100</td>
              <td><input type="number" value="1"></td>
              <td>$100</td>
            </tr>
          </tbody>
        </table>
      </section><section id="cart" class="section">
        <table width="100%">
          <tbody>
            <tr>
              <td><i class="bi bi-x colum"></i></td>
              <td><img src="img/Gas/A21A3041200BLA_BLACK.png" alt=""></td>
              <td>Simple t-shirts.</td>
              <td>$100</td>
              <td><input type="number" value="1"></td>
              <td>$100</td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>