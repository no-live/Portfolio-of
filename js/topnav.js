console.log("script topnav.js is running...");

const actionButton = document.querySelector('.main-header__button');
const menu = document.querySelector('.menu')
//console.log("Contenu de la variable actionButton: ",actionButton); /*equivalent à vardump en php*/
//console.log("Contenu de la variable menu: ", menu );

actionButton.addEventListener("click", function(event){
    //console.log(event);

    menu.classList.toggle('open'); /*switch une classe "open" sur le bouton*/
    menu.classList.toggle('mw');
    menu.classList.toggle('d-flex');
    menu.classList.toggle('mx');
    

    //console.log("Contenu de la var menu: ",menu);
})


var x = window.matchMedia("(min-width: 894px)");

function navbtn1(x) {
    if (x.matches) {
        menu.classList.remove('open');
        menu.classList.remove('mw');
        menu.classList.remove('mx');
        menu.classList.add('d-flex');
        
        
    } else {
        menu.classList.add('mw');
        menu.classList.remove('d-flex');
}
}
navbtn1(x)  //Lance la fonction
x.addEventListener('change', navbtn1) //Reste à l'écoute d'un changement de x (min-width = 760px)

const asidecenter = document.getElementById("sideleft");
const slideoff = document.getElementById("slidesquare"); 
const smallmarge = document.getElementById("msm"); 
const smallmarge2 = document.getElementById("msm2"); 
const mainbg = document.getElementById("bgeffect"); 
const splashmod = document.getElementById("splash") 
var x = window.matchMedia("(min-width: 894px)");
function asidesmall(x) {
    if (x.matches) {
        asidecenter.classList.remove('mauto');
        slideoff.classList.remove('hidden');
        smallmarge.classList.add('my-4');
        smallmarge2.classList.add('my-4');
        splashmod.classList.remove('smallsc');
        splashmod.classList.add('fullsc');
        mainbg.classList.add('bdeffect--1080');
        mainbg.classList.add('bdeffecttop');
        mainbg.classList.remove('bdeffect--320');
    } else {
        asidecenter.classList.add('mauto');
        slideoff.classList.add('hidden');
        smallmarge.classList.remove('my-4');
        smallmarge2.classList.remove('my-4');
        splashmod.classList.add('smallsc');
        splashmod.classList.remove('fullsc');
        mainbg.classList.add('bdeffect--320');
        mainbg.classList.remove('bdeffect--1080');
        mainbg.classList.remove('bdeffecttop');
    }
}
asidesmall(x)
x.addEventListener('change', asidesmall)



// const smallctbtn = document.getElementById("contact-header"); 
// smallctbtn.classList.add('pright');
// smallctbtn.classList.remove('pright');


// const actionButton2 = document.querySelector('.bttn');
// const move = document.querySelector('.main-header__logo-img');
// const move1 = document.querySelector('.backgroundlog');
// actionButton2.addEventListener("click", function(event){
// move.classList.toggle('anima');
// move1.classList.toggle('backgroundlog--imgin');
    // move1.classList.toggle('backgroundlog--imgout');
    // console.log("Contenu de la var menu: ",move);
// })