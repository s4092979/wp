<?php
$title = "Pets Victoria";
include "includes/header.inc";
include "includes/nav.inc";
include "includes/db_connect.inc";
?>
<main>
    <p class="petsHeading">
        Pets Victoria has a lot to offer
    </p>
    <p class="petsText">
        For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into the mainstream. Our work has helped make a difference to the Victorian rescue community and thousands of pets in need of rescuse and rehabilitation. But, until every pet is safe, respected, and loved, we all still have big, hairy work to do.
    </p>
    <div class="galleryGrid">
    <?php
    $sql = "select * from pets";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            print "<div class='box'>\n";
            print "<div class='container'>\n";
            print "<img src='images/{$row['image']}' alt={$row['petname']}>\n";
            print "<a class='overlay' href=details.php?id={$row['petid']}>\n";
            print "<div class='text'>\n";
            print "<span class='material-symbols-outlined'>search</span><br>\n";
            print "Discover more!\n";
            print "</div></div></a>\n";
            print "<p>{$row['petname']}</p>\n";
            print "</div>\n";
        }
    }
    ?>
    </div>
</main>
<?php include "includes/footer.inc"; ?>