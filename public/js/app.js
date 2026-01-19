/*jshint esversion: 6 */

// TODO: Temporal solution
// Go to top every refresh
if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
} else {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    };
}

//TODO: Change this function
window.onload = function(){
    document.getElementById("sendButton").disabled = true;
};
jQuery('#agree').click(function() {
    var mail = $('#email').val();
    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    if (jQuery(this).is(":checked")) {
        if(!pattern.test(mail)){
            $('#agree').prop('checked', false);
            alert('not a valid e-mail address');
        } else {
            jQuery("#sendButton").removeAttr("disabled");
        }
    } else {
        jQuery("#sendButton").attr("disabled", "disabled");
    }
});

// reCaptcha
$(document).ready(function(){
    $('#sendButton').click(function(){
      grecaptcha.ready(function() {
        grecaptcha.execute('6Leqv54eAAAAAILZ1E6PQjFmCBSJ1pjLQfxq3FJ_', {action: 'validarUsuario'}).then(function(token) {
            $('#contact-form').prepend('<input type="hidden" name="token" value="'+token+'" >');
            $('#contact-form').prepend('<input type="hidden" name="action" value="validarUsuario" >');
            $('#contact-form').submit();
        });
      });
    });
});

function confirmModal(text){
    $('#modalConfirmTextValue').text(text);
    $('#modalConfirm').modal('show');
}

// Carousel
$('.carousel').carousel({
    interval: 20000
});

$('.carousel').on('slide.bs.carousel', function (e) {
    // get the index of the slide
    var index = $('.item').index(e.relatedTarget);
    // hide all captions and show the caption with the item's index
    $('.caption').hide().eq(index).show();
});

// AOS
AOS.init({
    duration: 700, // values from 0 to 3000, with step 50ms
    once: true
});
  
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction();};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.background = "None";
        document.getElementById("navbar").style.backgroundColor = "#252E61";
    } else {
        document.getElementById("navbar").style.backgroundColor = "#00000000";
        document.getElementById("navbar").style.background = "linear-gradient(#000000aa, #00000000)";
    }
}

// Cookie policy
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

$('body').on('click', '.btn-close-cookie-notification', function(){
    setCookie('is_cookie_compliance_accepted', true, 3000);
    $(this).parent().fadeOut(300);
});

// Particles
const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
particlesJS("particles-js", {
    "particles": {
    "number": {
        "value": vw/20,
        "density": {
        "enable": false,
        "value_area": 500
        }
    },
    "color": {
        "value": ["#44B9AA", "#ADAEAE", "#252E61"]
    },
    "shape": {
        "type": "circle",
        "stroke": {
        "width": 0,
        "color": "#000000"
        }
    },
    "opacity": {
        "value": 0.4,
        "random": true,
        "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.4,
        "sync": false
        }
    },
    "size": {
        "value": 6,
        "random": true,
        "anim": {
        "enable": false,
        "speed": 4,
        "size_min": 1,
        "sync": false
        }
    },
    "line_linked": {
        "enable": true,
        "distance": 150,
        "color" : "#000",
        // "color": "#58636d",
        "opacity": 0.05,
        "width": 0.75
    },
    "move": {
        "enable": true,
        "speed": 0.2,
        "direction": "top",
        "random": true,
        "straight": false,
        "out_mode": "out",
        "bounce": true,
        "attract": {
        "enable": true,
        "rotateX": 600,
        "rotateY": 1200
        }
    }
    },
    "interactivity": {
    "detect_on": "canvas",
    "events": {
        "onhover": {
        "enable": false,
        "mode": "grab"
        },
        "onclick": {
        "enable": false,
        "mode": "bubble"
        },
        "resize": true
    },
    "modes": {
        "grab": {
        "distance": 200,
        "line_linked": {
            "opacity": 1
        }
        },
        "bubble": {
        "distance": 200,
        "size": 10,
        "duration": 0.2,
        "opacity": 8,
        "speed": 3
        },
        "repulse": {
        "distance": 200,
        "duration": 0.4
        },
        "push": {
        "particles_nb": 4
        },
        "remove": {
        "particles_nb": 2
        }
    }
    },
    "retina_detect": true
});

// Slick-slider
$(document).ready(function() {
    $('.logo-carousel').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
        breakpoint: 1230,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  });