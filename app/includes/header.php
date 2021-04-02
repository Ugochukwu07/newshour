<header>
        <a href=<?php echo BASE_URL . "/index.php";?> class="logo">
            <div class="logo-text">
                <h1><span>News</span>Hour</h1>
            </div>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href=<?php echo BASE_URL . "/index.php";?>>Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href=<?php echo BASE_URL . "/api_news.php";?>>API News</a></li>

<?php if(isset($_SESSION['id'])): ?>
 <li><a href="#"><i class="fa fa-user"></i>
  <?php echo $_SESSION['username']; ?>
   <i class="fa fa-chevron-down" style="font-size: .8em;"></i></a>
                <ul>
                <?php if ($_SESSION['admin']): ?>
                <li><a href=<?php echo BASE_URL . "/admin/dashboard.php";?>></i>Dashboard</a></li>
               <?php endif; ?>
                    
                    <li><a class="logout" href=<?php echo BASE_URL . "/logout.php";?>>Logout</a></li>
                </ul>
            </li>
<?php else: ?>
    <li><a href=<?php echo BASE_URL . "/register.php";?>>Sign Up!</a></li>
    <li><a href=<?php echo BASE_URL . "/login.php";?>>Login</a></li>

<?php endif; ?>
        </ul>     
    </header>