<?php
session_start();
if (isset($_SESSION['username'])) {
    function validateInput($str)
    {
        $ret = trim($str);
        return $ret;
    }
    $title = validateInput($_POST['title']);
    $author = validateInput($_POST['author']);
    $genre = validateInput($_POST['genre']);
    $published = validateInput($_POST['published']);
    $description = validateInput($_POST['description']);

    include('includes/db_connect.inc');

    $sql = "INSERT INTO book (title, author, genre, published, description) VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssis", $title, $author, $genre, $published, $description);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        //back to home
        if (!empty($_FILES['file01'])) {
            $tmp = $_FILES['file01']['tmp_name'];
            $dest = "uploadedFiles/{$_FILES['file01']['name']}"; // uploadedFiles is the folder name created in htdocs
            move_uploaded_file($tmp, $dest);
        }
        $_SESSION['usrmsg'] = "A new book has been added";
    } else {
        $_SESSION['err'] = "An error has occured!";
    }
    $conn->close();
} else {
    $_SESSION['err'] = "You have no permissions to add books!";
}
header("Location:index.php");
exit(0);
