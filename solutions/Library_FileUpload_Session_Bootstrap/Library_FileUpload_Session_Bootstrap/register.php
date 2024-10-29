<?php
$title = "Register";
include('includes/header.inc');
?>
<h1><?= $title ?></h1>
<?php
include('includes/nav.inc');
?>
<div>
    <form action="process_register.php" method="post">
        <div class="mb-3 mt-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control w-50">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control w-50">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Register">
        </div>
    </form>
</div>
<?php
include('includes/footer.inc');
?>