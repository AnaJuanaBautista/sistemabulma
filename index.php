<?php 
  session_start();
  require_once 'header.php';

  echo "<center><br><div class='textosb'> Bienvenido a nuestro 
   espacio donde compartir puros buenos momentos con tu ukulele </div> <br></center>";

  if($loggedin) echo "$user, Esta usted registrado	";
  else          echo '<center><div class="textosb">Porfavor registrate.</div></center>';

  echo <<<_END
	 <br>
	  <br>
	  <center><div class='textosb'>Hecho en México. Centro de bachillerato tecnologico 
	  industrial y de servicios No.
	  253, todos los derechos reservados 2020. Esta 
	  página puede ser reproducida con fines no lucrativos, siempre y cuando no 
	  se mutile, se cite la fuente completa y su dirección electrónica, 
	  de otra forma, requiere permiso previo por escrito de la institución. 
	  </div></center>
	  <br>
	  <br>
	
	</body>
	</html>
_END;


?>


