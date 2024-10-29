<?php
$title = "Library";
include('includes/header.inc');
?>
<br>
<?php
include('includes/nav.inc');
?>
<div id="demo" class="carousel slide mb-3" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>

    <!-- The slideshow -->
    <div class="carousel-inner bg-secondary">
        <div class="carousel-item active">
            <img src="images/c-jaguar.jpg" alt="animal" class="d-block w-25 mx-auto">
        </div>
        <div class="carousel-item">
            <img src="images/c-lion.jpg" alt="animal" class="d-block w-25 mx-auto">
        </div>
        <div class="carousel-item">
            <img src="images/c-tiger.jpg" alt="animal" class="d-block w-25 mx-auto">
        </div>
        <div class="carousel-item">
            <img src="images/c-leopard.jpg" alt="animal" class="d-block w-25 mx-auto">
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>
<div class=row>
    <div class="col-12 col-sm-6 col-md-4">
        <h3>What is Lorem Ipsum?</h3>
        <img class="img-fluid img-thumbnail float-left mr-2" src="images/c-jaguar.jpg" width="160" height="45" alt="Emma McKeon">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <h3>Why do we use it?</h3>
        <img class="img-fluid img-thumbnail float-left mr-2" src="images/c-leopard.jpg" width="160" height="45" alt="Rohan Dennis">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <h3>Where does it come from?</h3>
        <img class="img-fluid img-thumbnail float-left mr-2" src="images/c-lion.jpg" alt="Camille" width="160" height="45">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <h3>Lorem Ipsum</h3>
        <img class="img-fluid img-thumbnail float-left mr-2" src="images/c-tiger.jpg" width="160" height="45" alt="basketball float-left mr-2">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <h3>Lorem Ipsum</h3>
        <img class="img-fluid img-thumbnail float-left mr-2" src="images/c-leopard.jpg" width="160" height="45" alt="football float-left mr-2">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

        </p>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <h3>Lorem Ipsum</h3>
        <img class="img-fluid img-thumbnail float-left mr-2" src="images/c-jaguar.jpg" width="160" height="45" alt="Novak Djokovic">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</div>
<?php
include('includes/footer.inc');
?>