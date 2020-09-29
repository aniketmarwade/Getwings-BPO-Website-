$(document).ready(function(){

    $('.modal').modal();
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $(".slider").slider({full_width: true, indicators: false,});
    $('.fixed-action-btn').floatingActionButton();
    $('.parallax').parallax();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
    $('.collapsible').collapsible();
    $('input#input_text, textarea#textarea2').characterCounter();

    $('.fixed-action-btn').floatingActionButton();

   
            
})




    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

    function toggleModal(){

      var x=M.Modal.getInstance($('#modal1'));
      x.open();
    }