<?php 
session_start();
   require "header.php"; 
echo <<<_LOGGEDIN
<br>
<br>
<center><h1>Aqui podras encontrar musica en ukulele asi como tutoriales de como tocar tu instrumento</h1></center>
<section class="section">
				<div class="columns">
					<div class="column">
                  <div class="notification">
                  <iframe width="400" height="250" src="https://www.youtube.com/embed/jEbkf-MbcJ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<div class="column">
                  <div class="notification">
                  <iframe width="400" height="250" src="https://www.youtube.com/embed/1nU-r3YDp1U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
               </div>
               <div class="column">
                  <div class="notification">
                  <iframe width="400" height="250" src="https://www.youtube.com/embed/8jQSlZq2AWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
               </div>
				</div>
      </section>
      <br>
      <br>
		<!-- /.section -->
_LOGGEDIN;


'<center><p>Aqui podras encontrar musica en ukulele asi como tutoriales de como tocar tu instrumento</p></center>

<br>
<center><h>Si deseas descargar los acordes del ukulele da click en la imagen</h></center>
<center>
    <a  href="acordes_cuatriada.pdf" target="_blank">
      <img src="pdfdeacordes.png" lign="center" width="400" 
       height="250" border="0px"alt="downloand curriculum" class="button">
    </a>
 </center>';
 
 ?>