$(function() {
    $(".banner-list-content").owlCarousel({
    items: 1,
   
   
    dots: true,
    
});

$(".sale-co").owlCarousel({
    items: 3,
    responsive: {
        1200: {
            item: 1,
        }, // breakpoint from 1200 up
        982: {
            items: 1,
        },
        768: {
            items: 1,
        },
        480: {
            items: 1,
           
           
        },
        0: {
            items: 1,
        }
    },
  
   
});
$(".main5-co").owlCarousel({
    items: 3,
    responsive: {
        1200: {
            item: 1,
        }, // breakpoint from 1200 up
        982: {
            items: 1,
        },
        768: {
            items: 1,
        },
        480: {
            items: 1,
           
           
        },
        0: {
            items: 1,
        }
    },
  
   
});
$(".main3_re-content").owlCarousel({
    items: 1,
  
   
});
$(".band-list-co").owlCarousel({
    items: 6,
    dots: false,
    loop: false,
    nav: true,
    navText: ["<img src='img/left.png'>", "<img src='img/right.png'>"],
    responsive: {
        1200: {
            item: 4,
        }, // breakpoint from 1200 up
        982: {
            items: 2,
        },
        768: {
            items: 1,
        },
        480: {
            items: 1,
           
           
        },
        0: {
            items: 1,
        }
    },
   
});
 })


function myFunction() {
   var element = document.body;
   
   element.classList.toggle("dark-mode"); 

  
 
   document.getElementById("main2-1").classList.toggle("dark-mode");
   document.getElementById("main2-2").classList.toggle("dark-mode");
   document.getElementById("main2-3").classList.toggle("dark-mode");
   document.getElementById("main2-4").classList.toggle("dark-mode");
   document.getElementById("main2-5").classList.toggle("dark-mode");
  
   
 

}
function seemore(){
  document.getElementById("content_sp").classList.toggle("seemore");
  document.getElementById("view-more-area").classList.toggle("none");
  document.getElementById("notsee").classList.toggle("haven");
  
}

function src(){

}

