import $ from 'jquery';

$(document).on(function(){
  
    $( ".guitare")
    .mouseover(function() {
      $( ".guitare .drop" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".guitare .drop" ).hide("slow"); ;
    });
  });

  $(document).ready(function(){
 
    $( ".batterie")
    .mouseover(function() {
      $( ".batterie .drop" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".batterie .drop" ).hide("slow"); ;
    });
  });

  $(document).ready(function(){
 
    $( ".clavier")
    .mouseover(function() {
      $( ".clavier .drop" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".clavier .drop" ).hide("slow"); ;
    });

  });
  $(document).ready(function(){
 
    $( ".trompette")
    .mouseover(function() {
      $( ".trompette .drop" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".trompette .drop" ).hide("slow"); ;
    });

  });

  
  $(document).ready(function(){
 
    $( ".studio,.nav4")
    .mouseover(function() {
      $( ".drop4" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".drop4" ).hide("slow"); ;
    });

  });

  
  $(document).ready(function(){
 
    $( ".sono,.nav5")
    .mouseover(function() {
      $( ".drop5" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".drop5" ).hide("slow"); ;
    });

  });

  
  $(document).ready(function(){
 
    $( ".eclairage,.nav6")
    .mouseover(function() {
      $( ".drop6" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".drop6" ).hide("slow"); ;
    });

  });

  
  $(document).ready(function(){
 
    $( ".dj,.nav7")
    .mouseover(function() {
      $( ".drop7" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".drop7" ).hide("slow"); ;
    });

  });

  
  $(document).ready(function(){
 
    $( ".cases,.nav8")
    .mouseover(function() {
      $( ".drop8" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".drop8" ).hide("slow"); ;
    });

  });

  
  $(document).ready(function(){
 
    $( ".acessoire,.nav9")
    .mouseover(function() {
      $( ".drop9" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".drop9" ).hide("slow"); ;
    });

  });
  $(document).ready(function(){
 
    $( ".espaceClient,.nav10")
    .mouseover(function() {
      $( ".drop10" ).show( "slow" ); ;
    })
    .mouseout(function() {
      $( ".drop10" ).hide("slow"); ;
    });

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
