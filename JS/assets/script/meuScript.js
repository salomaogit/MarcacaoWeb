// $(seletor).acao();

$(document).ready(function(){
    $("#b1").click(function(){
        $("h1")
        // .hide();
        .fadeOut(5000);
    });
    $("#b2").click(function(){
        $("h1")
        // .show();
        .fadeIn(5000);
        $("#ola1")
        .css("background-color","blue")
        .css("color","white");
    });
});

$(document).ready(function(){
    // $("#fotoam").hide();
    // $("#fotomg").hide();
    // $("#fotope").hide();
    // $("#fotopr").hide();
    // $("#fotors").hide();
    // $("#fotoam").show();
    $("#am").click(function(){
        $("#status").html("Estado do amazonas");
        $("#fotomg").hide();
        $("#fotope").hide();
        $("#fotopr").hide();
        $("#fotors").hide();
        $("#fotoam").fadeIn(5000);
    });
    $("#mg").click(function(){
        $("#status").html("Estado de Minas Gerais");
        $("#fotoam").hide();
        $("#fotope").hide();
        $("#fotopr").hide();
        $("#fotors").hide();
        $("#fotomg").fadeIn(5000);
    });
    $("#pe").click(function(){
        $("#status").html("Estado de Pernambuco");
        $("#fotoam").hide();
        $("#fotomg").hide();
        $("#fotopr").hide();
        $("#fotors").hide();
        $("#fotope").fadeIn(5000);
    });
    $("#pr").click(function(){
        $("#status").html("Estado do Paraná");
        $("#fotoam").hide();
        $("#fotomg").hide();
        $("#fotope").hide();
        $("#fotors").hide();
        $("#fotopr").fadeIn(5000);
    });
    $("#rs").click(function(){
        $("#status").html("Estado do Rio Grande do Sul");
        $("#fotoam").hide();
        $("#fotomg").hide();
        $("#fotope").hide();
        $("#fotopr").hide();
        $("#fotors").fadeIn(5000);
    });
});