<?php
$title = "Pets Victoria";
include "includes/header.inc";
include "includes/nav.inc";
include "includes/db_connect.inc";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $val) {
        $$key = trim($val);
    }
    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    $sql = "INSERT INTO pets(petname,type,description,image,caption,age,location,username) VALUES (?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        exit("An error occurred");
    }

    $stmt->bind_param("sssssiss", $name, $type, $description, $image, $caption, $age, $location, $_SESSION['username']);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo '<p>New record successfully inserted into the database</p>';
        if (move_uploaded_file($temp, 'images/' . $image)) {
            echo "<p>Image moved to folder</p>";
        } else {
            echo "<p>Image not moved to folder</p>";
        }
    } else {
        echo '<p>Record not inserted into the database</p>';
    }
}

if (isset($_SESSION['username'])) {
?>
<main>
    <p class="petsHeading">
        Add a pet
    </p>
    <p class="petsText">
        You can add a new pet here
    </p>
    <form class="newPet" action="add.php" method="post" enctype="multipart/form-data">
        <label for="name">Pet name:</label><br>
        <input type="text" id="name" name="name" placeholder="Provide a name for the pet" required><br>
        <label for="type">Type:</label><br>
        <select id="type" name="type">
            <option value="" disabled selected>--Choose an option--</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="other">Other</option>
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
<?php }
include "includes/footer.inc"; ?>