$("#btn_gravar").on("click", function(){
    var  txt_nome  = $("#nome").val();
    var  txt_email = $("#email").val();
    
    $.ajax({
        url: "create.php",
        type: "POST",
        data: {
            nome : txt_nome, email: txt_email
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados registrados com sucesso...");
    });
});

$("#btn_atualizar").on("click", function(){
    var  txt_nome  = $("#nome").val();
    var  txt_email = $("#email").val();
    var  txt_id    = $("#id").val();
    
    $.ajax({
        url: "update.php",
        type: "POST",
        data: {
            nome : txt_nome, email: txt_email, id: txt_id
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados atualizados com sucesso...");
        window.location="read.php";
    });
});