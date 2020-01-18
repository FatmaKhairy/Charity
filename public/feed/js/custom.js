$(document).ready(function () {
    // change select first form
    $( '#GovSelect' ).change(function () {
        $('#options').empty();
             let optionSelected = $(this).find("option:selected");
             let govern = optionSelected.data('gov');
             var $dropdown = $("#options");
             $.each(govern, function() {
                 $dropdown.append($("<option />").val(this.id).text(this.city_name));
             });
        } );//end change select



    //click btn mySelf

    //click btn notMe


    // change select secend form
    $( '#secGovSelect' ).change(function () {
        $('#secOptions').empty();
        let optionSelected = $(this).find("option:selected");
        let govern = optionSelected.data('gov');
        var $dropdown = $("#secOptions");
        $.each(govern, function() {
            $dropdown.append($("<option />").val(this.id).text(this.city_name));
        });

    } );//end change select

    $('#notMe').on('click',function (e) {
            e.preventDefault();

    })
    //end btn notMe
});