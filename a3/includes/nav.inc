    <header>
        <nav>
            <img src="images/logo.png" alt="Pets Victoria logo" onclick=home();>
            <a href="index.php">Home</a>
            <a href="pets.php">Pets</a>
            <a href="gallery.php">Gallery</a>
            <?php if(!isset($_SESSION['username'])) { ?>
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
            <?php } ?>
            <?php if (!empty($_SESSION['username'])) { ?>
                <a href="add.php">Add more</a>
                <a href="logout.php">Logout</a>
            <?php } ?>
            <div class="searchContainer">
                <form>
                    <input type="text" name="search" placeholder="Search">
                    <span class="material-symbols-outlined">search</span>
                </form>
            </div>
        </nav>
    </header>
