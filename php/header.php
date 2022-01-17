<header id="header">
  <div style="background-color:#ae4399; height: 50px;align-items: center;display:flex;padding:0 80px 0 80px">
    <p style="color: white; font-size:12px; text-align:left;margin: 0 5% 0 5%"> Umeshu Store |
      JAPANESE ALCOHOLIC
      BEVERAGES & LIFESTYLE
      PRODUCTS
    </p>
  </div>
  <nav class="navbar navbar-dark"
    style="margin:0 5% 0 5%;padding:0 80px 0 80px;align-items: center;display:flex; height:120px">
    <a href="index.php" class="navbar-brand">
      <h3 class="px-5">
        <i class="fa-solid fa-martini-glass-empty" style="color: black; padding-top:10px"></i>
      </h3>
    </a>
    <ul class="nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active text-black" href="#">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="#">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="#">My Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="#">New User Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="./contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a href="cart.php" class="nav-item nav-link active">
          <i class="fas fa-shopping-cart" style="color: #ae4399;"></i>
          <?php

                        if(isset($_SESSION['cart'])){
                          $count = count($_SESSION['cart']);
                          echo "<span id=\"cart_count\" class=\"text-black\">$count</span>";
                        }else{
                          echo "<span id=\"cart_count\" class=\"text-black\">0</span>";
                        }
                        ?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="#">
          <i class="fa-solid fa-magnifying-glass"></i>
        </a>
      </li>
    </ul>



  </nav>
</header>