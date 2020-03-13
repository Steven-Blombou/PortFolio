<section class="tips">
  <div class="container">
    <h2>Mes tips</h2>
    <hr>
    <div class="row">
      <div class="col-12 col-xl-6">
        <article>
          <div class="type">CSS Tricks</div>
          <h3>jQuery</h3>
          <h4>Retina Display Media Query</h4>
          <p>Pour inclure des graphiques haute résolution, mais uniquement pour les écrans qui peuvent les utiliser:  "Retina" étant "2x": <span>  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi)</span> </p>
        </article>
      </div>
      <div class="col-12 col-xl-6">
        <article>
          <div class="type">JS</div>
          <h3>JavaScript</h3>
          <h4>Animation Catchphrase</h4>
          <p>Gestion d'affichage des niveaux aléatoires des phrases: <span> setInterval(function() {
            $("#word").fadeOut(function() {
              $(this).html(words[i = (i + 1) % words.length]).fadeIn();
            });
          }, 3500);</span> </p>
        </article>
      </div>
      <!-- <div class="col-12 col-xl-6">
        <article>
          <div class="type"></div>
          <h3></h3>
          <h4></h4>
          <p></p>
        </article>
      </div> -->
      <div class="view_all text-lg-left">
        <a href="tipspage.php"><img src="img/site/button_view_all.jpg" alt="button_view_all.jpg"></a><!-- enleve l espace qui existe par defaut -->
      </div>
    </div>
  </div>
</section>
