$(function(){
    $('#select-pais').on('change',onSelectPaisChange);

});
function onSelectPaisChange(){
var pais_id=$(this).val();

if (!pais_id){
    $('#select-estado').html( '<option value="">-- Estado --</option>');
    return;
}
// AJAX
$.get('/reg1/public/api/usuario/'+pais_id+'/estados', function (data){
    var html_select='<option value="">-- Estado --</option>';
    for(var i=0; i<data.length;i++)
        html_select+='<option value="'+data[i].id +'">'+data[i].nombre +'</option>';
    console.log(html_select);
    $('#select-estado').html( html_select);
});

}