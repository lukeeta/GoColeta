const login = {
    realizaLogin: function(){
        
        document.getElementById("formLogin").addEventListener("submit",(e)=>{
            e.preventDefault();

            let dataInserted = {
                "email": document.getElementsByName("email")[0].value
            }

            let dataInner = JSON.parse(localStorage.getItem("dataSubmited"));

            if(dataInserted.email === dataInner.email){
                window.location.pathname = `painel.php`;
            }            

        })

    },
    init: function(){
        login.realizaLogin();
    }
}

login.init();
