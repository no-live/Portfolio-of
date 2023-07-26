console.log("script background.js is running...");
// Margin auto sur Aside en écran mobile
const asidecenter = document.getElementById("sideleft") 
var x = window.matchMedia("(min-width: 760px)");
function asidesmall(x) {
    if (x.matches) {
        asidecenter.classList.remove('mauto');
    } else {
        asidecenter.classList.add('mauto');
}
}
asidesmall(x)
x.addEventListener('change', asidesmall)