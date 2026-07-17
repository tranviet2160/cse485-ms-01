<?php

require_once 'data.php';
require_once 'helpers.php';


$categoryMap = [];

foreach ($categories as $cat) {
    $categoryMap[$cat['id']] = $cat['name'];
}


$categoryId = isset($_GET['category_id'])
    ? (int)$_GET['category_id']
    : null;


$showProducts = filterByCategory($products, $categoryId);


$totalValue = inventoryValue($products);

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>MiniShop — Catalog (Buoi 2)</title>
</head>

<body>


<h1>MiniShop — Catalog (Buoi 2)</h1>


<p>
<a href="index.php">Tat ca</a> |
<a href="?category_id=1">Ban phim</a> |
<a href="?category_id=2">Chuot</a> |
<a href="?category_id=3">Man hinh</a>
</p>


<table border="1">

<tr>
    <th>SKU</th>
    <th>Ten</th>
    <th>Gia</th>
    <th>So luong</th>
    <th>Thanh tien</th>
    <th>Danh muc</th>
    <th>Muc ton</th>
</tr>


<?php

renderProductRows($showProducts, $categoryMap);

?>

</table>



<h2>Bao cao theo danh muc</h2>


<table border="1">

<tr>
    <th>Danh muc</th>
    <th>So SP</th>
    <th>Tong gia tri</th>
</tr>


<?php foreach ($categories as $category): ?>

<?php

$value = 0;

foreach ($products as $product) {

    if ($product['category_id'] === $category['id']) {
        $value += lineTotal($product);
    }

}

?>

<tr>
    <td><?= $category['name'] ?></td>
    <td><?= countByCategory($products, $category['id']) ?></td>
    <td><?= $value ?></td>
</tr>


<?php endforeach; ?>


</table>


<p>
Tong gia tri kho = <?= $totalValue ?>
</p>


<p>
Quy mo kho: <?= rankInventory($totalValue) ?>
</p>



<pre>
<?php
var_dump($products);
?>
</pre>



<!-- MS_EXPECT inventory_value=41380000 rank=Lon -->


</body>
</html>