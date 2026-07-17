<?php
require 'data.php';

$categoryMap = [];

foreach ($categories as $cat) {
    $categoryMap[$cat['id']] = $cat['name'];
}

$totalInventoryValue = 0;
$productCount = count($products);

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>MiniShop — Catalog (Buoi 1)</title>
</head>

<body>

<h1>MiniShop — Catalog (Buoi 1)</h1>

<table border="1">
    <tr>
        <th>SKU</th>
        <th>Ten</th>
        <th>Gia</th>
        <th>So luong</th>
        <th>Thanh tien</th>
        <th>Danh muc</th>
    </tr>

<?php foreach ($products as $p): ?>

<?php
$lineTotal = $p['price'] * $p['qty'];
$totalInventoryValue += $lineTotal;
?>

<tr>
    <td><?= htmlspecialchars($p['sku']) ?></td>
    <td><?= htmlspecialchars($p['name']) ?></td>
    <td><?= $p['price'] ?></td>
    <td><?= $p['qty'] ?></td>
    <td><?= $lineTotal ?></td>
    <td><?= $categoryMap[$p['category_id']] ?></td>
</tr>

<?php endforeach; ?>

</table>

<p>So san pham = <?= $productCount ?></p>

<p>Tong gia tri kho = <?= $totalInventoryValue ?></p>

<pre>
<?php
var_dump($products);
?>
</pre>

<!-- MS_EXPECT product_count=8 inventory_value=41380000 -->

</body>
</html>