<?php
include ("conn.php");
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
                <h3 class="text-center">SEFURL</h3>
            
                <?php

                     $k = $db->prepare("SELECT * FROM urunler");
                     $k->execute();
                 
                     while ($cek = $k->fetch(PDO::FETCH_OBJ)) {?>
                <p class="text-center"><a href="<?=$cek->sefurl?>"> <?=$cek->baslik?> </a></p>
            <?php } ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>
