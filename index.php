<!doctype html>
	<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Индекс</title>
		<link rel="shortcut icon"href="favicon.ico">
		<link rel="apple-touch-startup-image" href="icon-320x460.png">
		<link rel="apple-touch-icon" sizes="57x57" href="icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="icon-180x180.png">

		<meta name="theme-color" content="#000000">
    
		<link rel="manifest" href="manifest.json">
		<link href="bootstrap.min.css" rel="stylesheet">


	</head>

    <body style = "background-color : #FFD800";>
  <header>
    <div class="container-fluid fixed-top p-2 rounded  mr-3  "  style = "background-color : #FFD800";>
       <div class="col-sm d-flex justify-content-center">
        <h4 class=" text-white">Сайт приложение!</h4>
      </div>
  </div>
  </header>



<?php
$db = new PDO('sqlite:pages.sqlite');
$qq = date ('Y-m-d.H:i:s', time()+10800); 
$q = 3;  
$qqq = 2;
$sql = "INSERT INTO xxx (time, addres, port, text) VALUES ($q, '$qq', '$qqq', 'stuff')";
$db->query($sql);
?>

  <?php
   $sql = "SELECT * FROM xxx ORDER BY id ";
  $db = new PDO('sqlite:pages.sqlite');
 $result = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
 ?>




     <?php
      $r = 0;
      foreach ($result as $key) {
        
        ?>
     

        <div class="card text-center">
  <div class="card-header">
    Рекомендуемые
  </div>
  <div class="card-body">
  <img src="icon-180x180.png" width="180" height="180" alt="lorem">
    <h5 class="card-title"><?= $key['id']; ?></h5>

    <p class="card-text"><?= date ('s:i:H d-m-Y', $key['time']); ?></p>
    <a href="#" class="btn btn-primary"><?= $key['addres']; ?></a>
  </div>
  <div class="card-footer text-muted">
    2 дня спустя
  </div>
</div>



        <?php
      }
      ?>




	</body>
	</html>


 