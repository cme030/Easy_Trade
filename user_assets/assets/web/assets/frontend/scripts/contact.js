$(document).ready(function(){
    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-center",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    $("#type").css("color", "gray");
    $("#category").css("color", "gray");
    $("#company_name").prop('disabled', true);

    $("#category").change(function(){
        event.preventDefault();
        if ($("#category").val() == "") {
            $("#category").css("color", "gray");
        } else {
            $("#category").css("color", "black");
        }
    });

    $("#type").change(function(){
            event.preventDefault();
            if ($("#type").val() == "") {
                $("#type").css("color", "gray");
            } else {
                $("#type").css("color", "black");
            }

            if($("#type").val() == "" || $("#type").val() == "0" || $("#type").val() == "5") {
                $('.businessField').addClass('disabled');
                $("#company_name").prop('disabled', true);
            } else {
                $('.businessField').removeClass('disabled');
                $("#company_name").prop('disabled', false);
            }

        });

    $("#contact-us-btn").on("click" , function(event) {
        event.preventDefault();
        
        try{
            ga('send', {
              hitType: 'event',
              eventCategory: 'ContactUS',
              eventAction: 'Submitbtn',
              eventLabel: 'Fall Campaign'
        });}
        catch(error){console.log(error);}

        $("#name").next().remove();
        $("#type").next().remove();
        $("#mobile").next().remove();
        $("#company_name").next().remove();

        if($("#name").val() == "" || $("#type").val() == "" || $("#mobile").val().match(/^([+]\d{2})?\d{10}$/) == null || (!$("#company_name").prop('disabled') && $("#company_name").val() =="")) {

            if($("#name").val() == "") {
                $("#name").css("border", "1px solid red");
                $("#name").after("<span style='color:red; float:left;'>This field is mandatory</span>");
            } else {
                $("#name").css("border", "none");

            }

            if($("#type").val() == "") {
                $("#type").css("border", "1px solid red");
                $("#type").after("<span style='color:red; float:left;'>This field is mandatory</span>");
            } else {
                $("#type").css("border", "none");

            }

            if($("#mobile").val().match(/^([+]\d{2})?\d{10}$/) == null) {
                $("#mobile").css("border", "1px solid red");
                $("#mobile").after("<span style='color:red; float:left;'>Please enter a valid mobile number</span>");
            } else {
                $("#mobile").css("border", "none");

            }

            if(!$("#company_name").prop('disabled') && $("#company_name").val() =="") {
                $("#company_name").css("border", "1px solid red");
                $("#company_name").after("<span style='color:red; float:left;'>Please enter establishment name</span>");
            } else {
                $("#company_name").css("border", "none");

            }

            return;
        }

        $.ajax({
            type: "POST",
            url: '/contact-details',
            data: { "name" : $("#name").val(), "mobile" : $("#mobile").val(), "type" : $("#type").val(), "company_name": $("#company_name").val(), "email" : $("#email").val(), "message" : $("#contact-message textarea").val(), "category" : $("#category").val()},
            dataType: "json",
            success: function( data ) {
                if(data.status == 1) {
                    toastr.success("We have your details. Our Customer success team will reach out to you shortly.");
                    $("input, select, textarea").val(null);
                } else {
                    toastr.error("Oops! Something went wrong. Please try again later.");
                }
            },
            error: function() {
                toastr.error("Oops! Something went wrong. Please try again later.");
            }
        });
    });

    function showFormError(message) {
        $(".success-block").hide();
        $('.error-block').html('');
        $('.error-block').html('<span class="text-danger">'+message+'</span>');
        $(".error-block").show();

        $('html, body').animate({
            scrollTop: $(".error-block").offset().top-200
        }, 10);
    }

    function showFormSuccess(message) {
        $(".error-block").hide();
        $('.success-block').html('');
        $('.success-block').html('<span class="text-success">'+message+'</span>');
        $(".success-block").show();
    }

})