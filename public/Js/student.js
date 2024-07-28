$(function(){
    $(".sb_btn").click(function(){
        const lname = $("#lname");
        const fname = $("#fname");
        const email = $("#email");
        const phone = $("#phone");
        const dob = $("[name='dob']");
        const add = $("[name='add']");
        const teacher_id = $("[name='sel_teacher']");
        const sub = $("[name='sel_sub']")
        if(lname.val() == '')
        {
            lname.next(".invalid-feedback").text("Please Enter Last Name").show()
                lname.focus()
            return false
        }
        else
        {
            lname.next(".invalid-feedback").text("").hide()
        }
        if(fname.val() == '')
        {
            fname.next(".invalid-feedback").text("Please Enter First Name").show()
                fname.focus()
            return false
        }
        else
        {
            fname.next(".invalid-feedback").text("").hide()
        }
        if(email.val() == '')
        {
            email.next(".invalid-feedback").text("Please Enter Email").show()
                email.focus()
            return false
        }
        else
        {
            email.next(".invalid-feedback").text("").hide()
        }
        if(phone.val() == '')
        {
            phone.next(".invalid-feedback").text("Please Enter Phone").show()
                phone.focus()
            return false
        }
        else
        {
            phone.next(".invalid-feedback").text("").hide()
        }
        if(dob.val() == '')
        {
            dob.next(".invalid-feedback").text("Please Enter DOB").show()
                dob.focus()
            return false
        }
        else
        {
            dob.next(".invalid-feedback").text("").hide()
        }
        if(add.val() == '')
        {
            add.next(".invalid-feedback").text("Please Enter Address").show()
                add.focus()
            return false
        }
        else
        {
            add.next(".invalid-feedback").text("").hide()
        }
        if(teacher_id.val() == '')
        {
            teacher_id.next(".invalid-feedback").text("Please Select Teacher").show()
                teacher_id.focus()
            return false
        }
        else
        {
            teacher_id.next(".invalid-feedback").text("").hide()
        }
        if(sub.val() == '')
        {
            sub.next(".invalid-feedback").text("Please Select Subject").show()
                sub.focus()
            return false
        }
        else
        {
            sub.next(".invalid-feedback").text("").hide()
        }
        const formdata = $("[name='studfrm']").serialize()
        $.ajax({
            url : 'Student/create',
            method: 'post',
            data: formdata,
            success: function(response)
            {
                console.log(response)
                if(response.status == 200)
                {
                    $(".server_msg").text("Student Created Successfully").show()
                    setTimeout(function(){

                    window.location.reload()
                    },2000)
                }
                else
                {
                    $(".server_msg").addClass("invalid-feedback").removeClass("valid-feedback").text("Error In Adding Student").show()
                    return false
                }
            }
        })
    })
})
