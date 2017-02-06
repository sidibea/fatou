/*
 * Title:   Travelo | Responsive HTML5 Travel Template - Custom Javascript file
 * Author:  http://themeforest.net/user/soaptheme
 */

tjq(document).ready(function() {
    // UI Form Element
});


function Booking(){
        $('.loader').show();
        var data=$('#booking').serializeArray();
        var url= window.location.href;
        var result = post_ajax(url,data);
        var details = result;
        $('.loader').hide();
        $('.signup_res').show();
        if(details.status =='failed'){
            $('.signup_res').html("<p class='error '>"+ details.message +"</p>");
            setTimeout(function(){$('.signup_res').hide(); }, 1500);

        }else{
            $('.signup_res').html("<p class='success '>"+ details.message +"</p>");
            setTimeout(function(){$('.signup_res').hide(),$('#signup')[0].reset(); }, 1500);

        }

}

function post_ajax(url, data) {
    var result = '';
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(response) {
            result = response;
        },
        error: function(response) {
            result = 'error';
        },
        async: false
    });

    return result;
}