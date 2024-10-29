<?php
$title = "Add New Book";
include('includes/header.inc');
?>
<h1><?= $title ?></h1>
<?php
include('includes/nav.inc');
?>
<?php if (isset($_SESSION['username'])) { ?>
    <form action="process_new_book.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control w-50" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" id="author" class="form-control w-50" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control w-50" required>
        </div>
        <div class="mb-3">
            <label for="published" class="form-label">Year</label>
            <input type="number" name="published" id="published" required min="1900" max="2021" size="4" class="form-control w-50">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Synopsis</label>
            <textarea rows="10" cols="50" name="description" id="description" class="form-control w-50" required></textarea>
        </div>
        <div class="mb-3">
            <label for="file01" class="form-label">Supporting Files</label>
            <input type="file" name="file01" id="file01" class="form-control w-50">
        </div>
        <div class="mb-3">
            <input type=submit value="Add New Book" class="btn btn-primary">
        </div>
    </form>
<?php } ?>
<?php
include('includes/footer.inc');
?>