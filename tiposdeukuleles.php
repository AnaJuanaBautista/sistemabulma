<?php
session_start();
require_once 'header.php';
echo <<<_LOGGEDIN
<center>
<section class="section">
			<div class="container">
				<div class="columns">
					<div class="column">
            <div class="notification">
            <h1 class="title is-size-4">SOPRANO</h1>
            <figure class="image is-100x20">
            <img src="soprano.jpg" alt="">
            </figure>
            <p class="is-size-5">
            El ukulele soprano es el mas pequeño de los ukeleles con una longitud total de 53 cm, es el mas usado en el mundo y de los más económicos su sonido es el más agudo.
            </p>
						</div>
					</div>
					<div class="column">
            <div class="notification">
            <h1 class="title is-size-4">CONCIERTO</h1>
            <figure class="image is-100x20">
            <img src="concierto.png" alt="">
            </figure>
            <p class="is-size-5">
            El ukulele concierto tiene una longitud total de 58 cm, es más cómodo de tocar. Cuenta con el mayor tamaño de caja de resonancia ofreciendo un mayor volumen.
						</p>
						</div>
          </div>
          <div class="column">
            <div class="notification">
            <h1 class="title is-size-4">BARITONO</h1>
            <figure class="image is-100x20">
            <img src="baritono.jpg" alt="">
            </figure>
            <p class="is-size-5">
            El ukelele barítono tiene la mayor longitud de escala, se afina en G6, y coincide con las 4 primeras cuerdas de una guitarra. Su afinación lineal y su sonido grave. 
            </p>
            </div>
          </div>
					<div class="column">
            <div class="notification">
            <h1 class="title is-size-4">TENOR</h1>
            <figure class="image is-100x20">
            <img src="tenor.jpg" alt="">
            </figure>
            <p class="is-size-5">
            El ukelele tenor tiene un tamaño de 67 cm. La escala permite tener los trastes más separados, facilitando la digitación, el mayor tamaño de separación ofrece sonidos más graves.
						</p>
						</div>
          </div>
				</div>
			</div>
    </section>
</center>
		<!-- /.section -->
_LOGGEDIN;
?>