import $ from 'jquery';

$(document).ready(function() {
  $('#guitare').hover( function() {
     
      $( this ).find('.drop').show('slide');
  }, function(){
      $( this ).find('.drop').hide('blind')
      });
  });

  $('#batterie').hover( function() {
     
    $( this ).find('.drop').show('slide');
}, function(){
    $( this ).find('.drop').hide('blind')
    });








/*
  $(document).ready(function(){
 
    $( ".topG")
    .mouseover(function() {
      $( ".promoG" ).show( "slow" ); ;
      
    })
    .mouseout(function() {
      $( ".promoG" ).hide("slow"); ;
    });

  });
*/
$(document).ready(function(){

$(".topG")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/TOPVENTESROLLOVERguitare.png"); ;
      
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/TOP VENTES guitare.png"); ;
    });
});
$(document).ready(function(){

$(".topS")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/TOP VENTES ROLL OVER saxo.png"); ;
      
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/TOP VENTES saxo.png"); ;
    });
});
$(document).ready(function(){

$(".topP")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/TOP VENTES ROLL OVER piano.png"); ;
      
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/TOP VENTES piano.png"); ;
    });
});
