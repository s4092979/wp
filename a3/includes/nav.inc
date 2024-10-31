    <header>
        <nav class="navbar navbar-expand-sm navbar-dark mb-3 rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="Pets Victoria logo" style="width:40px;">
                </a>
                <button class="navbar-toggler" type="buton" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" if="collapsibleNavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pets.php">Pets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                    <?php if(!isset($_SESSION['username'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($_SESSION['username'])) { ?>
                        </li class="nav-item">
                            <a class="nav-link" href="add.php">Add more</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php } ?>
                        <form class="d-flex">
                            <input class="form-control me-2" type="text" name="search" placeholder="Search">
                            <button class="btn btn-primary" type="button">
                                <span class="material-symbols-outlined">search</span>
                            </button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
