<?php
    $title = "Pets Victoria";
    include "includes/header.inc";
?>
    <header>
        <?php include "includes/nav.inc"; ?>
    </header>
    <main>
        <p class="petsHeading">
            Add a pet
        </p>
        <p class="petsText">
            You can add a new pet here
        </p>
        <form class="newPet">
            <label for="name">Pet name:</label><br>
            <input type="text" id="name" name="name" placeholder="Provide a name for the pet" required><br>
            <label for="type">Type:</label><br>
            <select id="type" name="type">
                <option value="" disabled selected>--Choose an option--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
            </select><br>
            <label for="description">Description</label><br>
            <textarea rows="2" id="description" name="description" placeholder="Describe the pet briefly" required></textarea><br>
            <label for="image">Select an image:</label>
            <input type="file" id="image" name="image" required><br>
            <label for="caption">Image Caption:</label><br>
            <input type="text" id="caption" name="caption" placeholder="Describe the image in one word" required><br>
            <label for="age">Age (months):</label><br>
            <input type="number" id="age" name="age" placeholder="Age of the pet in months" required><br>
            <label for="location">Location:</label><br>
            <input type="text" id="location" name="location" placeholder="Location of the pet" required><br>
            <div class="buttons">
                <button type="submit" id="submit">
                    <span class="material-symbols-outlined">add_task</span>
                    Submit
                </button>
                <button type="reset" id="reset">
                    <span class="material-symbols-outlined">cancel</span>
                    Clear
                </button>
            </div>
        </form>
    </main>
    <footer>© Copyright s4092979 David Hollins. All Rights Reserved | Designed for Pets Victoria</footer>
</body>
</html>