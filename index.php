<!-- head -->
<head>
    <?php include_once("./layout/head.php") ?>
</head>

<!-- header -->
<header>
    <?php include_once("./layout/header.php") ?>
</header>
<body>
    

<main>
    <section>
        <div class="container-md">

       <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                 <!-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div> 
            
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./images/image11.png" class="d-block w-100" alt="..." width="500px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ANTIQUES</h5>
                        <p>Crafted with care for memorable moments</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./images/image21.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </section>
</main>


<!-- footer -->
<footer class="bg-body-tertiary text-center text-lg-start mt-4" >
    <?php include_once("./layout/footer.php"); ?>
</footer>

