<?php
$pageName = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark mb-3 rounded">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link <?php if ($pageName == "index.php") echo "active"; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($pageName == "books.php") echo "active"; ?>" href="books.php">Books</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($pageName == "authors.php") echo "active"; ?>" href="authors.php">Authors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($pageName == "geners.php") echo "active"; ?>" href="geners.php">Geners</a>
        </li>
        <?php if (isset($_SESSION['username'])) { ?>
            <li class="nav-item">
                <a class="nav-link <?php if ($pageName == "new_book.php") echo "active"; ?>" href="new_book.php">New Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($pageName == "logout.php") echo "active"; ?>" href="logout.php">Logout</a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link <?php if ($pageName == "register.php") echo "active"; ?>" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($pageName == "login.php") echo "active"; ?>" href="login.php">Login</a>
            </li>
        <?php } ?>
    </ul>
</nav>
<?php
if (isset($_SESSION['usrmsg'])) { ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong>
        <?php print $_SESSION['usrmsg'];
        unset($_SESSION['usrmsg']); ?>
    </div>
<?php } ?>

<?php
if (isset($_SESSION['err'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error!</strong>
        <?php print $_SESSION['err'];
        unset($_SESSION['err']); ?>
    </div>
<?php } ?>