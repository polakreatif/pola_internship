// (function($) {
//     "use strict"; // Start of use strict
  
//     // Smooth scrolling using jQuery easing
//     $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
//       if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//         var target = $(this.hash);
//         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//         if (target.length) {
//           $('html, body').animate({
//             scrollTop: target.offset().top
//           }, 1000, "easeInOutExpo");
//           return false;
//         }
//       }
//     });
  
//     // Scroll to top button appear
//     $(document).scroll(function() {
//       var scrollDistance = $(this).scrollTop();
//       if (scrollDistance > 100) {
//         $('.scroll-to-top').fadeIn();
//       } else {
//         $('.scroll-to-top').fadeOut();
//       }
//     });

//     var navMenuDiv = document.getElementById("nav-content");
// 	  var navMenu = document.getElementById("nav-toggle");
	
// 	document.onclick = check;
// 	function check(e){
// 	  var target = (e && e.target) || (event && event.srcElement);
	  
// 	  //Nav Menu
// 	  if (!checkParent(target, navMenuDiv)) {
// 		// click NOT on the menu
// 		if (checkParent(target, navMenu)) {
// 		  // click on the link
// 		  if (navMenuDiv.classList.contains("hidden")) {
// 			navMenuDiv.classList.remove("hidden");
// 		  } else {navMenuDiv.classList.add("hidden");}
// 		} else {
// 		  // click both outside link and outside menu, hide menu
// 		  navMenuDiv.classList.add("hidden");
// 		}
// 	  }
	  
// 	}
// 	function checkParent(t, elm) {
// 	  while(t.parentNode) {
// 		if( t == elm ) {return true;}
// 		t = t.parentNode;
// 	  }
// 	  return false;
// 	}
  
//   })(jQuery); // End of use strict

  var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;
	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }
	  
	}
	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
  }
  

  var scrollpos = window.scrollY;
	var header = document.getElementById("header");
	var navcontent = document.getElementById("nav-content");
	var navaction = document.getElementById("navAction");
	var brandname = document.getElementById("brandname");
	var toToggle = document.querySelectorAll(".toggleColour");

	document.addEventListener('scroll', function() {

	/*Apply classes for slide in bar*/
	scrollpos = window.scrollY;

    if(scrollpos > 10){
      header.classList.add("bg-white");
	  navaction.classList.remove("bg-white");
	  navaction.classList.add("gradient");
	  navaction.classList.remove("text-gray-800");
	  navaction.classList.add("text-white");
	  //Use to switch toggleColour colours
  	  for (var i = 0; i < toToggle.length; i++) {
	     toToggle[i].classList.add("text-gray-800");
		 toToggle[i].classList.remove("text-white");
	  }
	  header.classList.add("shadow");
	  navcontent.classList.remove("bg-gray-100");
	  navcontent.classList.add("bg-white");
    }
    else {
	  header.classList.remove("bg-white");
	  navaction.classList.remove("gradient");
	  navaction.classList.add("bg-white");
	  navaction.classList.remove("text-white");
	  navaction.classList.add("text-gray-800");
	  //Use to switch toggleColour colours
  	  for (var i = 0; i < toToggle.length; i++) {
	     toToggle[i].classList.add("text-white");
		 toToggle[i].classList.remove("text-gray-800");
	  }
	  
	  header.classList.remove("shadow");
	  navcontent.classList.remove("bg-white");
	  navcontent.classList.add("bg-gray-100");
	  
    }

	});