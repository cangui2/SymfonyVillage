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

    $('.clavier').hover( function() {
     
      $( this ).find('.drop').show('slide');
  }, function(){
      $( this ).find('.drop').hide('blind')
      });
      $('.trompette').hover( function() {
     
        $( this ).find('.drop').show('slide');
    }, function(){
        $( this ).find('.drop').hide('blind')
        });

        $('.espaceClient').hover( function() {
     
          $( this ).find('.drop2').show('slide');
      }, function(){
          $( this ).find('.drop2').hide('blind')
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


$(".topG")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/TOPVENTESROLLOVERguitare.png"); ;
      
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/TOP VENTES guitare.png"); ;
    });



$(".topS")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/TOP VENTES ROLL OVER saxo.png"); ;
      
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/TOP VENTES saxo.png"); ;
    });



$(".topP")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/TOP VENTES ROLL OVER piano.png"); ;
      
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/TOP VENTES piano.png"); ;
    });

    $(".guitareHover")
    .mouseover(function() {
      $(this).attr( "src"," images/BODY/CATEGORIES ROLL OVER guitare.png"); ;
     
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/CATEGORIES guitare.png"); ;
    });
