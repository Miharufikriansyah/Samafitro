<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Samafitro</title>
</head>
<body>
    <!-- Header start -->
    <header class="header">
        <div class="logo">
            <a href=""><img src="assets/image/logo/samafitro_logo.png" alt="samafitro"></a>
        </div>
        <div class="headertitle">
            <h2>WE ARE PRINCIPAL FROM CANON</h2>
        </div>
        <div class="navbar">
            <nav>
                <a href="/" id="current">Home</a>
                <a href="tkdn/">Product</a>
                <a href="hps/">HPS</a>
            </nav>
        </div>
    </header>
    <!-- Header end -->

    <main class="content">
        <div class="content-buttons">
            <a href="tkdn/"><button>TKDN ></button></a>
            <a href=""><button>NON TKDN ></button></a>
            <a href="hps/"><button>HPS ></button></a>
        </div>
        <div class="carousel">
            <div class="product-logo">
                <img src="assets/image/logo/canon_logo.png" alt="">
            </div>
            <div class="carousel-content">
                <div id="product-img"><img src="assets/image/content/product1.png" alt=""></div>
                <div class="product-details">
                    <h3>Cursus pulvinar quis</h3>
                    <p>Non cras quam dui risus arcu facilisi volutpat tortor. Suspendisse tincidunt blandit non consequat dui cursus malesuada at sit.</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>