;tjq(document).ready(function(){});function Booking(){$(".loader").show();var e=$("#booking").serializeArray(),n=window.location.href,r=post_ajax(n,e),s=r;$(".loader").hide();$(".signup_res").show();if(s.status=="failed"){$(".signup_res").html("<p class='error '>"+s.message+"</p>");setTimeout(function(){$(".signup_res").hide()},1500)}
else{$(".signup_res").html("<p class='success '>"+s.message+"</p>");setTimeout(function(){$(".signup_res").hide(),$("#signup")[0].reset()},1500)}};function post_ajax(s,n){var e="";$.ajax({type:"POST",url:s,data:n,success:function(s){e=s},error:function(s){e="error"},async:!1});return e};