$(document).ready(function () {

    // change select first form
    $( '#GovSelect' ).change(function (e) {
        e.preventDefault();
        $('#boxplace').remove();//لما استخدمت "li"بوز التصميم
        $('#options').empty();
        $('#mySelf').attr('disabled','disabled');
             let optionSelected = $(this).find("option:selected");
             let govern = optionSelected.data('gov');
             var $dropdown = $("#options");
             $dropdown.append($("<option />").val('').text(''));

             $.each(govern, function() {
                 //console.log(this)
                 $dropdown.append($(`<option value="${this.id}"  id="citSel">${this.city_name}</option>`))
             });

        } );//end change select

    if ( $('#options').change(function (e) {
            e.preventDefault();
            $('#mySelf').removeAttr('disabled');
            $('#boxplace').remove();
    }))

    $('body').on('click','#mySelf',function (e) {
            e.preventDefault();
            $('#boxplace').remove();
            let url=$(this).data('url');
            let method=$(this).data('method');
            $('#foodPlace').css('display','block');

            $.ajax({
                url:url,
                method:method,
                data:{'city_id':$("#options").find("option:selected").val()},
                success:function (data) {
                    //console.log(data)
                    if(data.length === 0) {
                        $('#boxes').append($(
                            ` <li id="boxplace" > <h5 style="color: black"> لا تتوافر صناديق تبرع في هذه المنطقه</h5></li> `
                        ))
                    }
                    else {
                        $.each(data, function()
                        {
                            $('#boxes').append($(
                                ` <li style="color:darkblue ; font-weight: bold;" id="boxplace">${this.street_name}</li> `
                            ));
                        })
                    }
                }
            });
         });




    // change select secend form
    $( '#secGovSelect' ).change(function () {
        $('#secOptions').empty();
        let optionSelected = $(this).find("option:selected");
        let govern = optionSelected.data('gov');
        var $dropdown = $("#secOptions");
        $dropdown.append($("<option />").val('').text(''));
        $.each(govern, function() {
            $dropdown.append($(`<option/>`).val(this.id).text(this.city_name));
        });

    } );//end change select
    //end btn notMe

     //click btn اخذ التبرع
    $('.takeDon').on('click',function () {
       let user=$(this).data('user');
       let donation=$(this).data('donation');
       let url=$(this).data('url');
       let method=$(this).data('method');

        $.ajax({
            url:url,
            method:method,
            data:{'user':user,'donation': donation},
            success:function (data) {
                  console.log('g')

            }
        });
        $(this).closest('tr').css('display','none')
    })
    // enf of اخذ التبرع

});