<header class="header" style="background-color: black;">

  <div class="flex">

    <a href="#" class="logo"><img src="logo.png" alt="Mission Eats"></a>
    <h4 style="color: orange">Hi, <b>
        <?php echo htmlspecialchars($_SESSION["username"]); ?>
      </b>, Welcome!</h4>

    <?php
    $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
    $row_count = mysqli_num_rows($select_rows);
    ?>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
      <a href="products.php">view products</a>
      <a href="reset-password.php">Reset Password</a>
      <a href="logout.php">Sign Out</a>
    </nav>
    <a href="cart.php" class="cart">cart <span>
        <?php echo $row_count; ?>
      </span> </a>
  </div>

</header>