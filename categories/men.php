<?php
$con = require("connection.php");

$result = $con->query('SELECT * FROM `men` ORDER BY RAND();');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fine Clothes - Men</title>
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
                <li><a href="women.php">Women</a></li>
                <li><a href="men.php" class="color-cate">Men</a></li>
                <li><a href="kids.php">Kids</a></li>
                <li><a href="/login/account.php"><i class="fa fa-user"></i></a></li>
                <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
            </ul>
        </nav>
    </header>

    <div class="all-products">

        <section class="clothing-list">

            <?php foreach ($result as $row) : ?>
                <article class="clothing-list__details">
                    <a class="clothing-list__product" href="product.php?id=<?php echo $row['id']; ?>">
                        <img class="clothing-list__photo" src="/img/men/<?php echo $row['picture']; ?>" alt="">
                        <header>
                            <h3><?php echo $row['title']; ?></h3>
                            <div>€<?php echo $row['price']; ?></div>
                        </header>
                    </a>
                </article>
            <?php endforeach; ?>
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