let validaInput = function (event) {
    return (event.charCode >= 48 && event.charCode <= 57) || event.keyCode == 45;
};

const login = document.getElementById("login");
const nome = document.getElementById("nome");
const email = document.getElementById("email");
const cpf = document.getElementById('cpf');
const telefone = document.getElementById('telefone');
const senha = document.getElementById('senha');

const testEmail = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
const btnSubmit = document.getElementById("btnSubmit");
const btnCadastro = document.getElementById("btn-cadastrar");
const input = document.getElementsByTagName("input");
const empresa = document.getElementById('empresa');
const area = document.getElementById('area');
const descricao = document.getElementById('descricao');

let flag = 1;

if(btnSubmit){
    btnSubmit.addEventListener("click", (e)=>{
        if(flag==1){
            e.preventDefault();
        }
    })
}

if(nome){
    nome.addEventListener("blur", ()=>{
        if(nome.value.length < 3){
            nome.style.border = '2px solid #e63636'
            flag = 1;
        }else{
            nome.style.border = '';
            flag = 0;
        }
    });
}

if(email){
    email.addEventListener("blur", ()=>{
        if(!testEmail.test(email.value)){
            email.style.border = '2px solid #e63636'
            flag = 1;
        }else{
            email.style.border = ''
            flag = 0;
        }
    });
}

if(cpf){
    cpf.addEventListener("blur", ()=>{
        if(cpf.value.length !== 11){
            cpf.style.border = '2px solid #e63636';
            flag = 1;
    
        }else{
            cpf.style.border = '';
            flag = 0;
    
        }
    });
}

if(senha){
    senha.addEventListener("blur", ()=>{
        if(senha.value.length < 6){
            senha.style.border = '2px solid #e63636';
            flag = 1;
    
        }else{
            senha.style.border = '';
            flag = 0;
    
        }
    });
}

if(telefone){
    telefone.addEventListener("blur", ()=>{
        if(telefone.value.length !== 11){
            telefone.style.border = '2px solid #e63636';
            flag = 1;
    
        }else{
            telefone.style.border = '';
            flag = 0;
    
        }
    });
}

if(empresa){
    empresa.addEventListener("blur", ()=>{
        if(empresa.value.length < 3){
            empresa.style.border = '2px solid #e63636';
            flag = 1;
        }else{
            empresa.style.border = '';
            flag = 0;
        }
    });
}

if(area){
    area.addEventListener("blur", ()=>{
        if(area.value.length < 2){
            area.style.border = '2px solid #e63636';
            flag = 1;
        }else{
            area.style.border = '';
            flag = 0;
        }
    });
}

if(descricao){
    descricao.addEventListener("blur", ()=>{
        if(descricao.value.length < 3){
            descricao.style.border = '2px solid #e63636';
            flag = 1;
        }else{
            descricao.style.border = '';
            flag = 0;
        }
    });
}

if(btnCadastro){
    btnCadastro.addEventListener("click", (e)=>{
        if(flag==1){
            e.preventDefault();
        }
    })
}

