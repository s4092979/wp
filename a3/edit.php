<?php
$title = "Pets Victoria";
include "includes/header.inc";
include "includes/nav.inc";
include "includes/db_connect.inc";

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $val) {
        $$key = trim($val);
    }
    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    // Fetching information from the previous record
    $sql = "select * from pets where petid = $id";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $oldimage = $row['image'];

    // Updating the record
    $sql = "UPDATE pets SET petname = ?, type = ?, description = ?, image = ?, caption = ?, age = ?, location = ? WHERE petid = $id";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        exit("An error occurred");
    }

    if (empty($image)) {
        $image = $oldimage;
    }

    $stmt->bind_param("sssssis", $name, $type, $description, $image, $caption, $age, $location);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo '<p>New record successfully inserted into the database</p>';
        
        // If the image is changed, delete the old image and upload the new one
        if ($oldimage != $image) {
            if (file_exists('images/' . $oldimage)) {
                unlink('images/' . $oldimage);
            }
            if (move_uploaded_file($temp, 'images/' . $image)) {
                echo "<p>Image moved to folder</p>";
            } else {
                echo "<p>Image not moved to folder</p>";
            }
        }
    } else {
        echo '<p>Record not inserted into the database</p>';
    }

    header("Location:details.php?id=$id");
} else {
    $sql = "select * from pets where petid = $id";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
}

if (isset($_SESSION['username'])) {
?>
<main>
    <p class="petsHeading">
        Edit a pet
    </p>
    <form class="newPet" action=<?= "'edit.php?id=$id'" ?> method="post" enctype="multipart/form-data">
        <label for="name">Pet name:</label><br>
        <input type="text" id="name" name="name" placeholder="Provide a name for the pet" value=<?= "'$row[petname]'"?> required><br>
        <label for="type">Type:</label><br>
        <select id="type" name="type">
            <option value="" disabled>--Choose an option--</option>
            <option value="dog" <?php if ($row["type"] == "Dog") echo "selected"; ?>>Dog</option>
            <option value="cat" <?php if ($row["type"] == "Cat") echo "selected"; ?>>Cat</option>
            <option value="other" <?php if ($row["type"] == "other") echo "selected"; ?>>Other</option>
        </select><br>
        <label for="description">Description</label><br>
        <textarea rows="2" id="description" name="description" placeholder="Describe the pet briefly" required><?= "$row[description]" ?></textarea><br>
        <label for="image">Select an image:</label>
        <input type="file" id="image" name="image"><span><?= $row['image'] ?></span><br>
        <label for="caption">Image Caption:</label><br>
        <input type="text" id="caption" name="caption" placeholder="Describe the image in one word" value=<?= "'$row[caption]'" ?> required><br>
        <label for="age">Age (months):</label><br>
        <input type="number" id="age" name="age" placeholder="Age of the pet in months" value=<?= "'$row[age]'" ?> required><br>
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" placeholder="Location of the pet" value=<?= "'$row[location]'" ?> required><br>
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