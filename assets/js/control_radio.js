function radio_enable(){
	$('#spisok .radiobt:gt(1)').removeClass('disabled')
	$('#spisok .radiobt:gt(1) >span').removeClass('niceRadioDisabled');
	$('#spisok .radiobt:gt(1) >span input').removeAttr('disabled');
}

function radio_disable() {
	$('#spisok .radiobt:gt(1)').addClass('disabled');//hide();
	$('#spisok .radiobt:gt(1) >span').addClass('niceRadioDisabled');
	$('#spisok .radiobt:gt(1) >span input').attr('disabled','disabled');
}

function al(){
if (!$('#sklad').length)
	return
//document.getElementById('sklad')
//if(this.checked == true){

//console.log($('[name=rd_tip_objekta]').val());

if(document.getElementById('sklad').checked == true || !$('#vibor fieldset:first-child input:checked').length){
//if (1){

document.getElementById('spisok').style.display = 'inline';
$('#spisok .show').val('1');
$('.box.right').addClass('max')
radio_enable()
//$('#spisok .radiobt:gt(1)').show();
}
else{
document.getElementById('spisok').style.display = 'inline';
//document.getElementById('spisok').style.display = 'none';
$('.box.right').removeClass('max')

radio_disable();

//$('#spisok .show').val('');
}
}

$(function(){
//$('.disabled').live('click',function(){e.preventDefault(); return false;})

$('#vibor input, .podbor_more input').change(al);
$('[name=rd_tip_objekta]').parent().click(al);

al();


$('.plosh').click(function(){
//console.log('asd')
if ($('input',this).val())
{
val=$('input',this).val().split('-')
//console.log(val);
$('[name=num4_1]').val(val[0])
$('[name=num5_1]').val(val[1])
}
});

//document.getElementById('spisok').style.display = 'inline';
//$('#spisok .radiobt:gt(1)').hide();

//al();
})