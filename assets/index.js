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
    $(".batterieHover")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/CATEGORIES ROLL OVER batterie.png"); ;
     
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/CATEGORIES batterie.png"); ;
    });
    $(".pianoHover")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/CATEGORIES ROLL OVER piano.png"); ;
     
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/CATEGORIES piano.png"); ;
    });
    $(".microHover")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/CATEGORIES ROLL OVER micro.png"); ;
     
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/CATEGORIES micro.png"); ;
    });
    $(".sonoHover")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/CATEGORIES ROLL OVER sono.png"); ;
     
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/CATEGORIES sono.png"); ;
    });
    
    $(".casesHover")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/CATEGORIES ROLL OVER cases.png"); ;
     
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/CATEGORIES cases.png"); ;
    });
    $(".cableHover")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/CATEGORIES ROLL OVER access.png"); ;
     
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/CATEGORIES cable.png"); ;
    });
    $(".saxoHover")
    .mouseover(function() {
      $(this).attr( "src","images/BODY/CATEGORIES ROLL OVER saxo.png"); ;
     
    })
    .mouseout(function() {

      $(this).attr("src","images/BODY/CATEGORIES saxo.png"); ;
    });