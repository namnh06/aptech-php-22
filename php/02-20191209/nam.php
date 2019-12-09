<h1>
  <?php
  // echo ("123");
  // echo "<br>";
  // $nam = 5;
  // echo $nam . ", thieu 4 <roi></roi>";
  // $php22 = ["Binh", "Hiep", "Tho", "Quoc", "Tao", "Mai"];
  // echo $php22[0];
  // echo "<br>";
  // echo $php22[1];

  // $iPhone11 = ["iPhone 11 Sieu Dep", 999.99];
  // $s10 = ["Galaxy S10 Sieu Net", 999.99];
  ?>
  <!-- <h1>IPHONE</h1>
  <p>Ten: -->
  <?php
  // echo $iPhone11[0];
  ?>
  <!-- </p>
  <p>Gia: -->
  <?php
  // echo $iPhone11[1];
  ?>
  <!-- </p> -->
  <?php
  // $products = [
  //   [
  //     "iPhone 11",
  //     999.99
  //   ],
  //   [
  //     "S10",
  //     998.98
  //   ]
  // ];
  // echo $products[0][0];
  ?>

  <?php
  // ASSOCIATIVE ARRAY
  // $person = [
  //   "name" => "Ben",
  //   "age" => 19,
  //   "gender" => "male"
  // ];

  // echo $person[0];

  $products = [
    "iphone 11" => [
      "name" => "iPhone 11 Sieu Dep",
      "price" => 999.99
    ],
    "s10" => [
      "name" => "Galaxy S10",
      "price" => 998.98
    ]
  ];

  // var_dump($products["iphone 11"]);
  echo $products["iphone 11"]["name"];
  ?>

</h1>