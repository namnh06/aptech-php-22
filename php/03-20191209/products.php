<?php

$products = [
  "apple" => [
    "name" => "iPhone X",
    "price" => 999,
  ],
  "samsung" => [
    "name" => "Galaxy S10",
    "price" => 888,
  ]
];

$keys = array_keys($products);

echo $keys[1];

// echo $products[0]["name"];
// echo $products[1]["name"];
?>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $tong = 0;
    for ($i = 0; $i < count($keys); $i++) {
      ?>
    <tr>
      <td>
        <?php echo $i + 1; ?>
      </td>
      <td>
        <?php echo $products[$keys[$i]]["name"]; ?>
      </td>
      <td>
        <?php echo $products[$keys[$i]]["price"]; ?>
      </td>
    </tr>
    <?php
      $tong = $tong + $products[$keys[$i]]["price"];
    }
    ?>
    <tr>
      <td colspan="2">Tong</td>
      <td>
        <?php echo $tong; ?>
      </td>
    </tr>
  </tbody>
</table>