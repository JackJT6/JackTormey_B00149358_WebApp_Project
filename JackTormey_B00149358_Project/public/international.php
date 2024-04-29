<?php require_once '../templates/header.php';?>
    <title>MyRetroJersey</title>
    <style>
        body {
            background-image: url('../images/background.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<?php require_once '../templates/navBar.php';?>
    <div class="container">
        <div class="product">
            <img src="../images/international_jersey_1.jpg" alt="international jersey 1">
            <h3>Ireland</h3>
            <p>€49.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="../images/international_jersey_2.jpg" alt="International Jersey 2">
            <h3>Germany</h3>
            <p>€59.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="../images/international_jersey_3.jpg" alt="International Jersey 3">
            <h3>Spain</h3>
            <p>€39.99</p>
            <button>Add to Cart</button>
        </div>
    </div>
        <?php require_once '../templates/footer.php';?>