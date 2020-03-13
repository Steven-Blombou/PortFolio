$(function() {
  var words = [
    'un designer',
    'un vfx-artist',
    'un animateur',
    'un développeur',
    'un autodidacte'
  ],
  i = 0;

  // on gere l affichage du menu responsif pour les ecrans inf  ou egaux a medium (<992px)
  $(".navbar-responsive").toggle();

  $(".menu").click(function () {
    $(".navbar-responsive").toggle("slow");
  });

  // on gere l affichage du niveau aleatoire des phrases d acrroche du header ( tts les 3.5s)
  setInterval(function() {
    $("#word").fadeOut(function() {
      $(this).html(words[i = (i + 1) % words.length]).fadeIn();
    });
  }, 3500);

  // On gère le scroll vers les différentes sections du site
  $(".scroll").click(function() {
    var section = $("." + this.id);
    $("html,body").animate({scrollTop: section.offset().top}, 'slow');
  });

  // On gère l'affichage des progressbar pour les compétences
window.sr = ScrollReveal();
sr.reveal('.progress-bar', {
  origin: 'left',
  duration: 2000,
  distance: '100%'
})
});


 // Gestion de l'apparition ou disparition du scrolltop
$(document).ready(function() {
	// On écoute le scroll sur la page
	$(document).scroll(function() {
		// On récupère la hauteur de la page
		var hautfen = $(window).height();
		// On récupère la position du scroll
		var posScroll = $(window).scrollTop();
		// On calcule l'endroit à partir duquel on veut faire apparaître le bouton
		var diff = hautfen - posScroll - (hautfen/2);
		if (diff < 0) {
			// On fait apparaître le bouton en fondu sur 0.5s
			$('#scroll_to_top').fadeIn(500);
		} else {
			// On fait disparaitre le bouton en fondu sur 0.5s
			$('#scroll_to_top').fadeOut(500);
		}
	});
});
