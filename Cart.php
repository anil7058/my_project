<?php
 include_once ('header.php'); 
 ?>

    <style>
      .nav-links{
         list-style: none;
         display: flex;
        /* padding-right: 10px; */
      }
      .nav-links, li ,a{
        color: #007bff !important;
      }

      #cart table{
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        white-space: nowrap;
      }
      #cart table img{
        width: 40px;
      }
      #cart table td:nth-child(1){
        width: 100px;
        text-align: center;
      }
      #cart table td:nth-child(2){
        width: 140px;
        text-align: center;
      }
      #cart table td:nth-child(3){
        width: 200px;
        text-align: center;
      }
      #cart table td:nth-child(4),
      #cart table td:nth-child(5),
      #cart table td:nth-child(6){
        width: 140%;
        text-align: center;
      }
      #cart table td:nth-child(5){
        width: 0px;
        padding: 32px 10px 10px 10px;
      } 


      /* footer */
      .footer{
          background-color: rgb(7, 7, 7);
          /* position: fixed; */
          left: 0;
          bottom: 0;
          width: 100%;
          color: white;
          text-align: center;
        }
        .copyright{
           color: #ffff;
        }
        #footer{
          color: #ffff;
        }
        .footer-heading, logo, a{
          color: #ffff;
        }
        .menu{
          display: grid;
          float: left;
        }
        .menu, a{
          padding-bottom: 10px;
        }
        .footer-heading, .menu, a:hover{
          color: lightsteelblue;
        }
        .menu, .email{
          padding-left: 10px;
          padding-bottom: 0px;
        }

        .product_img ,img{ 
          max-width: 60% !important;
        }
        .product-names{
          margin: 50px 0px;
        }
        #textbox{
          width: 50px;
        }
        .price_money{
          margin: -38px 295px;
        }
        .main-cart{
          border: 1px solid #cce7d0; 
        }
        .right_side{
          border: 1px solid #cce7d0;
        }
        .price_indiv, .product_rate{
          margin-left: 190px;
        }
        .total-vat{
          margin-left: 60px;
        }
        .checkout{
          margin-left: 20px;
        }
    </style>


    

    
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10 col-11 mx-auto">
              <div class=" row mt-5 gx-3x">
                <!-- left side div  -->
                <div class="main-cart col-lg-8 col-md-12 col-11 mb-lg-0 mb-5">
                  <div class="card-row p-4">
                    <h2 class="py-4 font-weight-bold">Card (2 items)</h2>
                    <div class="row">
                      <!-- card images div  -->
                      <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center
                      shadow product_img">
                        <img src="img\Gas\A21A3041200BLA_BLACK_alt5.png" class="img-fluid ">
                      </div>
                      <!-- cart product details -->
                      <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                        <div class="row product-names">
                          <!-- product_name -->
                          <div class="col-6 cart-title">
                            <h1 class="mb-4 product_name">Gas</h1>
                            <p class="mb-4">Simple t-shirts</p>
                          </div>
                          <!-- quantity  inc dec -->
                          <div class="col-6">
                            <ul class="pagination justify-content-end set_quantity">
                              <li class="page-item">
                                <button class="page-link"><i class="bi bi-dash"></i></button></li>
                              <li class="page-item"><input class="cart-quantity-input" type="text" class="page-link" value="1" id="textbox"></input></li>
                              <li class="page-item">
                                <button class="page-link"><i class="bi bi-plus"></i></button></li>
                            </ul>
                          </div>
                        </div>
                        <!-- remover move and price -->
                        <div class="row">
                          <div class="col-8 d-flex justify-content-between remove_wish">
                            <button class="btn btn-danger" type="button">REMOVE</button>
                          </div>
                          <div class="col-4 d-flex justify-content-end price_money">
                            <h3>$<span class="itemval">30.00</span></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- second cart  -->
                  <div class="card-row p-4">
                    <h2 class="py-4 font-weight-bold">Card (2 items)</h2>
                    <div class="row">
                      <!-- card images div  -->
                      <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center
                      shadow product_img">
                        <img src="img\Gas\A21A3041200BLA_BLACK_alt5.png" class="img-fluid ">
                      </div>
                      <!-- cart product details -->
                      <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                        <div class="row product-names">
                          <!-- product_name -->
                          <div class="col-6 cart-title">
                            <h1 class="mb-4 product_name">Gas</h1>
                            <p class="mb-4">Simple t-shirts</p>
                          </div>
                          <!-- quantity  inc dec -->
                          <div class="col-6">
                            <ul class="pagination justify-content-end set_quantity">
                              <li class="page-item">
                                <button class="page-link" onclick="decreaseNumber()"><i class="bi bi-dash"></i></button></li>
                              <li class="page-item"><input class="cart-quantity-input" type="text" class="page-link" value="1" id="textbox"></input></li>
                              <li class="page-item">
                                <button class="page-link" onclick="increaseNumber()"><i class="bi bi-plus"></i></button></li>
                            </ul>
                          </div>
                        </div>
                        <!-- remover move and price -->
                        <div class="row">
                          <div class="col-8 d-flex justify-content-between remove_wish">
                            <button class="btn btn-danger" type="button">REMOVE</button>
                          </div>
                          <div class="col-4 d-flex justify-content-end price_money">
                            <h3>$<span class="itemval">30.00</span></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- right side div  -->
                <!-- <div class="row"> -->
                  <div class="col-lg-4 col-md-12 col-sm-12 mx-auto mt-lg-0 mt-md-5">
                    <div class="right_side p-3 bg-white">
                        <h2 class="product_name mb-5 ml-5">The Total Amount Of</h2>
                      <div class="price_indiv d-flex Justify-content-between ml-5">
                        <p>Product Amount</p>
                        <p class="product_rate">$<span id="product-total-amt">60.00</span></p>
                      </div>
                      <div class="price_indiv d-flex Justify-content-between ml-5">
                        <p>Shipping Charge</p>
                       <p class="product_rate">$<span id="shipping-charge">50.0</span></p>
                      </div>
                      <hr>
                      <div class="total-amount d-flex justity-content-between font-weight-bold ml-3">
                        <p>The Total Amount Of (including VAT)</p>
                        <p class="total-vat">$ <span id="total-cart-amt">110.00</span></p>
                      </div>
                       <button class="checkout btn btn-primary text-uppercase">Checkout</button> 
                    </div>
                 </div>
              </div>
            </div>
          </div>
        </div>

      
      
      
      


      <!-- footer -->
      <footer class="pt-5">
        <footer class="footer py-2 ">
          <div class="container-fluid pt-10" id="footer">
            <div class="row justify-content-center">
              <div class=" col-md-12 text-center mt-2">
                <h2 class="footer-heading"><a href="/index.html" class="logo"><i>Ecommerce</i></a></h2>
                <p class="menu mt-3">
                  <a href="tel:+917058451564"><i class="bi bi-telephone"></i> +(91)-705-845-1564</a>
                  <a href="mailto:akshaygehlot003@gmail.com" ><i class="email bi bi-envelope-open pt-5"></i>
                    Akshaygehlot003@gmail.com</a>
                </p>
              </div>
            </div>
            <div class="row mt-2">
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
<script type="text/javascript">
  // const decreaseNumber => {
  //   var itemval
  // }
</script>
  /body>
</html>