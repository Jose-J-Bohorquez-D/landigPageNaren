<style>
.alert{
    animation: changeShadowColor 10s infinite;
    border-color: skyblue;
    padding: 4px;
    border: 4px;
    margin: 4px;
}
.color-changing-shadow {
    padding: 0px;
    border: 0px;
    margin: 0px;
    border-radius: 50px;
    background-color: transparent 1;
    /* Color de fondo del div */
    box-shadow: 0 0 10px #FF00FF;
    /* Sombras inicial (neon rosa) */
    animation: changeShadowColor 10s infinite;
    /* Cambia el tiempo de duración o el número de iteraciones según tus preferencias */
  }

  @keyframes changeShadowColor {
    0% {
      box-shadow: 0 0 10px #FF00FF;
    }

    /* Sombras inicial (neon rosa) */
    5% {
      box-shadow: 0 0 10px #00FF00;
    }

    /* Sombras intermedio 1 (neon verde) */
    10% {
      box-shadow: 0 0 10px #00FFFF;
    }

    /* Sombras intermedio 2 (neon cyan) */
    15% {
      box-shadow: 0 0 10px #FFD700;
    }

    /* Sombras intermedio 3 (neon dorado) */
    20% {
      box-shadow: 0 0 10px #FF1493;
    }

    /* Sombras intermedio 4 (neon rosado) */
    25% {
      box-shadow: 0 0 10px #00BFFF;
    }

    /* Sombras intermedio 5 (neon azul) */
    30% {
      box-shadow: 0 0 10px #FF4500;
    }

    /* Sombras intermedio 6 (neon naranja) */
    35% {
      box-shadow: 0 0 10px #FFFF00;
    }

    /* Sombras intermedio 7 (neon amarillo) */
    40% {
      box-shadow: 0 0 10px #7CFC00;
    }

    /* Sombras intermedio 8 (neon verde lima) */
    45% {
      box-shadow: 0 0 10px #FFA500;
    }

    /* Sombras intermedio 9 (neon naranja oscuro) */
    50% {
      box-shadow: 0 0 10px #FF00FF;
    }

    /* Sombras intermedio 10 (neon rosa) */
    55% {
      box-shadow: 0 0 10px #32CD32;
    }

    /* Sombras intermedio 11 (neon verde limón) */
    60% {
      box-shadow: 0 0 10px #00CED1;
    }

    /* Sombras intermedio 12 (neon turquesa) */
    65% {
      box-shadow: 0 0 10px #FF8C00;
    }

    /* Sombras intermedio 13 (neon naranja oscuro) */
    70% {
      box-shadow: 0 0 10px #EE82EE;
    }

    /* Sombras intermedio 14 (neon violeta) */
    75% {
      box-shadow: 0 0 10px #FFFFE0;
    }

    /* Sombras intermedio 15 (neon beige) */
    100% {
      box-shadow: 0 0 10px #FF00FF;
    }

    /* Sombras final (neon rosa, vuelve al color inicial) */
  }
</style>
<div class="alert alert-dismissible fade show text-center color-changing-borderbox" role="alert">
  <p class="color-changing-shadow">
    <img src="Vistas/Dependencias/Imgs/logoWpp1.svg" alt="logo-whatsapp"
      style="width: 50px; height: 50px; padding: 0px; border: 0px; margin: 0px;">
    Puedes contactarnos via whatsapp haciendo
    <a href="https://wa.link/qk7gjz" class="alert-link" style="font-size: 20px; letter-spacing: 3px;">Click Aqui</a>
    o llamando a nuestro telefono <a href="tel:3132445548" style="font-size: 20px; letter-spacing: 3px;">3132445548</a>
    Linea Nacional
  </p>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>