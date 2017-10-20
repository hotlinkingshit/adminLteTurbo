$(function(){

    function testCtrl(){
        console.info('testCtrl()');
        $('#boxAjax .overlay').show();
        $.post('ctrl.php',{'do':'hello'},function(json){

            console.log(json);
            $('#boxAjax .box-body').html(json.msg);

        }).fail(function(e){
            console.error(e.responseText);
        }).always(function(){
            $('#boxAjax .overlay').hide();
        });
    }
    testCtrl();

    $('#btnHello').click(function(){
        testCtrl();
    });

    console.info("jQuery "+jQuery().jquery);

    $('.overlay').hide();
});