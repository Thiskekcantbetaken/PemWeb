<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FaShop Admin</title>
  
  <?php foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
  <?php endforeach; ?>
  <?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>  
  <?php endforeach; ?>
</head>
<body>
  <div style="height: 20px">
    <div>
      <h1>Tabel Barang</h1>
      <?= $output; ?>
    </div>
    <p>kalo mau akses tabel user ganti url jadi 'admin/users' ya</p>
  </div>
</body>
</html>
