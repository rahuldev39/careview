/*==============================================================*/
// Raque Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...assets/php/form-process.p
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            $('.page-btn').prop( "disabled", true );
 
            submitForm();
        }
    });


$("#contactFormPartner").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            $('.page-btn').prop( "disabled", true );
 
            submitFormPartner();
        }
    });

    function submitForm(){
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var phone_number = $("#phone_number").val();
        var message = $("#message").val();

 
        $.ajax({
            type: "POST",
            url: "sendmail.php",
            data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&phone_number=" + phone_number + "&message=" + message,
            success : function(text){
                if (text == "success"){
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false,text);
                }
            }
        });
    }
    
    function submitFormPartner(){
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var phone_number = $("#phone_number").val();
        var message = $("#message").val();

 
        $.ajax({
            type: "POST",
            url: "sendmailpartner.php",
            data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&phone_number=" + phone_number + "&message=" + message,
            success : function(text){
                if (text == "success"){
                    formPartnerSuccess();
                } else {
                    formPartnerError();
                    submitPartnerMSG(false,text);
                }
            }
        });
    }

    function formPartnerSuccess(){
        $("#contactFormPartner")[0].reset();
        submitMSG(true, "Message Submitted!")
    }

    function formPartnerError(){
        $("#contactFormPartner").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitPartnerMSG(valid, msg){
        if(valid){
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }

    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true, "Message Submitted!")
    }

    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg){
        if(valid){
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict