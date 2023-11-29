// funcao q faz a sombrinha aparecer
$(window).scroll(function() {
    if ($(this).scrollTop() > 250) {
      $('#navbar').addClass('sombra');
    } 
    else {
      $('#navbar').removeClass('sombra');
    }
  });

  