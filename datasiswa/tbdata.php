<?php

$db = mysqli_connect("localhost","root","","data_siswa");

$result = mysqli_query($db, "SELECT * FROM datasiswa");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>catatanperjalanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 
</head>
<body style="background:grey">
    <div class="container mt-5">
    <h1 class="text-black">DATA TABLES</h1>
</div>
<div class="container mt-3">
    <div class="container mt-3">
        <div class="row fw-bold card">
            <div class="row g-2 align-items-center px-3 mb-3">
                <div class="col-auto">
                <span class="text-black">Urutkan Berdasarkan</span>
                <select name="urut">
                  <option value="tanggal">NIS</option>
                  <option value="waktu">NAME</option>
                  <option value="lokasi">CLASS</option>
</select>
<button type="submit">urutkan</button>
             </div>
                
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      
      <td><?=$row['nis'];?></td>
      <td><?=$row['name'];?></td>
      <td><?=$row['class'];?></td>
      
      <td>
        <a href="from_update.php?id=<?=$row['id'];?>" class="btn btn-primary">UPDATE</a>
        <a href="delete.php?id=<?=$row['id'];?>"onclick="return confirm('anda yakin ingin hapus')" class="btn btn-danger btn-sm">DELETE</a>
      </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end">
    <a href="data.php">
        <button class="btn btn-primary">Isi Data</button>
    </a>
    </div>
</body>
</html>