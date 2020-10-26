
function validar()
{
    let valorNome=document.forms['form-product']['name'].value;
    let valorPreco=document.forms['form-product']['price'].value;
    let valorDescricao=document.forms['form-product']['description'].value;
    let valorcategoria=document.forms['form-product']['category_id'].value;
    let valorImage=document.forms['form-product']['image'].value;
    let msg_erro='';
    let avancar=true;
    
    if(valorNome =='')
    {
        let clas='';
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('erro1').innerHTML= msg_erro;
        document.getElementById('name').className=  document.getElementById('name').className+' is-invalid';
        avancar=false;
    }
    else
    {
        if(valorNome.length<=3)
        {
            msg_erro='Nome muito pequeno!';
            modalerro(msg_erro);
            document.getElementById('name').className=  document.getElementById('name').className+' is-invalid';
            document.getElementById('erro1').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorPreco== '')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('price').className=  document.getElementById('price').className+' is-invalid';
        document.getElementById('erro2').innerHTML= msg_erro;
        avancar=false;
    }
    if(valorDescricao== '' )
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('description').className=  document.getElementById('description').className+' is-invalid';
        document.getElementById('erro3').innerHTML= msg_erro;
        avancar=false;
    }
    if(valorcategoria== '')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('category_id').className=  document.getElementById('category_id').className+' is-invalid';
        document.getElementById('erro4').innerHTML= msg_erro;
        avancar=false;
    }
    if( valorImage== '')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('image').className=  document.getElementById('image').className+' is-invalid';
        document.getElementById('erro5').innerHTML= msg_erro;
        avancar=false;
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;
}
function validarEditpro()
{
    let valorNome=document.forms['form-product']['name'].value;
    let valorPreco=document.forms['form-product']['price'].value;
    let valorDescricao=document.forms['form-product']['description'].value;
    let valorcategoria=document.forms['form-product']['category_id'].value;

    let msg_erro='';
    let avancar=true;
    
    if(valorNome =='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('name').className= document.getElementById('name').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
    else
    {
        if(valorNome.length<=3)
        {
            msg_erro='Nome muito pequeno!';
            modalerro(msg_erro);
            document.getElementById('name').className=  document.getElementById('name').className+' is-invalid';
            document.getElementById('erro1').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorPreco== '')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('price').className=  document.getElementById('price').className+' is-invalid';
        document.getElementById('erro2').innerHTML= msg_erro;
        avancar=false;
    }
    // else
    // {
    //     if(valorPreco.indexOf(',')!== -1)
    //     {
    //         msg_erro='As casas decimais devem ser separadas por ponto!';
    //         modalerro(msg_erro);
    //         document.getElementById('price').className=  document.getElementById('price').className+' is-invalid';
    //         document.getElementById('erro2').innerHTML= msg_erro;
    //         avancar=false;
    //     }
    // }
    if(valorDescricao== '' )
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('description').className=  document.getElementById('description').className+' is-invalid';
        document.getElementById('erro3').innerHTML= msg_erro;
        avancar=false;
    }
    if(valorcategoria== '')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('category_id').className=  document.getElementById('category_id').className+' is-invalid';
        document.getElementById('erro4').innerHTML= msg_erro;
        avancar=false;
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;
}
// let y=512; console.log(y % i === 0,y % i);
// let ced100=0; let ced50=0; let ced25=0; let ced10=0; let ced5=0; let ced2=0;let ced1=0;
// for (let i = 0; y!=0; i++) {
//     if(y >= 100 )
//     {
//         ced100=y/100;
//         ced100=parseInt(ced100);
//         y=y-ced100*100;
//     }
//     if(y>=50)
//     {
//         ced50=y/50;
//         ced50=parseInt(ced50);
//         y=y-ced50*50;
//     }
//     if(y>=25)
//     {
//         ced25=y/25;
//         ced25=parseInt(ced25);
//         y=y-ced25*25;
//     }
//     if(y>=10)
//     {
//         ced10=y/10;
//         ced10=parseInt(ced10);
//         y=y-ced10*10;
//     }
//     if(y>=5)
//     {
//         ced5=y/5;
//         ced5=parseInt(ced5);
//         y=y-ced5*5;
//     }
//     if(y>=2)
//     {
//         ced2=y/2;
//         ced2=parseInt(ced2);
//         y=y-ced2*2;
//     }
//     if(y>=1)
//     {
//         ced1=y/1;
//         ced1=parseInt(ced1);
//         y=y-ced1*1;
//     }
//     console.log('Foi descomposto em');
//     console.log(ced100, 'notas de 100');
//     console.log(ced50, 'notas de 50');
//     console.log(ced25, 'notas de 25');
//     console.log(ced10, 'notas de 10');
//     console.log(ced5, 'notas de 5');
//     console.log(ced2, 'notas de 2');
//     console.log(ced1, 'notas de 1');

