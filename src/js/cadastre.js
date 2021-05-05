const Cadastro = {

    // Adiciona uma mascara de resposta aos inputs
    mascararInput: function(){
        $('#tell').mask('(00) 00000-0000')
        $('#cep').mask('00000-000')
    },

    // Modifica o input data, para mostrar apenas de hoje para frente
    modificarData: function(){
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('dataRetirada').setAttribute('min', today)
    },

    // Busca nome da rua a partir do CEP
    buscaCEP: function(){
    
        const cepInput = document.getElementById('cep');

        cepInput.addEventListener('blur',()=>{
            let cepInputValue = (cepInput.value).replace('-','')
            // Valida se está dentro da região de Pirituba
            
            if(cepInputValue)

            // Puxa informação sobre o CEP da API
            fetch(`https://viacep.com.br/ws/${cepInputValue}/json/`)
                .then(response => response.json())
                .then(data => Cadastro.completaEndereco(data));
        })

    },

    // Completa o campo de endereço com a informação do CEP
    completaEndereco:function(local){

        const addressInput = document.getElementById('address');
        const addressNumberInput = document.getElementById('addressNumber');
        const addressFull = document.getElementById('addressFull');

        if(local.logradouro == undefined){
            addressInput.setAttribute('disabled','disabled')
            addressInput.value = "";
            addressNumberInput.setAttribute('disabled','disabled')
            addressNumberInput.value = "";
            addressFull.innerHTML = "";
            return alert('CEP Inválido')
        }

        addressInput.removeAttribute('disabled')
        addressNumberInput.removeAttribute('disabled')

        addressInput.value = local.logradouro;
        addressFull.innerHTML = `${local.bairro} - ${local.localidade}`;
    },

    // Valida os inputs do Form
    validaForm: function(){
        
        const requiredInputs = document.querySelectorAll('[required]')

        let arrayValidate = [];

        for(const input of requiredInputs){
            input.addEventListener("invalid",e =>{
                arrayValidate.push(input)
            })
        }

        
        
        // Pega o evento de enviar o formulário
        document.getElementById("formCadastro").addEventListener("submit", e => {
                e.preventDefault();

                let dataForm = {
                    "name":document.getElementsByName("name")[0].value,
                    "email":document.getElementsByName("email")[0].value,
                    "cell":document.getElementsByName("cell")[0].value,
                    "cep":document.getElementsByName("cep")[0].value,
                    "address":document.getElementsByName("address")[0].value,
                    "complement":document.getElementsByName("complement")[0].value,
                    "reference":document.getElementsByName("reference")[0].value,
                    "firstdate":document.getElementsByName("date")[0].value,
                    "firstdatehour":document.getElementsByName("hour")[0].value
                };

                localStorage.setItem("dataSubmited",JSON.stringify(dataForm));

                alert("Cadastrado com sucesso");
                window.location.pathname = "login.php";

        })
    },

    // Inicia Funções
    init: function(){
        Cadastro.mascararInput();
        Cadastro.modificarData();
        Cadastro.buscaCEP();
        Cadastro.validaForm();
    }
}

// Inicia aplicação
Cadastro.init();
