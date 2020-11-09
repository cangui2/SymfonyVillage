
$(document).ready(function () {

 
const button = document.querySelector('#button');
const tooltip = document.querySelector('#tooltip');
const button2 = document.querySelector('#button2');
const tooltip2 = document.querySelector('#tooltip2');
const button3 = document.querySelector('#button3');
const tooltip3 = document.querySelector('#tooltip3');
const body = document.querySelector('header');
const nav=document.querySelector('.item');
const nav2=document.querySelector('.batterie');
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
function create2(){
  popperInstance = Popper.createPopper(button2, tooltip2, {
    modifiers: [
      {
        name: 'offset2',
        options: {
          offset: [-50,-10],
        },
      },
    ],
  });
}
  function create3(){
    popperInstance = Popper.createPopper(button3, tooltip3, {
      modifiers: [
        {
          name: 'offset3',
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
function destroy2() {
  if (popperInstance) {
    popperInstance.destroy();
    popperInstance = null;
  }
}
function destroy3() {
  if (popperInstance) {
    popperInstance.destroy();
    popperInstance = null;
  }
}
function show() {
  tooltip.setAttribute('data-show', '');
  create();
}
function show2(){
  tooltip2.setAttribute('data-show2', '');
  create2();

}
function show3(){
  tooltip3.setAttribute('data-show3', '');
  create3();

}

function hide() {
  tooltip.removeAttribute('data-show');
  destroy();
  
}
function hide2(){
  tooltip2.removeAttribute('data-show2');
  destroy2();
}
function hide3(){
  tooltip3.removeAttribute('data-show3');
  destroy3();
}

const showEvents = ['mouseenter', 'focus'];
const hideEvents = ['mouseleave', 'blur'];

showEvents.forEach(event => {
  button.addEventListener(event, show);
  button2.addEventListener(event, show2);
  button3.addEventListener(event, show3);
});

hideEvents.forEach(event => {
  body.addEventListener(event, hide);
  nav.addEventListener(event, hide2);
  nav2.addEventListener(event, hide3);
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

