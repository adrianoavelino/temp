
function func() {}
var fazerScroll2 = function (pos, speed, funcao) {
  var spedd = speed || 100;
  var body = $("html, body");
  body.stop().animate({scrollTop:pos}, speed, 'swing', function(){
    funcao();
  });
}

function fazerScroll() {

  var body = $("html, body");
  body.stop().animate({scrollTop:0}, 1000, 'swing', function(){});
}

$(function(){
    $('#game select, select').select2({
      language:'pt-BR',
      placeholder: "Quem é o meu Pai?",
      maximumSelectionLength: 1
    });
    
    $("#game").hide();
    
    $("#formIdentificacao").submit(function(){
      var email = document.getElementById("email").value;
      var matricula = document.getElementById("matricula").value;
      
      $.post('logar.php',{email:email, matricula:matricula}, function(data) {
        if (data === '1') {
          $("#msgLogin").hide();
          $("#game").show();
          $("#formIdentificacao").slideUp(function(){
            
            var teste = function(){
              return $("select:first").select2('open');
            }
            //testee
            fazerScroll2($("#msg").position().top,680, teste);
            
            
            
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
      var filhos = $("#formFilho").serialize();
      
      $.post('palpitar.php',filhos, function(data) {
          $("#msg").html(data).hide().fadeIn();
          ($("#msg .alert-success").length == 1?$("input, select").attr("disabled", true):'');
          fazerScroll();
      });
    });
       
  });
    
