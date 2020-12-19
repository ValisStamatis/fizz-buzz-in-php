/* MENU SHOW */ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}

showMenu('nav-toggle','nav-menu')


// IMG
gsap.from('#cat_container', {opacity: 0, duration: 2, delay: 2, x: 60})
gsap.from('#button-cat', {opacity: 0, duration: 3, delay: 2.3, y: 25, ease:'expo.out', stagger: .3})
gsap.from('.last-container', {opacity: 0, duration: 2, delay: 2, x: 60})
gsap.from('.disc-container', {opacity: 0, duration: 2, delay: 2, x: 60})

