
function func() {}

var isComplete = function(){
    var arr = [];
     $("#formFilho select").each(function(elemento){
      arr.push(this.value);
    });

    var r =  arr.every(function(elemento){
      return !!elemento;
    })
    return r;

}

var fazerScroll2 = function (pos, speed, funcao) {
  var spedd = speed || 100;
  var body = $("html, body");
  var funcao = funcao || function(){};
  body.stop().animate({scrollTop:pos}, speed, 'swing', function(){
    funcao();
  });
}

function fazerScroll() {

  var body = $("html, body");
  body.stop().animate({scrollTop:0}, 1000, 'swing', function(){});
}

$(function(){
    (window.innerWidth > 768)?'':$('.filhos').height(window.innerHeight);
    $("#theEnd").hide();

    $('#game select').select2({
      language:'pt-BR',
        placeholder: "Quem é o meu Pai?"
    //   placeholder: "Quem é o meu Pai?",
    //   maximumSelectionLength: 1
    });

    $("#game").hide();

    $("#formIdentificacao").submit(function(){
      var email = document.getElementById("email").value;
      var matricula = document.getElementById("matricula").value;

      $.post('logar.php',{email:email, matricula:matricula}, function(data) {
        if (data === '1') {
          $("#msgLogin").hide();
          $("#game").show();
          $("#formIdentificacao").slideUp(500, function(){

            var teste = function(){
              return $("select:first").select2('open');
            }
            //testee
            fazerScroll2($('.filhos:first').position().top,600, teste);



//            $("select:first").select2('open');
          });
          $(".identificacao").html("<strong>E-mail:</strong> " + email + "<strong> / Matrícula:</strong> " + matricula);

        } else {
          $("#msgLogin").html(data).hide().fadeIn();
          fazerScroll();
        }
      });
    });

    $("#btn").click(function(){
      $("#filho1").focus();
    });

    $("#formFilho").submit(function(){
      document.getElementById('btn_palpitar').value = 'Aguarde ...';
      var filhos = $("#formFilho").serialize();

      $.post('palpitar.php',filhos, function(data) {
          $("#msg").html(data).hide().fadeIn();
          ($("#msg .alert-success").length == 1?$("input, select").attr("disabled", true):'');
          fazerScroll2($("#msg").position().top,700, function(){

              if (isComplete()) {
                  $("#formFilho").fadeOut(2000);
              }

          });
          document.getElementById('btn_palpitar').value = 'Palpitar';
      });
    });

    $("#game select").on('change', function(){

    var regExp = /[a-zA-Z]/g;
    var id = $(this).attr('id');
    var filho = 'filho' + (+id.replace(regExp, "") + 1);
    var posicao = $(this).parent().parent().parent().next().position().top;
    var teste = function(){
        return ($("#" + filho).length == 1)?$("#" + filho).select2('open'):$("#btn_palpitar").focus();
    };
    console.log(filho);
    
    //verifica se é o ultimo filho | questiona o envio
//    (filho === 'filho18' || isComplete())? fazerScroll2($("#theEnd").show().position().top,800, function(){}): fazerScroll2(posicao,800, teste);

if (isComplete()) {
    fazerScroll2($("#theEnd").fadeIn().position().top,800, function(){});
}else {
//    fazerScroll2(posicao,800, teste);

var select = $('select');
var tamanho = select.length;
for(var i = 0; i < tamanho; i++){
  if (select[i].value == '') {
   var filho = "#filho" +(i+1);
   var posicao = $(filho).parent().parent().parent().position().top;

   var fun = function(){
       return $(filho).select2('open');
   };
   
   fazerScroll2(posicao,800, fun);
 
   

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
    
    var s = function(){$("#filho1").select2('open');};
    $("#btnNao").on('click', function(){
      fazerScroll2($("#game").position().top,1000,s );
      
    });

  });

//
//var select = $('select');
//var tamanho = select.length;
//for(var i = 0; i < tamanho; i++){
//  if (select[i].value == '') {
//   var filho = "#filho" +(i+1);
//   var posicao = $(filho).parent().parent().parent().position().top;
//
//   fazerScroll2(posicao,800);
// 
//   $(filho).select2('open');
//
//   break;
//
//  }
//}