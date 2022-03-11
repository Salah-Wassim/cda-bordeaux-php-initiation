<?php
require_once 'includes.php';

$product = $connection
    ->query('SELECT * FROM product WHERE id=' . $_GET['id'])
    ->fetch(PDO::FETCH_ASSOC);

?>
<?php
require_once 'template_head.php';
?>
    <label>Name</label>
        <?= $product['name'] ?>
    <label>Cost Price : <label>
        <?= $product['cost_price'] ?>
    <label>Selling price</label>
        <?= $product['selling_price'] ?></label>
    <label>Category</label>
        <?= $product['category'] ?></label>
<?php
    header('Location: /');
    exit();
