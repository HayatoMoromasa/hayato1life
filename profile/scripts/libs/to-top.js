
document.addEventListener("DOMContentLoaded", function(){
    function getScrolled(){
        return(window.pageYOffset !== undefined ) ? window.pageYOffset: document.documentElement.scrollTop;
    }
    
    const topButton = document.getElementById('to-top');
    const topButtonSp = document.getElementById('to-top-sp');
    
    window.onscroll = function(){
        (getScrolled() > 500) ? topButtonSp.classList.add('is-fade-in') : topButtonSp.classList.remove('is-fade-in');
    };
    
    function scrollToTop(){
        const scrolled = getScrolled();
        window.scrollTo( 0, Math.floor( scrolled / 2 ));
        if(scrolled > 0){
            window.setTimeout( scrollToTop, 60 );
        }
    };
    
    topButton.onclick = function(){
        scrollToTop();
    };
    topButtonSp.onclick = function(){
        scrollToTop();
    };
}, false);



// document.addEventListener("DOMContentLoaded", function(){
//     scrollTop('to-top', 500);
//     function scrollTop(e,duration){
//         let target = document.getElementById(e);
//         target.addEventListener('click',function(){
//             let currentY = window.pageYOffset;
//             let step = duration/currentY > 1 ? 10 : 100;
//             let timeStep = duration/currentY * step;
//             let intervalID = setInterval(scrollUp, timeStep);
    
//             function scrollUp(){
//                 currentY = window.pageYOffset;
//                 if(currentY === 0){
//                     clearInterval(intervalID);
//                 }else{
//                     scrollBy(0, -step);
//                 }
//             }
//         });
//     }
// }, false);