// }
function validarCategoria()
{
    let valorcategory=document.forms['form-categoria']['category'].value;
    let msg_erro='';
    let avancar=true;
     if(valorcategory=='')
     {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('category').className=  document.getElementById('category').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
     }
     else
     {
        if(valorcategory.length<=3)
        {
            msg_erro='Nome muito pequeno!';
            modalerro(msg_erro);
            document.getElementById('category').className=  document.getElementById('category').className+' is-invalid';
            document.getElementById('erro1').innerHTML= msg_erro;
            avancar=false;
        } 
     }
     if(avancar==false)
     {
         document.getElementById('salvar').hidden=false;
     }
  return avancar;
}

function validarEstoque()
{
    let valorstory=document.forms['form-estoque']['story'].value;
    
    let msg_erro='';
    let avancar=true;
    
    if(valorstory =='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('story').className=  document.getElementById('story').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
    else
    {
        if(valorstory.length<=3)
        {
            msg_erro='Nome muito pequeno!';
            modalerro(msg_erro);
            document.getElementById('story').className=  document.getElementById('story').className+' is-invalid';
            document.getElementById('erro1').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;
}

function validarUsuario()
{
    let valorNomeuser=document.forms['form-usuario']['name'].value;
    let valorEmail=document.forms['form-usuario']['email'].value;
    let valorSenha=document.forms['form-usuario']['password'].value;
    let valorConfirmSenha=document.forms['form-usuario']['Confirmpassword'].value;
    console.log(valorEmail.indexOf('@'));
    let msg_erro='';
    let avancar=true;

    if(valorNomeuser=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('name').className=  document.getElementById('name').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
    else
    {
        if(valorNomeuser.length<=3)
        {
            msg_erro='Nome muito pequeno!';
            modalerro(msg_erro);
            document.getElementById('name').className=  document.getElementById('name').className+' is-invalid';
            document.getElementById('erro1').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorEmail=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('email').className=  document.getElementById('email').className+' is-invalid';
        document.getElementById('erro2').innerHTML= msg_erro;
        avancar=false;
    }
    else
    {
        if(valorEmail.indexOf('@')== -1 ||valorEmail.length<=8)
        {
            msg_erro='Email invalido!';
            modalerro(msg_erro);
            document.getElementById('email').className=  document.getElementById('email').className+' is-invalid';
            document.getElementById('erro2').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorSenha=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('password').className=  document.getElementById('password').className+' is-invalid';
        document.getElementById('erro3').innerHTML= msg_erro;
        avancar=false;
    }
    else
    {
        if(valorSenha.length<=5)
        {
            msg_erro='Senha muito fraca!';
            modalerro(msg_erro);
            document.getElementById('password').className=  document.getElementById('password').className+' is-invalid';
            document.getElementById('erro3').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorConfirmSenha=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('Confirmpassword').className=  document.getElementById('Confirmpassword').className+' is-invalid';
        document.getElementById('erro4').innerHTML= msg_erro;
        avancar=false;
    }
    else
    {
        if(valorConfirmSenha.length<=5)
        {
            msg_erro='Senha muito fraca!';
            modalerro(msg_erro);
            document.getElementById('Confirmpassword').className=  document.getElementById('Confirmpassword').className+' is-invalid';
            document.getElementById('erro4').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorSenha!= valorConfirmSenha)
    {
        msg_erro='As senhas não conferem!';
        modalerro(msg_erro);
        document.getElementById('Confirmpassword').className=  document.getElementById('Confirmpassword').className+' is-invalid';
        document.getElementById('erro4').innerHTML= msg_erro;
        avancar=false;
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;
}
function validarUsuarioUpdate()
{
    let valorNomeuser=document.forms['form-usuario']['name'].value;
    let valorEmail=document.forms['form-usuario']['email'].value;
    let valorSenha=document.forms['form-usuario']['password'].value;
    let valorConfirmSenha=document.forms['form-usuario']['Confirmpassword'].value;
    console.log(valorEmail.indexOf('@'));
    let msg_erro='';
    let avancar=true;

    if(valorNomeuser=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('name').className=  document.getElementById('name').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
    else
    {
        if(valorNomeuser.length<=3)
        {
            msg_erro='Nome muito pequeno!';
            modalerro(msg_erro);
            document.getElementById('name').className=  document.getElementById('name').className+' is-invalid';
            document.getElementById('erro1').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorEmail=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('email').className=  document.getElementById('email').className+' is-invalid';
        document.getElementById('erro2').innerHTML= msg_erro;
        avancar=false;
    }
    else
    {
        if(valorEmail.indexOf('@')== -1 ||valorEmail.length<=8)
        {
            msg_erro='Email invalido!';
            modalerro(msg_erro);
            document.getElementById('email').className=  document.getElementById('email').className+' is-invalid';
            document.getElementById('erro2').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorSenha=='')
    {
       
    }
    else
    {
        if(valorSenha.length<=5)
        {
            msg_erro='Senha muito fraca!';
            modalerro(msg_erro);
            document.getElementById('password').className=  document.getElementById('password').className+' is-invalid';
            document.getElementById('erro3').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorConfirmSenha=='')
    {
      
    }
    else
    {
        if(valorConfirmSenha.length<=5)
        {
            msg_erro='Senha muito fraca!';
            document.getElementById('Confirmpassword').className=  document.getElementById('Confirmpassword').className+' is-invalid';
            modalerro(msg_erro);
            document.getElementById('erro4').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorSenha!= valorConfirmSenha)
    {
        msg_erro='As senhas não conferem!';
        modalerro(msg_erro);
        document.getElementById('Confirmpassword').className=  document.getElementById('Confirmpassword').className+' is-invalid';
        document.getElementById('erro4').innerHTML= msg_erro;
        avancar=false;
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;
}

function validarDeposito()
{
    let valorStory=document.forms['form-deposito']['story_id'].value;
    let valornome=document.forms['form-deposito']['products_id'].value;
    let valorqtd=document.forms['form-deposito']['qtd'].value;
    let valorCategoria=document.forms['form-deposito']['category_id'].value;

    let msg_erro='';
    let avancar=true;

    if(valorStory=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('story_id').className=  document.getElementById('story_id').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
    if(valornome=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('products_id').className=  document.getElementById('products_id').className+' is-invalid';
        document.getElementById('erro2').innerHTML= msg_erro;
        avancar=false;
    }
    if(valorqtd=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('qtd').className=  document.getElementById('qtd').className+' is-invalid';
        document.getElementById('erro3').innerHTML= msg_erro;
        avancar=false;
    }
    else
    {
        console.log(valorqtd.indexOf(','));
        if(valorqtd.indexOf(',') !== -1)
        {
            msg_erro='As casas decimais devem ser separadas por ponto!';
            modalerro(msg_erro);
            document.getElementById('qtd').className=  document.getElementById('qtd').className+' is-invalid';
            document.getElementById('erro3').innerHTML= msg_erro;
            avancar=false;
        }
    }
    if(valorCategoria=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('category_id').className=  document.getElementById('category_id').className+' is-invalid';
        document.getElementById('erro4').innerHTML= msg_erro;
        avancar=false;
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;

}
function validarCarrinho()
{
    let valorQtd=document.forms['form-carrinho']['qtd'].value;
    let valorQtd_disponivel=document.forms['form-carrinho']['qtd_disponivel'].value;
    let msg_erro='';
    console.log(valorQtd_disponivel-valorQtd<0);
    let avancar=true;
    if(valorQtd.indexOf(',')!==-1 || valorQtd.indexOf('.')!==-1)
    {
        msg_erro='Digite um numero inteiro!';
        document.getElementById('qtd').className=  document.getElementById('qtd').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
  
    if(valorQtd_disponivel-valorQtd<0)
    {
        msg_erro='Quantidade maior do que a disponivel no estoque!';
        document.getElementById('qtd').className=  document.getElementById('qtd').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;

}
function validarLancamento()
{
    let valoraParcela=document.forms['form-lancamento']['ValoraParcela'].value;
    let valorParcelado=document.forms['form-lancamento']['valorParcelado'].value;
    let dataVencimento=document.forms['form-lancamento']['data_vencimento'].value;
    let tipo=document.forms['form-lancamento']['tipo'].value;
    let nome=document.forms['form-lancamento']['description'].value;
    let Valortotal=document.forms['form-lancamento']['valueTotal'].value;
    let data_compra=document.forms['form-lancamento']['data_compra'].value;
    let cliente_id=document.forms['form-lancamento']['cliente_id'].value;
    let msg_erro='';
    let avancar=true;
    if(valoraParcela>valorParcelado)
    {
        msg_erro='Você não parcelou todo o valor!';
        modalerro(msg_erro);
        document.getElementById('erro7').innerHTML= msg_erro;
        document.getElementById('erro6').innerHTML= msg_erro;
        document.getElementById('erro') .style.backgroundColor= 'red';
        document.getElementById('parcelamento') .style.backgroundColor= 'red';
        document.getElementById('ValoraParcela').className=  document.getElementById('ValoraParcela').className+' is-invalid';
        avancar=false;
    }
    if(nome=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('decription').className=  document.getElementById('decription').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
    if(Valortotal=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('valueTotal').className=  document.getElementById('valueTotal').className+' is-invalid';
        document.getElementById('erro2').innerHTML= msg_erro;
        avancar=false;
    }
    if(data_compra=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('data_compra').className=  document.getElementById('data_compra').className+' is-invalid';
        document.getElementById('erro3').innerHTML= msg_erro;
        avancar=false;
    }
    if(cliente_id=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('cliente_id').className=  document.getElementById('cliente_id').className+' is-invalid';
        document.getElementById('erro4').innerHTML= msg_erro;
        avancar=false;
    }
    if(tipo=='')
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('tipo').className=  document.getElementById('tipo').className+' is-invalid';
        document.getElementById('erro5').innerHTML= msg_erro;
        avancar=false;
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;

}
function validarBaixarlancamento()
{
    let data_pagamento=document.forms['form-baixa-lancamento']['data_pagamento'].value;
    let valor_recebido=document.forms['form-baixa-lancamento']['valor_recebido'].value;
    let msg_erro='';
   
    let avancar=true;
    if(data_pagamento=="")
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('data_pagamento').className=  document.getElementById('data_pagamento').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
    if(valor_recebido=='')
    {
        msg_erro='Campo Obrigatorio!';
        document.getElementById('valor_recebido').className=  document.getElementById('valor_recebido').className+' is-invalid';
        document.getElementById('erro2').innerHTML= msg_erro;
        avancar=false;
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;

}
function validarBanco()
{
    let name=document.forms['form-banco']['name'].value;
    let conta=document.forms['form-banco']['conta'].value;
    let Nbanco=document.forms['form-banco']['Nbanco'].value;
    let msg_erro='';
   
    let avancar=true;
    if(name=="")
    {
        msg_erro='Campo Obrigatorio!';
        modalerro(msg_erro);
        document.getElementById('name').className=  document.getElementById('name').className+' is-invalid';
        document.getElementById('erro1').innerHTML= msg_erro;
        avancar=false;
    }
    if(conta=='')
    {
        msg_erro='Campo Obrigatorio!';
        document.getElementById('conta').className=  document.getElementById('conta').className+' is-invalid';
        document.getElementById('erro2').innerHTML= msg_erro;
        avancar=false;
    }
    if(Nbanco=='')
    {
        msg_erro='Campo Obrigatorio!';
        document.getElementById('Nbanco').className=  document.getElementById('Nbanco').className+' is-invalid';
        document.getElementById('erro3').innerHTML= msg_erro;
        avancar=false;
    }
    if(avancar==false)
    {
        document.getElementById('salvar').hidden=false;
    }
    return avancar;

}
$(document).ready(function(){
    $('#teste1').on('click',function(e){
        let value=document.getElementById('value').value;
         let data_vencimento=document.getElementById('data_vencimento').value;
         if(value=='')
         {
             msg_erro='Campo Obrigatorio!';
             document.getElementById('value').className=  document.getElementById('value').className+' is-invalid';
             document.getElementById('erro8').innerHTML= msg_erro;
             avancar=false;
         }
         if(data_vencimento=='')
         {
             msg_erro='Campo Obrigatorio!';
             document.getElementById('data_vencimento').className=  document.getElementById('data_vencimento').className+' is-invalid';
             document.getElementById('erro9').innerHTML= msg_erro;
             avancar=false;
         }
    })
    

})
// function validarPedidovenda()
// {
//     let valorStory=document.forms['form-pedido-venda']['story_id[]'].value;
//     let msg_erro='';
//     let avancar=true;
//     console.log(valorStory);
//     if(valorStory=='')
//     {
//         msg_erro='Campo Obrigatorio!';
//         modalerro(msg_erro);
//         document.getElementById('erro1').innerHTML= msg_erro;
//         avancar=false;
//     }
//     return avancar;

// }
function modalerro(msg_erro)
{
    Swal.fire({
        icon: 'warning',
        title: 'Error',
        text: `${msg_erro}`,
        showConfirmButton: true,
      })   
}