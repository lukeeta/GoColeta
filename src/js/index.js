const GoColeta = {
    manipulacao:{
        copyright: function(){
            let data = new Date();
            document.getElementById('copyright').innerText = "GoColeta - "+data.getFullYear()
        }
    },
    estados:{
        menu: function(){
            let url = (window.location.pathname).replace("/","").replace(".html","");
            let menuItens = document.querySelectorAll(".menuPrincipal ul li a")
            for(const item of menuItens){
                const itemLink = (item.getAttribute("href")).replace("/","").replace(".html","");
                if(itemLink == url){
                    item.classList.add("actual");
                    break;
                }
            }
        }
    }
}

window.onload = ()=>{
    GoColeta.manipulacao.copyright();
    GoColeta.estados.menu();
}