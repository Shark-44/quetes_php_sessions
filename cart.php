<?php
require 'inc/head.php';
require 'inc/data/products.php';

if (isset($_GET['increment'])) {
    $productId = $_GET['increment'];

    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]++;
    }

    header("Location: cart.php");
    exit();
}

if (isset($_GET['decrement'])) {
    $productId = $_GET['decrement'];

    if (isset($_SESSION['cart'][$productId])) {
        
        if ($_SESSION['cart'][$productId] > 1) {
            $_SESSION['cart'][$productId]--;
        } else {
            unset($_SESSION['cart'][$productId]);
        }
    }

    header("Location: cart.php");
    exit();
}

if (isset($_GET['remove'])) {
    $productId = $_GET['remove'];

    
    unset($_SESSION['cart'][$productId]);

    header("Location: cart.php");
    exit();
}

?>

<section class="cookies container-fluid">
    <div class="row">
        <?php
        
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            foreach ($_SESSION['cart'] as $productId => $quantity) {
                $cookie = $catalog[$productId];
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $productId; ?>.jpg" alt="<?= $cookie['name']; ?>"
                             class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                            <p>Quantity: <?= $quantity; ?></p>
                            <p><a href="?decrement=<?= $productId; ?>">-1</a></p>
                            <p><a href="?increment=<?= $productId; ?>">+1</a></p> 
                            <a href="?remove=<?= $productId; ?>">Remove from Cart</a>
                        </figcaption>
                    </figure>
                </div>
                <?php
            }
        } else {
            
            echo '<p>Your shopping cart is empty.</p>';
        }
        ?>
    </div>
</section>

<?php require 'inc/foot.php'; ?>
