$(document).ready(function(){
$("#hide").click(function(){

$("#trololo").hide();
});
$("#check").click(function(){
if ($('#check:checked').val() !== undefined)
{
$("#trololo").show(); //Чекнуто
}
else
{
$("#trololo").hide(); //НЕ чекнуто
}

});
});