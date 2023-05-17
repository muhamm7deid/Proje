<!doctype html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="./css/stil.css">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

        <title>İletişim</title>

    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark">
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Anasayfa</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="Hakkimda.html">Hakkımda</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="Ozgecmis.html">Özgeçmiş</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Sehrim.html">Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Mirasimiz.html">Mirasımız</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ilgiAlanlari.html">İlgi Alanlarım</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                  </li>
              </ul>
              <a href="Login.html" class="btn btn-primary" >Login</a>
            </div>
          </nav>


<div class="container mt-3">
              
  <table class="table table-dark table-striped" id="iletisimphptablo">
    <thead>
      <tr>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Cinsiyet</th>
        <th>Email</th>
        <th>Mesaj</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
            <?php
            echo $_GET["ad"];?></td>
        <td>
            <?php
            echo $_GET["soyad"];?> </td>
        <td>
            <?php
            echo $_GET["cinsiyet"];?> </td>
        <td> 
          <?php
          echo $_GET["email"];?></td>
        <td>
            <?php 
            echo $_GET["text"];?> 
        </td>

      </tr>
      
    </tbody>
  </table>
</div>
 



          

          

        
                
        </body>



</html>
