<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kipande - Outdooor Advertising</title>
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <nav class="nav-bar">
        <div class="navbar-center">
            <span class="nav-icon">
                
                <i class="fas fa-user"></i>
                <p><a href="logout.php">Logout</a></p>
            </span>
            <img src="./images/logo.png" alt="Logo">
            <div class="cart-btn">
                <span class="nav-icon">
                    <i class="fas fa-cart-plus"></i>
                </span>
                <div class="cart-items">0</div>
        </div>
        </div>
        <!-- End of Nav bar Section -->
        
    </nav>
  <!-- hero section -->
  <header class="hero">
      <div class="banner">
          <h1 class="banner-title">OUTDOOR ADVERTISING</h1>
          <button class="banner-btn"><a href="#space"> FIND ADVERTISING SPACE</a></button>
      </div>
  </header>
  <!-- end of hero section -->
  <section class="products" id="space">
      <div class="section-title">
          <h2>top spots</h2>
      </div>
      <div class="products-center">
       

      </div>
  </section>
  <div class="log-out">

  </div>
<!-- end of products -->
   <!-- cart -->
      <div class="cart-overlay">
          <div class="cart">
              <span class="close-cart">
                   <i class="fas fa-window-close"></i>
              </span>
              <h2>your cart</h2>
              <div class="cart-content">
                  <!-- cart item -->
                  <div class="cart-item">
                      <img src="./images/product-1.jpeg" alt="product">
                      <div>
                          <h4>XXXX XXXX</h4>
                          <h5>00.00</h5>
                          <span class="remove-item">remove</span>
                      </div>
                      <div>
                          <i class="fas fa-chevron-up"></i>
                          <p class="item-amount">1</p>
                          <i class="fas fa-chevron-down"></i>
                      </div>
                  </div>
                  <!-- end of cart item -->
              </div>
              <div class="cart-footer">
                  <h3>your total :  <span class="cart-total">0</span> </h3>
                  <button class="clear-cart banner-btn">clear cart</button>

              </div>
          </div>
      </div>
   <!-- end of cart -->
<script src="app.js"></script>
</body>

</html>