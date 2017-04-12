$(document).ready(function () {
    
    $('#data_nascimento').mask('00/00/0000');
    $('#cep').mask('00000-000');
    $('#cpf').mask('000.000.000-00', {reverse: true});
    
    $("#formCliente").validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            cpf: {
                required:true,
                cpf: "cpf"
            },
            data_nascimento: {
                required:true
            },
            cep:{
                required:true,
                minlength:8
            },
            endereco:{
                required:true
            },
            bairro:{
                required:true
            },
            cidade:{
                required:true
            },
            estado:{
                required:true
            }
            
        },
        messages: {
            nome: {
                required: "Por favor, informe seu nome",
                minlength: "O nome deve ter pelo menos 3 caracteres"
            },
            cpf: {
                required:"Por favor, informe seu CPF",
                cpf: "CPF inválido"
            },
            data_nascimento: {
                required:"Por favor, informe sua data de nascimento"
            },
            cep:{
                required:"Por favor, informe seu cep",
                minlength:"Cep inválido"
            },
            endereco:{
                required:"Por favor, informe seu endereço"
            },
            bairro:{
                required:"Por favor, informe seu bairro"
            },
            cidade:{
                required:"Por favor, informe sua cidade"
            },
            estado:{
                required:"Por favor, informe seu estado"
            }
        }
    });
});
