
$(document).ready(function () {

 
const button = document.querySelector('#button');
const tooltip = document.querySelector('#tooltip');
const body = document.querySelector('header');

let popperInstance = null;

function create() {
  popperInstance = Popper.createPopper(button, tooltip, {
    modifiers: [
      {
        name: 'offset',
        options: {
          offset: [-50,-10],
        },
      },
    ],
  });
}

function destroy() {
  if (popperInstance) {
    popperInstance.destroy();
    popperInstance = null;
  }
}

function show() {
  tooltip.setAttribute('data-show', '');
  create();
}

function hide() {
  tooltip.removeAttribute('data-show');
  destroy();
}

const showEvents = ['mouseenter', 'focus'];
const hideEvents = ['mouseleave', 'blur'];

showEvents.forEach(event => {
  button.addEventListener(event, show);
 
});

hideEvents.forEach(event => {
  body.addEventListener(event, hide);

});
/*
hideEvents.forEach(event => {
  tooltip.addEventListener(event, hide);
 
});

/*
  
 
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
    .mouseover(function () {
      $(this).attr("src", "/images/BODY/TOPVENTESROLLOVERguitare.png");

    })
    .mouseout(function () {

      $(this).attr("src", "/images/BODY/TOP VENTES guitare.png");
    });



  $(".topS")
    .mouseover(function () {
      $(this).attr("src", "images/BODY/TOP VENTES ROLL OVER saxo.png");

    })
    .mouseout(function () {

      $(this).attr("src", "images/BODY/TOP VENTES saxo.png");
    });



  $(".topP")
    .mouseover(function () {
      $(this).attr("src", "images/BODY/TOP VENTES ROLL OVER piano.png");

    })
    .mouseout(function () {

      $(this).attr("src", "images/BODY/TOP VENTES piano.png");
    });

  $(".guitareHover")
    .mouseover(function () {
      $(this).attr("src", " /images/BODY/CATEGORIES ROLL OVER guitare.png");

    })
    .mouseout(function () {

      $(this).attr("src", "/images/BODY/CATEGORIES guitare.png");
    });
  $(".batterieHover")
    .mouseover(function () {
      $(this).attr("src", "/images/BODY/CATEGORIES ROLL OVER batterie.png");

    })
    .mouseout(function () {

      $(this).attr("src", "/images/BODY/CATEGORIES batterie.png");
    });
  $(".pianoHover")
    .mouseover(function () {
      $(this).attr("src", "/images/BODY/CATEGORIES ROLL OVER piano.png");

    })
    .mouseout(function () {

      $(this).attr("src", "/images/BODY/CATEGORIES piano.png");
    });
  $(".microHover")
    .mouseover(function () {
      $(this).attr("src", "/images/BODY/CATEGORIES ROLL OVER micro.png");

    })
    .mouseout(function () {

      $(this).attr("src", "/images/BODY/CATEGORIES micro.png");
    });
  $(".sonoHover")
    .mouseover(function () {
      $(this).attr("src", "/images/BODY/CATEGORIES ROLL OVER sono.png");

    })
    .mouseout(function () {

      $(this).attr("src", "/images/BODY/CATEGORIES sono.png");
    });

  $(".casesHover")
    .mouseover(function () {
      $(this).attr("src", "/images/BODY/CATEGORIES ROLL OVER cases.png");

    })
    .mouseout(function () {

      $(this).attr("src", "/images/BODY/CATEGORIES cases.png");
    });
  $(".cableHover")
    .mouseover(function () {
      $(this).attr("src", "/images/BODY/CATEGORIES ROLL OVER access.png");

    })
    .mouseout(function () {

      $(this).attr("src", "/images/BODY/CATEGORIES cable.png");
    });
  $(".saxoHover")
    .mouseover(function () {
      $(this).attr("src", "/images/BODY/CATEGORIES ROLL OVER saxo.png");

    })
    .mouseout(function () {

      $(this).attr("src", "/images/BODY/CATEGORIES saxo.png");
    });
});

