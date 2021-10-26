<?php 
  $data1 = [
    [
      'nama' => 'Tepung ',
      'berat(kg)' => 1,
      'stock'=> 20,
    ],
    [
      'nama' => 'gula ',
      'berat(kg)' => 5,
      'stock'=> 25,
    ],
    [
      'nama' => 'pisang ',
      'berat(kg)' => 2,
      'stock'=> 20,
    ],
    [
      'nama' => 'terigu ',
      'berat(kg)' => 7,
      'stock'=> 30,
    ],
    [
      'nama' => 'mantan ',
      'berat(kg)' => 1,
      'stock'=> 0,
    ],
  ];
  $index = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Praktikum 3</title>
</head>

<body>
  <h1>KONVERSI BARANG PAK JOY</h1>
  <table class="my_table">
    <tr >
      <th>No</th>
      <th>Nama Barang</th>
      <th>Berat(Kg)</th>
      <th>Berat(gram)</th>
      <th>Berat(miligram)</th>
      <th>stock</th>
    </tr>
    <?php foreach($data1 as $data) { 
    $index+=1;
    ?>
    <tr style="<?= $data['stock'] == 0 ? 'background-color:red' : '' ?>" >
      <td><?= $index?></td>
      <td><?= $data['nama']?></td>
      <td><?= $data['berat(kg)']?></td>
      <td><?= $data['berat(kg)']*1000 ?></td>
      <td><?= $data['berat(kg)']*1000000 ?></td>
      <td><?= $data['stock'] ?></td>
    </tr>
    <?php } ?>
  </table>
</body>

</html>