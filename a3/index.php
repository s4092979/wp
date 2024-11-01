<?php
$title = "Pets Victoria";
include "includes/header.inc";
include "includes/nav.inc";
include "includes/db_connect.inc";
?>
    <main class="home row">
        <div class="col-1"></div>

        <!-- Carosel -->
         <div id="demo" class="carousel slide col-4 bg-dark" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>

            <!-- The slideshow/carosel -->
            <div class="carousel-inner" style="text-align:center;">
            <?php
                $sql = "SELECT * FROM pets ORDER BY petid DESC LIMIT 4";
                $result = $conn->query($sql);
                
                $active = "active";
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        print "<div class='carousel-item $active'>\n";
                        print "<img src='images/" . htmlspecialchars($row['image']) . "' alt=" . htmlspecialchars($row['caption']) . ">\n";
                        print "</div>\n";
                        $active = "";
                    }
                }
            ?>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <div class="col-1"></div>
        <div class="col-6">
            <h1 class="title">Pets Victoria</h1>
            <h2 class="subTitle">Welcome To Pet<br>Adoption</h2>
        </div>
    </main>
<?php
include "includes/footer.inc";
?>