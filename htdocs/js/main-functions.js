$("#login").on('click', function(e) {
    e.preventDefault();
    console.log("tu vieja");
    $(".login-overlay").fadeIn(300);
    $(".close").on('click', function(e) {
      $(".login-overlay").fadeOut(300);  
    });
});

$('#slider').nivoSlider({
        controlNav: false,
        effect: 'fade',
        animSpeed: 200,
        manualAdvance: false,
      });