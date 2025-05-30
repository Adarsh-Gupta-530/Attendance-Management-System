let nav=document.querySelector("nav")
let navWidth=parseInt(window.getComputedStyle(nav).width)
if(navWidth > 750){
    NavNoResponsive()
}

function NavNoResponsive(){
    var tl=gsap.timeline()

    tl.from(".logo",{
        y:-100,
        opacity:0,
        duration:0.25,
        delay:0.25
    })
    tl.from(".nav-part2 li",{
        y:-100,
        opacity:0,
        duration:0.3,
        stagger:0.15
    })
    tl.from(".nav-part2 button",{
        y:-100,
        opacity:0,
        duration:0.25,
        stagger:0.2
    })
    tl.from(".page1 .left h1,.page1 .left p,.page1 .left button",{
        x:-200,
        opacity:0,
        duration:0.3,
        stagger:0.3
    },"animation1")
    tl.from(".page1 .right img",{
        x:200,
        opacity:0,
        duration:0.3
    },2,"animation1")
}
 