<nav class="navbar navbar-expand-lg fixed-top bg-light shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="assets/images/logo/cartrade_logo.png" width="150px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="categories.php">Brands</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="cart.php">Cart</a>
        </li> 

        <?php if(isset($_SESSION['auth_user'])) : ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id= "navbarDropdown" role="button" data-bs-toggle ="dropdown" aria-expanded="false">
            <?= ucfirst($_SESSION['auth_user']['user_name']); ?>

          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
          <form action="allcode.php" method="POST">
             <button name= logout_btn type = "submit"class="dropdown-item ">Logout</button>
          </form>
          </li>
            
          </ul>
        </li>

        <?php else :  ?>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>

        <?php endif ;  ?>

      </ul>
    </div>
  </div>
</nav>