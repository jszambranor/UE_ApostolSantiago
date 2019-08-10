<?php
session_start();
if (isset($_SESSION['USER_UEAS'])) {
    $_SESSION['USER_UEAS'];
    $_SESSION['USER_TYPE'];
    require_once('../../global/ClassGlobalConexion.php');
    require_once('../../model/ClassModelConsultas.php');

    $objeto = new Consultas();
    $conexion = $objeto->get_Datos($_SESSION['USER_UEAS']);
} else {
}
 ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Mis Cursos</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<nav>
        <div class="navbar-fixed">
          <div class="nav-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <a href="#" class="brand-logo center">INICIO</a>
          </div>
        </div>
    </nav>


      <ul id="slide-out" class="sidenav">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="../../images/logo.png" style="width:100%; margin-top:0%;">
            </div>
            <a href="#user"><img class="circle" src=""></a>
            <a href="#name"><span class="white-text name"><?php if (isset($_SESSION['USER_UEAS'])) {
       echo $conexion['NOMBRE'];
   } ?></span></a>
            <a href="#email"><span class="white-text email"><?php if (isset($_SESSION['USER_UEAS'])) {
       echo $conexion['CORREO'];
   }?></span></a>
          </div>
          <br>
        </li>
        <li id="li_option"><a id="option" href="./index.php" style="background-color:orange;"><i style="color:white;" class="material-icons">home</i>Inicio</a></li><br>
        <li id="li_option"><a id="option" href="../../global/logout.php"><i class="material-icons">logout</i>Cerrar Sesion</a></li>
        <li>
          <div class="divider"></div>
        </li>
        <li id="li_option"><a id="option2" class="subheader">Subheader</a></li>
        <li><a id="option2" class="waves-effect" href="./reportes.php"><i class="material-icons">person</i>Agregar Estudiantes</a></li>
        <li><a id="option2" class="waves-effect" href="./reportes.php"><i class="material-icons">assignment_turned_in</i>Reportes de Asistencias</a></li>
      </ul>
    </header>

      <main>

        <div class="class="col s10" container-table">

        <table class="highlight centered">
        <thead>
          <tr>
              <th>CEDULA</th>
              <th>NOMBRES</th>
              <th>APELLIDOS</th>
              <th>ASISTENCIA</th>
              <th>CONFIRMAR</th>

          </tr>
        </thead>
      </table>

      <div class="row">
    <form class="col s10">
      <div class="row">
        <div class="input-field col s2">
          <input disabled id="first_name" type="text">
          </div>
        <div class="input-field col s2">
          <input disabled id="last_name" type="text">
        </div>
        <div class="input-field col s2">
          <input disabled value="" id="disabled" type="text">
        </div>
        <div class="input-field col s2">
          <select>
            <option value="" disabled selected>Choose your option</option>
            <option value="1">ASISTENCIA</option>
            <option value="2">ATRASO</option>
            <option value="3">FALTA</option>
          </select>
        </div>
        <div class="input-field col s2">
        <button class="btn waves-effect waves-light" type="submit" name="action">CONFIRMAR
          <i class="material-icons right">send</i>
        </button>
      </div>
      </div>

    </form>
  </div>

    </div>

      </main>

      <footer>

      </footer>

        <script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
      <script type="text/javascript" src="../../js/materialize.min.js"></script>
        <script type="text/javascript" src="../../js/index.js"></script>

        <style media="screen">
          nav{
            background-color: orange;
          }

          .container-table{
            width: 90%;
            border-color: orange;
            margin-top: 5%;
            margin-left: auto;
            margin-right: auto;
          }
        </style>
    </body>
  </html>
