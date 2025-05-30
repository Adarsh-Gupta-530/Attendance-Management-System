var menu=document.querySelector("#menu");              //getting access menu btn
var cancle=document.querySelector("#cancle");         //getting access cancle btn

var tl =gsap.timeline({paused:true});
//animation
tl.to(".nav-part2",{
    right:"0",
    duration:0.4
})
tl.from(".nav-part2 h4",{
    x:120,
    duration:0.5,
    opacity:0,
    stagger:0.175
})
tl.from(".nav-part2 i",{
    opacity:0
})

tl.pause();                                         //timeline paused Default

menu.addEventListener("click",()=>{               //when clicked on menu btn
    tl.play();                                   //animation plays
})
cancle.addEventListener("click",()=>{          //when click on cancle btn
    tl.reverse();                             //animation reversed
})