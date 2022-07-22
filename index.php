<?php
 include_once ('header.php'); 
//  include_once ('footer.php');
 ?>

    <div class="row">

    <?php
      include_once('db.php');

      $database = new Database();
      $db = $database->getConnection();

      $query = 'SELECT * FROM product';
      $stmt = $db->prepare($query);
      $stmt->execute();

      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $name = $row['product_name'];
        $price = $row['product_price'];
        $img = $row['product_image'];

        echo '
        <div class="col-lg-3 col-md-4 col-sm-12 pt-5 pb-5 ml-0">
            <div class="card h-20" style="width:22rem">
                <img class="card-img-top" src="' . $img . '" alt="Card image cap">
                <div class="card-body">
                  <span class="card-title">Gas</span>
                  <h5 class="card-text">' . $name . '</h5>
                  <i class="bi bi-currency-rupee">$</i>
                  <span class="pro-price">' . $price . '</span>
                  <br>
                  <button class="bi bi-cart"></button>
                </div>
            </div>
        </div>';
      }
    ?>
    
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
      