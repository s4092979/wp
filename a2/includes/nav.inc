    <header>
        <nav>
            <img src="images/logo.png" alt="Pets Victoria logo" onclick=home();>
            <form>
                <select id="navSelect" onchange=doMenu();>
                    <option value="" disabled selected>Select an Option...</option>
                    <option value="index.php">Home</option>
                    <option value="pets.php">Pets</option>
                    <option value="add.php">Add new pet</option>
                    <option value="gallery.php">Gallery</option>
                </select>
            </form>
            <div class="searchContainer">
                <form>
                    <input type="text" name="search" placeholder="Search">
                    <span class="material-symbols-outlined">search</span>
                </form>
            </div>
        </nav>
    </header>