


//   var myIndex_1 = 0;
//       carousel_1();
      
//       function carousel_1() {
//         var i;
//         var x = document.getElementsByClassName("mySlides_1");
//         for (i = 0; i < x.length; i++) {
//           x[i].style.display = "none";  
//         }
//         myIndex_1++;
//         if (myIndex_1 > x.length) {myIndex_1 = 1}    
//         x[myIndex_1-1].style.display = "block";  
//         setTimeout(carousel_1, 4000);    
//       }
//       var myIndex_2 = 0;
//       carousel_2();
      
//       function carousel_2() {
//         var i;
//         var y = document.getElementsByClassName("mySlides_2");
//         for (i = 0; i < y.length; i++) {
//           y[i].style.display = "none";  
//         }
//         myIndex_2++;
//         if (myIndex_2 > y.length) {myIndex_2 = 1}    
//         y[myIndex_2-1].style.display = "block";  
//         setTimeout(carousel_2, 9000);    
//       }

//       var myIndex_3 = 0;
//       carousel_3();
      
//       function carousel_3() {
//         var i;
//         var z = document.getElementsByClassName("mySlides_3");
//         for (i = 0; i < z.length; i++) {
//           z[i].style.display = "none";  
//         }
//         myIndex_3++;
//         if (myIndex_3 > z.length) {myIndex_3 = 1}    
//         z[myIndex_3-1].style.display = "block";  
//         setTimeout(carousel_3, 3000);    
//       }

//       var myIndex_4 = 0;
//       carousel_4();
      
//       function carousel_4() {
//         var i;
//         var x = document.getElementsByClassName("mySlides_4");
//         for (i = 0; i < x.length; i++) {
//           x[i].style.display = "none";  
//         }
//         myIndex_4++;
//         if (myIndex_4 > x.length) {myIndex_4 = 1}    
//         x[myIndex_4-1].style.display = "block";  
//         setTimeout(carousel_4, 3000);    
//       }
//       var myIndex_5 = 0;
//       carousel_5();
      
//       function carousel_5() {
//         var i;
//         var x = document.getElementsByClassName("mySlides_5");
//         for (i = 0; i < x.length; i++) {
//           x[i].style.display = "none";  
//         }
//         myIndex_5++;
//         if (myIndex_5 > x.length) {myIndex_5 = 1}    
//         x[myIndex_5-1].style.display = "block";  
//         setTimeout(carousel_5, 3000);    
//       }

//       var myIndex_6 = 0;
//       carousel_6();
      
//       function carousel_6() {
//         var i;
//         var x = document.getElementsByClassName("mySlides_6");
//         for (i = 0; i < x.length; i++) {
//           x[i].style.display = "none";  
//         }
//         myIndex_6++;
//         if (myIndex_6 > x.length) {myIndex_6= 1}    
//         x[myIndex_6-1].style.display = "block";  
//         setTimeout(carousel_6, 3000);    
//       }


//       var textWrapper = document.querySelector('.ml9 .letters');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letters'>$&</span>");

// anime.timeline({loop: true})
//   .add({
//     targets: '.ml9 .letters',
//     scale: [0, 1],
//     duration: 1500,
//     elasticity: 600,
//     delay: (el, i) => 45 * (i+1)
//   }).add({
//     targets: '.ml9',
//     opacity: 0,
//     duration: 1000,
//     easing: "easeOutExpo",
//     delay: 1000
//   });


var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 1500;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};



// function rotate(obj) {
//   obj.style.transform="rotateY(-180deg)";
//   obj.firstElementChild.style.zIndex='1';
//   obj.lastElementChild.style.zIndex='2';

// }
// function toBack(obj) {
//   obj.style.transform="rotateY(0deg)";
//   obj.firstElementChild.style.zIndex='2';
//   obj.lastElementChild.style.zIndex='1';

// }
// $(function() {
// 	// Time wasted here: 3 hours

// 	// For card rotation
// 	$(".btn-rotate").click(function() {
// 		// Long explanation: The button that is clicked, will have its grand parent add a class to its child. The main reason I couldn't use .parent() was that it gets the closest positioned parent, either relative or absolute. The problem was that the card-front got the .rotate-container as its parent, but the card-back was being the closest positioned element as the parent of the button. In order to circumvent this I either needed to use 3 offsetparent() and have really messy code, or just use the .closest() which as its name suggests gets the closest named or unnamed element. So in the end, I get the grand parent of the button which is the .rotate container and I find its children which are the .card-front and .card-back and toggle the rotation classes on them. Also if I didn't specify which button's ancestor would assign the class, whenever any btn-rotate button is clicked, all three cards would rotate at once which makes for a funny yet unhelpful design.
// 		var $parent = $(this).closest(".rotate-container");

// 		// Probably easier to use an id, but I made it work
// 		$parent.children(".card-front").toggleClass(" rotate-card-front");
// 		$parent.children(".card-back").toggleClass(" rotate-card-back");
// 	});
// });
$(window).scroll(function(evt){
  if($(window).scrollTop()>0){
    $(".navbar").removeClass("navbar-top");
  }else{
    $(".navbar").addClass("navbar-top");
  }
});
var s = skrollr.init();