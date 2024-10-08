<?php
$title = "Pets Victoria";
include "includes/header.inc";
include "includes/nav.inc";
include "includes/db_connect.inc";

$id = $_GET['id'];
$sql = "select * from pets where petid = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>
    <main>
        <img class='petsDetailsImg' src='images/<?=$row['image']?>' alt=<?=$row['petname']?>>
        <div class="detailsGrid">
            <div class="detailsBox">
                <span class="material-symbols-outlined">pets</span><br>
                <p><?=$row['age']?> months</p>
            </div>
            <div class="detailsBox">
                <span class="material-symbols-outlined">location_on</span><br>
                <p><?=$row['type']?></p>
            </div>
            <div class="detailsBox">
                <span class="material-symbols-outlined">location_on</span><br>
                <p><?=$row['location']?></p>
            </div>
        </div>
        <h2 class="detailsName"><?=$row['petname']?></h2>
        <p class="detailsText"><?=$row['description']?></p>
    </main>
<?php
include "includes/footer.inc";
?>