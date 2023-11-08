<?php
include("conn.php");
$sefurl = $_GET['sefurl'];
$q = $db->prepare("SELECT * FROM urunler WHERE sefurl = ?");
$q->bindParam(1, $sefurl, PDO::PARAM_STR);
$q->execute();
$Urun = $q->fetch(PDO::FETCH_OBJ);
?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto py-5">
                <h3 class="text-center">Başlık: <?=$Urun->baslik?></h3>
            
                <p class="text-center">Açıklama: <?=$Urun->aciklama?></a></p>
                <p class="text-center">Sef URL: <?=$Urun->sefurl?></a></p>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>
