$(document).ready(function () {
    //click btn mySelf

    var $govern = $('#Agovernorates');
    var $region = $('#Aregions');


    $('#a > input').each(function() {
        if ($(this).val() == "") {
            console.log('h')
        }
    });

    if($govern.val() == null && $region.val() == null){
        alert('h')
    }


    $('#mySelf').on('click',function (e) {
         e.preventDefault();
         $('#foodPlace').css('display','block');

 })
    //end btn mySelf

    //click btn notMe
    $('#notMe').on('click',function (e) {
            e.preventDefault();

    })
    //end btn notMe
});