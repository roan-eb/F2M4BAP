<?php
$con = require("connection.php");

if(!isset($_GET['id'])){
    echo "ID not set";
    exit;
}

$id = $_GET['id'];
$check_int = filter_var($id, FILTER_VALIDATE_INT);
if($check_int == false){
    echo "This is not a number (integer)";
    exit;
}

$statement = $con->prepare('SELECT * FROM `women` WHERE id=?');
$statement->bind_param('d', $id);
$statement->execute();
$result = $statement->get_result();
    $product = $result->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fine Clothes</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="" />
    <script src="/js/main.js" defer></script>
    <script src="https://kit.fontawesome.com/44df10ddff.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <a href="/index.html" class="logo">Fine Clothes</a>
            <ul>
                <li><a href="women.php" class="color-cate">Women</a></li>
                <li><a href="men.php">Men</a></li>
                <li><a href="kids.php">Kids</a></li>
                <li><a href="/login/account.php"><i class="fa fa-user"></i></a></li>
                <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
            </ul>
        </nav>
    </header>

    <div class="product-details">
    <section class="clothing-list">
        <article>
            <img id="product-img" src="/img/women/<?php echo $product['picture']?>" alt="">
            <header>
                <h3><?php echo $product['title']?></h3>
                <div>€<?php echo $product['price']?></div>
                <p><?php echo $product['description'] ?></p>
            </header>
            <a class="clothing-cart" href="">Add to cart</a>
        </article>
    </section>
    </div>


    <footer class="footer">
        <div class="social">
            <a href="https://www.instagram.com/fineclothes/"><i class="fab fa-instagram"></i></a>
            <a href="https://facebook.com/fineclothes"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/fineclothes"><i class="fab fa-twitter"></i></a>
            <a href="https://linkedin.com/fineclothes"><i class="fab fa-linkedin"></i></a>
        </div>
        <ul class="list">
            <li>
                <a href="/index.html">Home</a>
                <a href="#">Services</a>
                <a href="#">Terms</a>
                <a href="#">Privacy Policy</a>
                <a href="/contact/form.html">Contact Us</a>
            </li>
        </ul>
        <p class="copyright">
            © 2022 Fine Clothes.
        </p>
    </footer>


</body>

</html>