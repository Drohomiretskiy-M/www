$(document).ready(function(){
$("#hide").click(function(){

$("#trololo").hide();
});
$("#check").click(function(){
if ($('#check:checked').val() !== undefined)
{
$("#trololo").show(); //�������
}
else
{
$("#trololo").hide(); //�� �������
}

});
});