<header class="header" style="background-color: black;">

  <div class="flex">

    <a href="#" class="logo"><img src="logo.png" alt="Mission Eats"></a>
    <h2 style="color: orange">Hi, <b>
        <?php echo htmlspecialchars($_SESSION["username"]); ?>
      </b>, Welcome to our site!</h2>
    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">

      <a href="admin.php">Manage products</a>
      <a href="reset-password.php">Reset Password</a>
      <a href="logout.php">Sign Out</a>
    </nav>

  </div>

</header>