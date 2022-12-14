<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling -->
    <link rel="stylesheet" href="../assets/css/tkdn.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
    <title>TKDN</title>
</head>
<body>
        <!-- Header start -->
        <header class="header">
            <div class="logo">
                <a href=""><img src="../assets/image/logo/samafitro_logo.png" alt="samafitro"></a>
            </div>
            <div class="navbar">
                <nav>
                    <a href="/" id="current">Home</a>
                    <a href="../tkdn">Product</a>
                    <a href="../hps/">HPS</a>
                </nav>
            </div>
        </header>
        <!-- Header end -->
        <main class="main">
            <div class="search-bar">
                <input type="number" placeholder="Minimum Price" style="order: 3;" id="price_min" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                <label style="order: 2;">-</label>
                <input type="number" placeholder="Maximum Price" style="order: 1;" id="price_max" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            </div>
            <div class="product">
                <div class="side-bar">
                    <ul class="side">
                        <li>Notebook</li>
                        <li>AIO PC</li>
                        <li>Axioo PC Desktop</li>
                        <li>Tablet & Thermoshafe</li>
                        <li>Axioo Mini PC</li>
                        <li>PC Gear</li>
                        <li>Server Rainer</li>
                    </ul>
                </div>
                <div class="product-list">
                    <!-- <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p>
                    </div>
                    <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p>
                    </div>
                    <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p>
                    </div>
                    <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p>
                    </div>
                    <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p>
                    </div> -->
                    <!-- second row -->
                    <!-- <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p>
                    </div>
                    <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p>
                    </div>
                    <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p>
                    </div>
                    <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p>
                    </div>
                    <div class="product-card">
                        <img src="image/content/Axioo.png" alt="Axioo Mybook">
                        <h3>Axioo Axioo Mybook</h3>
                        <p>IDR 14.500.000,00</p> -->
                    </div>
                </div> -->
            </div>
        </main>
        <footer class="footer">
            <div class="pagination">
                <a href="" id="currpage">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="" id="next"> > </a>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(document).ready(() => {
                const formatter = new Intl.NumberFormat("en-US", {
                    style: "currency",
                    currency: "IDR"
                })

                $("#price_min").on("change", () => {
                    const min = $("#price_min").val() 
                    const max = $("#price_max").val() 

                    $(".product-list").empty()

                    $.getJSON("../data/json/data.json", (data) => {
                        var list = []

                        $.each(data.data, (idx, val) => {
                            if (max == '') {
                                if (min <= val.price) {
                                    list.push("<img src='" + val.img + "' alt='" + val.product + "'> <h3>" + val.product + "</h3><p>" +  formatter.format(val.price) + "</p>")
                                }
                            }else{
                                if (min <= val.price && max >= val.price) {
                                    list.push("<img src='" + val.img + "' alt='" + val.product + "'> <h3>" + val.product + "</h3><p>" +  formatter.format(val.price) + "</p>")
                                }
                            }
                        })

                        for (let index = 0; index < list.length; index++) {
                            $("<div>", {
                                class: "product-card",
                                html: list[index]
                            }).appendTo(".product-list")
                            
                        }
                    })
                })
                
                $("#price_max").on("change", () => {
                    const min = $("#price_min").val() == '' ? true : $("#price_min").val()
                    const max = $("#price_max").val() == '' ? true : $("#price_max").val()

                    $(".product-list").empty()

                    $.getJSON("../data/json/data.json", (data) => {
                        var list = []

                        $.each(data.data, (idx, val) => {
                            if (min == '') {
                                if (max >= val.price) {
                                    list.push("<img src='" + val.img + "' alt='" + val.product + "'> <h3>" + val.product + "</h3><p>" +  formatter.format(val.price) + "</p>")
                                }
                            }else{
                                if (min <= val.price && max >= val.price) {
                                    list.push("<img src='" + val.img + "' alt='" + val.product + "'> <h3>" + val.product + "</h3><p>" +  formatter.format(val.price) + "</p>")
                                }
                            }
                        })

                        for (let index = 0; index < list.length; index++) {
                            $("<div>", {
                                class: "product-card",
                                html: list[index]
                            }).appendTo(".product-list")
                        }
                    })
                })

                $.getJSON("http://127.0.0.1:8000/data/json/data.json", (data) => {
                    var list = []

                    $.each(data.data, (idx, val) => {
                        list.push("<img src='" + val.img + "' alt='" + val.product + "'> <h3>" + val.product + "</h3><p>" +  formatter.format(val.price) + "</p>")
                    })

                    for (let index = 0; index < list.length; index++) {
                        $("<div>", {
                            class: "product-card",
                            html: list[index]
                        }).appendTo(".product-list")
                        
                    }
                })
            })
        </script>
    </body>
</html>