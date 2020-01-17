$(document).ready(function () {
    //click btn mySelf
    $('.streedDis').css('display','none');
 $('#mySelf').on('click',function (e) {
     e.preventDefault();
     $('.streedDis').css('display','none');
     $('#send').css('display','none');
     $('#foodPlace').css('display','block');

 })
    //end btn mySelf

    //click btn notMe
    $('#notMe').on('click',function (e) {
        e.preventDefault();
        $('#foodPlace').css('display','none');
        $('.streedDis').css('display','block');
        $('#send').css('display','block');
    })
    //end btn notMe
});