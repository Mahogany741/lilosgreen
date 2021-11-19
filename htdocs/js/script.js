
var listamenu = document.getElementById("listamenu")

var items = listamenu.getElementsByClassName("cantoe")

for (var i = 0; i < items.length; i++) {

    items[i].addEventListener("click", function() {

        var active = document.getElementsByClassName("active")

        active[0].className = active[0].className.replace(" active", "");

        this.className += " active";

    })
}

// Função Responsável por fazer e desfazer determinada ação. 


function toggle() {

    var evento = arguments;
    var contador = -1;
    return function() {
        contador = (contador + 1) % evento.length;
        evento[contador].apply(this,arguments);

    }
}

var botaomenu = document.querySelector(".botaomenu")

var leftcont = document.querySelector(".leftcont")

var lista = document.querySelector(".lista")

botaomenu.onclick = toggle(
    function() {
        leftcont.style.height = "255px";
        lista.style.display = "flex"; 
    }, 
    function() {
        leftcont.style.height = "40px";
        lista.style.display = "none";
        
    }
)

// var itemsmenu = document.querySelectorAll("a .cantoe")    

// itemsmenu.addEventListener("click", function() {

//     lista.style.display = "none";
//     leftcont.style.height = "40px";


// })

if (window.screen.width < 600 ) {

    leftcont.onclick = toggle(
        function() {
            leftcont.style.height = "255px";
            lista.style.display = "flex"; 
        }, 
        function() {
            leftcont.style.height = "40px";
            lista.style.display = "none";
            
        }
    )

}