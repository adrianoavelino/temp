/**
 * Verifica se todos os campos foram preenchidos
 * @returns {Boolean}
 */
var isComplete = function(){
    var arr = [];
     $("#formFilho select").each(function(){
      arr.push(this.value);
    });

    var r =  arr.every(function(elemento){
      return !!elemento;
    })
    return r;
}

var fazerScroll = function (pos, speedy, funcao) {
  var speedy = speedy || 100;
  var _body = $("html, body");
  var funcao = funcao || function(){};
  _body.stop().animate({scrollTop:pos}, speedy, 'swing', function(){
    funcao();
  });
}





$(function(){
  
    var conf = true;
    $("#game").hide();
//    (window.innerWidth > 768)?'':$('.filhos').height(window.innerHeight);
    $("#theEnd").hide();
    var getFirstFocus = function(){
      return $("select:first").select2('open');
    };

    $('#game select').select2({
      language:'pt-BR',
        placeholder: "Quem é o meu Pai?"
    });


    $("#formIdentificacao").submit(function(event){
      event.preventDefault();
      
      var email = document.getElementById("email").value;

      $.post('logar.php',{email:email}, function(data) {
        if (data === '1') {
          $("#msgLogin").hide();
          $("#game").show();
          $("#formIdentificacao").slideUp(500, function(){
            //focus no primeiro campo

            
            fazerScroll($('.filhos:first').position().top,600, getFirstFocus);

          });
          
          //exibe o e-mail do usuário atual na tela de identificação
          $(".identificacao").html("<strong>E-mail:</strong> " + email );

        } else {
          $("#msgLogin").html(data).hide().fadeIn();
          fazerScroll();
        }
      });
    });

    //verifica os palpites do usuário
    $("#formFilho").submit(function(event){
      
      
      
      document.getElementById('btn_palpitar').value = 'Aguarde ...'; //altera texto para informar que o processo ainda está em execução
      var filhos = $("#formFilho").serialize();

      $.post('palpitar.php',filhos, function(data) {
          $("#msg").html(data).hide().fadeIn();
          ($("#msg .alert-success").length == 1?$("input, select").attr("disabled", true):'');
          
          //exibe a resposta ao usuário
          fazerScroll($("#msg").position().top,700, function(){
            //esconde o formulário caso tenha todos os campos preenchidos
            if (isComplete()) {
              $("#formFilho").fadeOut(2000);
            }
          });
          document.getElementById('btn_palpitar').value = 'Palpitar'; //volta com o texto padrão do botão
      });
      
      event.preventDefault();
    });

    //seleciona o próximo campo
    $("#game select").on('change', function(){
      var regExp = /[a-zA-Z]/g;
      var id = $(this).attr('id');
      var filho = 'filho' + (+id.replace(regExp, "") + 1);
      var posicao = $(this).parent().parent().parent().next().position().top;
    
      if (isComplete() && conf) {
          fazerScroll($("#theEnd").fadeIn(1500).position().top,800);
      }else {
        var select = $('select');
        var tamanho = select.length;
        var createFocus = function(seletor){
          return function(){
            $(seletor).select2('open');
          };
        };
        
        //abre o proximo select ou proximo não preenchido
        for(var i = 0; i < tamanho; i++){
          if (select[i].value === '') {
           var filho = "#filho" +(i+1);
           var posicao = $(filho).parent().parent().parent().position().top;
           var getFocus = createFocus(filho);
           fazerScroll(posicao,800, getFocus);
           break;
          }
        }    
      }
    });

    //abre select2 ao clicar na imagem
    $('.filhos label img').on('click', function(){
       var filho = $(this).parent().attr('for');
       $("#" + filho).select2('open');
    });
    
    $("#btnNao").on('click', function(){
      fazerScroll($("#game").position().top,1000, getFirstFocus );
      conf = false;
    });

  });

