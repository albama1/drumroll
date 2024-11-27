<?php
$servername = "localhost:3306";
$database = "drumroll";
$username = "root";
$password = "";

$conexion = mysqli_connect($servername, $username, $password, $database);
$banda=$_GET["banda"];
$query="select * from banda where idBanda=$banda";
$res=mysqli_query($conexion, $query);
$fila=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="style5.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> </title>

</head>
<body>
    <header style="background-color:#2e2d2d;">
        <div id="mySidenav" class="sidenav">
          </div>
            <div class="searchBox">
              <input class="searchInput" type="text" name="" placeholder="Search something">
              <button class="searchButton" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="4 3 29 29" fill="none">
                  <g clip-path="url(#clip0_2_17)">
                    <g filter="url(#filter0_d_2_17)">
                      <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
                    </g>
                  </g>
                  <defs>
                    <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                      <feOffset dy="4"></feOffset>
                      <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                      <feComposite in2="hardAlpha" operator="out"></feComposite>
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
                    </filter>
                    <clipPath id="clip0_2_17">
                      <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
                    </clipPath>
                  </defs>
                </svg>
    </header>
    <main>
      <div id="second-background">
      <div id="title">
        <h1 style=" margin-block-end: 0px;"> </h1>
      <div class="general" style="width: 700px;">
      </div>
      </div>
      <div id="info-box">
        <table>
          <tr>
            <th> <?php if(empty($fila ["Nombre_banda"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["Nombre_banda"];
                    }
                     ?></th></div>
          </tr>
          <tr>
            <td style="text-align: center;"><img src="
            <?php if(empty($fila ["imagen"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["imagen"];
                    }
                     ?>"></td>
          </tr>
          <tr>
            <td>
              <div class="subtitle">Datos generales</div>
              <table style="border-style: hidden;">
                <tr style="border-style: hidden;"><td style="border-style: hidden;"></td>Origen <td>• 
            <?php if(empty($fila ["Origen"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["Origen"];
                    }
                     ?></td></tr>
                <tr style="border-style: hidden;"><td style="border-style: hidden;">Genero/s</td> <td>• 
            <?php if(empty($fila ["Genero/s_banda"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["Genero/s_banda"];
                    }
                     ?></td></tr>
                <tr style="border-style: hidden;"><td style="border-style: hidden;">Periodo de actividad</td> <td>• 
            <?php if(empty($fila ["Periodo_de_actividad"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["Periodo_de_actividad"];
                    }
                     ?> </td></tr>
                <tr style="border-style: hidden;"><td style="border-style: hidden;">Periodo de actividad</td> <td>• 
            <?php if(empty($fila ["Discografica/s"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["Discografica/s"];
                    }
                     ?> </td></tr>
              </table>
            </td>
          </tr>
          
        </table>
      </div>
      <div class="text-title"> Informacion general </div>
      <div class="general" style="width: 750px;"></div>

      <div class="info-text">
        
      <?php if(empty($fila ["Info_general"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["Info_general"];
                    }
                     ?>
      </div>
      <div class="text-title" > Historia </div>
      <div class="general" style="width: 750px;"></div>
      <div class=" info-text">
        
      <?php if(empty($fila ["Historia_banda"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["Historia_banda"];
                    }
                     ?>
      </div>
      <div class="text-title"> Legado</div>
      <div class="general" style="width: 750px;"></div>
      <div class="info-text">
      <?php if(empty($fila ["Legado"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["Legado"];
                    }
                     ?>
          </div>
      <div class="text-title"> Etimologia</div>
      <div class="general"></div>
      <div class="info-text"  style="padding-left: 250px; width: 800px;">
      <?php if(empty($fila ["Etimología"])){
                    echo "-";
                    }
                    else{
                        echo $fila ["Etimología"];
                    }
                     ?>
          </div>
    </div>  
    </main>
    <footer>
      <p>&copy; 2024 Página Web. Todos los derechos reservados.</p>
  </footer>
</body>