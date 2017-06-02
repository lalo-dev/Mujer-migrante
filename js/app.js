$gmx(document).ready(function(){
    $.datepicker.regional.es = {
        closeText: 'Cerrar',
        prevText: 'Ant',
        nextText: 'Sig',
        currentText: 'Hoy',
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
        dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
        dayNamesMin: ['Dom','Lun','Mar','Mie','Jue','Vie','S&aacute;b'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''};
    $.datepicker.setDefaults($.datepicker.regional.es);
    //$( "#calendar" ).datepicker();
    $( "#calendarYear" ).datepicker( { changeYear: true } );
    //$( ".datepicker-example" ).datepicker();
    $('[data-toggle="tooltip"]').tooltip();

    //$('.captura-a').hide();
    $('.captura-b').hide();
    $('.captura-c').hide();
    $('.captura-d').hide();
    $('.captura-e').hide();

    $('.tipo-a').hide();
    $('.tipo-b').hide();
    $('.tipo-c').hide();
    $('.tipo-d').hide();

    $('#tipoMigrante').change(function () {
        //alert($(this).val());
        if($(this).val() == 'a'){
            $('.tipo-a').show();
            $('.tipo-b').hide();
            $('.tipo-c').hide();
            $('.tipo-d').hide();
        } else if($(this).val() == 'b'){
            $('.tipo-a').hide();
            $('.tipo-b').show();
            $('.tipo-c').hide();
            $('.tipo-d').hide();
        } else if($(this).val() == 'c'){
            $('.tipo-a').hide();
            $('.tipo-b').hide();
            $('.tipo-c').show();
            $('.tipo-d').hide();
        } else if($(this).val() == 'd'){
            $('.tipo-a').hide();
            $('.tipo-b').hide();
            $('.tipo-c').hide();
            $('.tipo-d').show();
        } else {
            $('.tipo-a').hide();
            $('.tipo-b').hide();
            $('.tipo-c').hide();
            $('.tipo-d').hide();
        }
    });
});

function cuentaCaracteres(texto,etiqueta) {
    var resultado = 0;
    var total = $('#'+texto).attr('maxlength');
    var resta = $('#'+texto).val().length;
    resultado = total - resta;
    $('#'+etiqueta).text(resultado);
}