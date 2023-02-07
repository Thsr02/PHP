$(document).ready(function(){
    
    $('#formulario').children('div').hide();

    $('#selectForm').on('change',function(){
        var selectValor = '#'+$(this).val();
            $('#formulario').children('div').hide();
            $('#formulario').children(selectValor).show();
    });
});

var select   = document.getElementById("txtcat");
var categoria = '';
select.onchange = function(){
    categoria = this.value;
}
