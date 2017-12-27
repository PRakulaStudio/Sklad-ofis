
$("input:radio").on("change", function(){
    if($(this).is(':checked')) {
        $('code').html('clear !');
        $("input[name='radio1']").val($(this).attr("value"));
        $(this).attr("id");
        $('code').append($(this).attr("id"));
        $(this).attr(':checked', false)
        /*if($(this).attr("id")=="one")
        {
            alert("One");
        }
        else
            alert("two");*/
    }
});

