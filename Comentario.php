  <?php
  require_once 'header.php';
  error_reporting(E_ERROR | E_PARSE);
  $user     = $_SESSION['user'];
echo ' <br><center><h5 class="textosb">Comentarios bonitos/Foro</h5></center>';
echo '
<br>
  <form method="POST">
    <div class="form-group">
    <div class="form-group">
      <center><label for="exampleFormControlTextarea1" class="text">Deja algun comentario, tienes 345 caracteres disponibles! (recuerda que este no debe ser ofensivo)</label><center>
      <br>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3" maxlength="345" placeholder="Escribe tu comentario aqui!"></textarea>
    </div>
    </div>
    <center><button type="submit" class="btn btn-primary mb-2">Enviar comentario!</button></center>
  </form>';
  $Comentario = $_POST['comentario']; 
  if(isset($_POST['comentario']) && !empty($_POST['comentario'])){
    queryMysql("INSERT INTO comentarios ( Cuser, Comentario)
    VALUES ('$user', '$Comentario')"); 
  }
        $com = queryMysql("SELECT Cuser, Comentario FROM comentarios");
        //$c= mysqli_fetch_array($com);
        //$c = mysqli_query($connection,$sql);
        while($c = mysqli_fetch_array($com)) {
          echo   $c['Cuser'] . ':'; echo '<div class="content-box-blue"><h2>'. $c['Comentario'].'</h2> </div> <br>'; 
            
        }
?>