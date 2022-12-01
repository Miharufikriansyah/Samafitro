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
    <link rel="stylesheet" href="../assets/css/hps.css">
    <title>HPS</title>
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
        <div class="search">
            <button class="button">Search By Type</button>
            <input type="number" id="price" placeholder="Price" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
        </div>
        <div class="table-data">
            <table class="data">
                <thead>
                    <tr class="table-header">
                        <td>Product Name</td>
                        <td>Type Product</td>
                        <td>Quantity</td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(() => {
            const formatter = new Intl.NumberFormat("en-US", {
                    style: "currency",
                    currency: "IDR"
            })
            const product = [
                "SOKKIA",
                "CANON",
                "EPSON",
                "AXIOO"
            ]

            $("#price").change(() => {
                let value = $("#price").val()

                $("tbody").empty()  
                
                if (value == "") {
                    $.getJSON("../data/json/hps.json", (data) => {

                        for (let index = 0; index < product.length; index++) {
                            var list = []

                            $("<tr>", {
                                class: "brand",
                                html: "<td>" + product[index] +"</td><td></td><td></td><td></td>"
                            }).appendTo("tbody")

                            $.each(data.data, (idx, val) => {
                                if (val.product.search(product[index]) != -1) {
                                    $("<tr>", {
                                        html: "<td>" + val.product + " </td><td>"+ val.type +"</td><td>"+ val.quantity +"</td><td>"+ formatter.format(val.Price) +"</td>"
                                    }).appendTo("tbody")
                                }
                                
                            })
                        }
                    })
                }else{
                    $.getJSON("../data/json/hps.json", (data) => {
                        value = parseInt(value)

                        for (let index = 0; index < product.length; index++) {
                            var list = []

                            $("<tr>", {
                                class: "brand",
                                html: "<td>" + product[index] +"</td><td></td><td></td><td></td>"
                            }).appendTo("tbody")

                            $.each(data.data, (idx, val) => {
                                if (val.product.search(product[index]) != -1 && value === val.Price) {
                                    $("<tr>", {
                                        html: "<td>" + val.product + " </td><td>"+ val.type +"</td><td>"+ val.quantity +"</td><td>"+ (parseInt(val.Price) != 0 ? formatter.format(val.Price) : "-") +"</td>"
                                    }).appendTo("tbody")
                                }
                                
                            })
                        }
                    })
                }
            })

            $.getJSON("../data/json/hps.json", (data) => {

                for (let index = 0; index < product.length; index++) {
                    var list = []

                    $("<tr>", {
                        class: "brand",
                        html: "<td>" + product[index] +"</td><td></td><td></td><td></td>"
                    }).appendTo("tbody")

                    $.each(data.data, (idx, val) => {
                        if (val.product.search(product[index]) != -1) {
                            $("<tr>", {
                                html: "<td>" + val.product + " </td><td>"+ val.type +"</td><td>"+ val.quantity +"</td><td>"+ formatter.format(val.Price) +"</td>"
                            }).appendTo("tbody")
                        }
                        
                    })
                }
            })


        })
    </script>
</body>
</html>