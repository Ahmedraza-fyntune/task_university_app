$(function(){
    $(".sb_btn").click(function(){
        const current = $(this);
        const email = $("[name='email']");
        const password = $("[name='password']");
        const passwordError = password.next('invalid-feedback');
        const emailError = email.next(".invalid-feedback");
        if(email.val() == '')
        {
            emailError.text("please Enter the Email").show()
            email.focus();
            return false
        }
        else
        {
            emailError.text("").hide()
        }
        if(password.val() == '')
        {
            passwordError.text("PLease Enter the Password").show()
            password.focus()
            return false;
        }
        else
        {
            passwordError.text("").hide()
        }
        const formData = $("[name=loginfrm]").serialize()
        $.ajax({
            url:'login',
            method: 'post',
            data : formData,
            success: function(response)
            {
                if (response.status == '200')  {
                    current.next('valid-feedback').text("Logged in SuccessFully").show()
                    setTimeout(function(){
                        window.location.href = 'Dashboard'
                    },1500)
                }
                else
                {
                    current.next('.valid-feedback').addClass('invalid-feedback').removeClass("valid-feedback").text("Invalid Credentials").show()
                    return false;
                }
            }

        })

    })
})