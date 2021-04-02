<header>
    <a class="logo" href="<?php echo BASE_URL . '/index.php';?>">
        <div class="logo-text">
            <h1><span>News</span>Hour</h1>
        </div>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <?php if (isset($_SESSION['username'])):?>
            <li><a href="#"><i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?> <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                    <ul>
                        <li><a href="<?php echo BASE_URL . '/admin/dashboard.php'; ?>">Dashboard</a></li>
                        <li><a class="logout" href="<?php echo BASE_URL . '/logout.php'; ?>">Logout</a></li>
                    </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>