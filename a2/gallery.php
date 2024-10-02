<?php
    $title = "Pets Victoria";
    include "includes/header.inc";
    echo "\n";
    include "includes/db_connect.inc";
    echo "\n";
    include "includes/nav.inc";
    echo "\n";
?>
    <main>
        <p class="petsHeading">
            Pets Victoria has a lot to offer
        </p>
        <p class="petsText">
            For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into the mainstream. Our work has helped make a difference to the Victorian rescue community and thousands of pets in need of rescuse and rehabilitation. But, until every pet is safe, respected, and loved, we all still have big, hairy work to do.
        </p>
        <div class="galleryGrid">
            <div class="box">
                <div class="container">
                    <img src="images/cat1.jpeg" alt="Milo">
                    <div class="overlay">
                        <div class="text">
                            <span class="material-symbols-outlined">search</span><br>
                            <a>Discover more!</a>
                        </div>
                    </div>
                </div>
                <p>Milo</p>
            </div>
            <div class="box">
                <div class="container">
                    <img src="images/dog1.jpeg" alt="Baxter">
                    <div class="overlay">
                        <div class="text">
                            <span class="material-symbols-outlined">search</span><br>
                            <a>Discover more!</a>
                        </div>
                    </div>
                </div>
                <p>Baxter</p>
            </div>
            <div class="box">
                <div class="container">
                    <img src="images/cat2.jpeg" alt="Luna">
                    <div class="overlay">
                        <div class="text">
                            <span class="material-symbols-outlined">search</span><br>
                            <a>Discover more!</a>
                        </div>
                    </div>
                </div>
                <p>Luna</p>
            </div>
            <div class="box">
                <div class="container">
                    <img src="images/dog2.jpeg" alt="Willow">
                    <div class="overlay">
                        <div class="text">
                            <span class="material-symbols-outlined">search</span><br>
                            <a>Discover more!</a>
                        </div>
                    </div>
                </div>
                <p>Willow</p>
            </div>
            <div class="box">
                <div class="container">
                    <img src="images/cat3.jpeg" alt="Oliver">
                    <div class="overlay">
                        <div class="text">
                            <span class="material-symbols-outlined">search</span><br>
                            <a>Discover more!</a>
                        </div>
                    </div>
                </div>
                <p>Oliver</p>
            </div>
            <div class="box">
                <div class="container">
                    <img src="images/dog3.jpeg" alt="Bella">
                    <div class="overlay">
                        <div class="text">
                            <span class="material-symbols-outlined">search</span><br>
                            <a>Discover more!</a>
                        </div>
                    </div>
                </div>
                <p>Bella</p>
            </div>
        </div>
    </main>
<?php include "includes/footer.inc"; ?>