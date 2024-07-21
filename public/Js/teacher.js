$(function(){
    $(".addteach").click(function(){
        const name = $("[name='teachname']");
        const qual = $("[name='qual']");
        const address = $("[name = 'address']")

        if(name.val() == '')
        {
            name.next(".invalid-feedback").text("Please Enter Teacher Name").show().focus()
            return false
        }
        if(qual.val() == '')
        {
            qual.next(".invalid-feedback").text("please Enter The Teacher Qualification").show().focus()
            return false;
        }
        if(address.val() == '')
        {
            address.next(".invalid-feedback").text("Please ENter Teacher Address").show().focus()
            return false;
        }
        const formdata = $("[name='tfrm']").serialize()
        $.ajax({
            url : 'Teacher/create',
            method: 'post',
            data: formdata,
            success: function(response)
            {
                if(response.status == 200)
                {
                    $(".server_msg").text("Teacher Created Successfully")
                    window.location.reload()

                }
                else
                {
                    $(".server_msg").addClass("invalid-feedback").removeClass("valid-feedback").text("Error In Adding Teacher").show()
                    return false;
                }
            }

        })
    })
})
