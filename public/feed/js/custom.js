$(document).ready(function () {

    // change select first form
    $( '#GovSelect' ).change(function () {
        $('#options').empty();

             let optionSelected = $(this).find("option:selected");
             let govern = optionSelected.data('gov');
             var $dropdown = $("#options");
             $dropdown.append($("<option />").val('').text(''));

             $.each(govern, function() {
                 //console.log(this)
                 $dropdown.append($(`<option value="${this.id}"  id="citSel">${this.city_name}</option>`))
             });

        } );//end change select



    //click btn mySelf
    if ( $('#options').change(function () {
            $('#mySelf').removeAttr('disabled')
    }))


        $('body').on('click','#mySelf',function (e) {
            e.preventDefault();

            let url=$(this).data('url');
            let method=$(this).data('method');

            $('#foodPlace').css('display','block');
            $.ajax({

                url:url,
                method:method,
                data:{'city_id':$("#options").find("option:selected").val()},
                success:function (data) {
                // console.log(data)لحد هنا بيعرضي الصناديق بس array

                    $.each(data, function() {
                    console.log(this.street_name)
                       // $('#boxes').append(this.street_name)
                        $('#boxes').append($(`
                        <li style="color: #85144B ; font-weight: bold;" >${this.street_name}</li>
                        `))
                    });

                }

            });

         });




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