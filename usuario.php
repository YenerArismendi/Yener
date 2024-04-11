<?php
session_start();
if(empty($_SESSION["id"]) ){
    header("location: inicio_sesion.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm Oil</title>
    <link rel="stylesheet" href="CSS/usuario.css">
    <link rel="icon" type="image/png" href="IMAGENES/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="sweetalert/dist/sweetalert2.all.js"><  /script>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="encabezado">
        <div class="logo-titulo">
            <img src="IMAGENES/logo.png" class="logo" alt="fondo">
            <h1>Palm Oil</h1>
        </div>
        <div class="contenedor-cerrar-sesion">
            <div class="nombre-usuario">
                <b class="negrilla">&nbsp;Bienvenido: <?php echo $_SESSION["nombre"]; ?> &nbsp;</b>
            </div>
            <div class="cerrar-sesion">
                <a class="btn btn-danger" href="modulos/cerrarSesion.php">Cerrar sesion</a>
            </div>
        </div>
    </div>
    <div class="lista-principal">
        <nav class="nav-general">
            <ul class="nav-list">
                <div class="contenedor-home" onclick="window.location.href='Principal.php'">
                    <li><img src="bootstrap/iconos/house-fill.svg" alt="home"><a href="#">Inicio</a></li>
                </div><br>
                <div class="contenedor-movimientos"  onclick="window.location.href='movimientos.php'">
                    <li><img src="bootstrap/iconos/clipboard-data-fill.svg" alt="movimientos"><a href="movimientos.php">Movimientos</a></li>
                </div><br>    
                <div class="contenedor-registro" onclick="window.location.href='registrousuario.php'">
                    <li><img src="bootstrap/iconos/journal-plus.svg" alt="registro"><a href="registrousuario.php">Registro</a></li>
                </div><br>
                <div class="contenedor-estadisticas">
                    <li><img src="bootstrap/iconos/graph-up-arrow.svg" alt="estadisticas"><a href="#">Estadisticas</a></li>
                </div><br>
                <div class="contenedor-stock">
                    <li><img src="bootstrap/iconos/box-seam-fill.svg" alt="stock"><a href="#">Stock</a></li>
                </div><br>
                <div class="contenedor-usuarios">
                    <li><img src="bootstrap/iconos/person-square.svg" alt="usuarios"><a href="#">Usuarios</a></li>
                </div>
            </ul>
        </nav>
    </div>


    <div class="centro-perfil">

    
<div class="menu-perfil">
      <div class="menu-perfil-sidebar">
          <div class="sidebar-perfil">
      <ul>
      <li><a href="">Perfil</a></li>
      <li><a href="">Documento</a></li>
      <li><a href="">Cambiar contraseña</a></li>
      <li><a href="">Conexión</a></li>
  </ul>
  </div>
</div>



  <div class="My-perfil">  
    
    <div class="profile">
    <div class="profile-image">
            <img id="current-image" src="default-image.jpg" alt="">
            <input type="file" id="image-input" accept="image/*">
            <label for="image-input" id="change-image-btn">Cambiar Foto</label>
        </div>
  </div>


      <div class="My-perfil-nombre">
      <span class="nombre">Nombre<label>*</label></span>
      <input type="text" name="nombre">
      <span class="apellido">Apellido<label>*</label></span>
      <input type="text" name="apellido">
    
      <span>Email<label>*</label></span>
      <input type="email" placeholder="Example@gmail.com">
      <span>Pais<label>*</label></span>
      <select name="country" id="country">
        <option value="selected">Selecionar</option>
        <option value="argentina">Argentina</option>
        <option value="bolivia">Bolivia</option>
        <option value="brasil">Brasil</option>
        <option value="chile">Chile</option>
        <option value="colombia">Colombia</option>
        <option value="costa_rica">Costa Rica</option>
        <option value="cuba">Cuba</option>
        <option value="ecuador">Ecuador</option>
        <option value="el_salvador">El Salvador</option>
        <option value="guatemala">Guatemala</option>
        <option value="honduras">Honduras</option>
        <option value="mexico">México</option>
        <option value="nicaragua">Nicaragua</option>
        <option value="panama">Panamá</option>
        <option value="paraguay">Paraguay</option>
        <option value="peru">Perú</option>
        <option value="puerto_rico">Puerto Rico</option>
        <option value="uruguay">Uruguay</option>
        <option value="venezuela">Venezuela</option>
        <option value="argelia">Argelia</option>
        <option value="angola">Angola</option>
        <option value="benin">Benin</option>
        <option value="botsuana">Botsuana</option>
        <option value="burkina_faso">Burkina Faso</option>
        <option value="burundi">Burundi</option>
        <option value="cabo_verde">Cabo Verde</option>
        <option value="camerun">Camerún</option>
        <option value="chad">Chad</option>
        <option value="comoras">Comoras</option>
        <option value="costa_de_marfil">Costa de Marfil</option>
        <option value="egipto">Egipto</option>
        <option value="eritrea">Eritrea</option>
        <option value="eswatini">Eswatini</option>
        <option value="etiopia">Etiopía</option>
        <option value="gabon">Gabón</option>
        <option value="gambia">Gambia</option>
        <option value="ghana">Ghana</option>
        <option value="guinea">Guinea</option>
        <option value="guinea_ecuatorial">Guinea Ecuatorial</option>
        <option value="kenia">Kenia</option>
        <option value="lesoto">Lesoto</option>
        <option value="liberia">Liberia</option>
        <option value="libia">Libia</option>
        <option value="madagascar">Madagascar</option>
        <option value="malawi">Malaui</option>
        <option value="mali">Malí</option>
        <option value="marruecos">Marruecos</option>
        <option value="mauricio">Mauricio</option>
        <option value="mauritania">Mauritania</option>
        <option value="mozambique">Mozambique</option>
        <option value="namibia">Namibia</option>
        <option value="niger">Níger</option>
        <option value="nigeria">Nigeria</option>
        <option value="ruanda">Ruanda</option>
        <option value="sahara_occidental">Sáhara Occidental</option>
        <option value="senegal">Senegal</option>
        <option value="seychelles">Seychelles</option>
        <option value="sierra_leona">Sierra Leona</option>
        <option value="somalia">Somalia</option>
        <option value="sudafrica">Sudáfrica</option>
        <option value="sudan">Sudán</option>
        <option value="tanzania">Tanzania</option>
        <option value="togo">Togo</option>
        <option value="tunez">Túnez</option>
        <option value="uganda">Uganda</option>
        <option value="zambia">Zambia</option>
        <option value="zimbabue">Zimbabue</option>
        <option value="india" data-icon="india.png">India</option>
        <option value="pakistan">Pakistán</option>
        <option value="bangladesh">Bangladesh</option>
        <option value="indonesia">Indonesia</option>
        <option value="philippines">Filipinas</option>
        <option value="vietnam">Vietnam</option>
        <option value="cambodia">Camboya</option>
        <option value="myanmar">Myanmar (Birmania)</option>
        <option value="nepal">Nepal</option>
        <option value="sri_lanka">Sri Lanka</option>
        <option value="laos">Laos</option>
        <option value="mongolia">Mongolia</option>                   
      </select>
    
    
      <span class="Telefono">Numero<label>*</label></span>
      <input type="number" class="telefono">
    
    
      <span>Código postal<label>*</label></span>
      <input type="text">
    

  
      <div class="button-perfil-aceptar">
      <button type="submit">Guardar</button>
      <button type="submit">Eliminar</button>
    </div>
  </div>
</div>
</div>


<script src="Js/usuario.js"></script>
  
  
</div>

</body>
</html>