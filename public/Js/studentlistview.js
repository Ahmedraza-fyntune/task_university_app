$(function(){
    $(".edit").click(function (){
        $("#basicModal").modal('show')
        const current = $(this);
        const id = current.attr('edt_id')
        const token = $("[name='_token']").val()
        $.ajax({
            url:'getStudentdetails/'+id,
            type:'GET',
            data:{
                _token: token
            },
            success:function(response){
                console.log(response.fname)
                response = response.data;
                $("[name='mdl_fname']").val(response.fname)
                $("[name='mdl_lname']").val(response.lname)
                $("[name='mdl_email']").val(response.email)
                $("[name='mdl_contact']").val(response.Contact)
                $("[name='mdl_dob']").val(response.dob)
                $("[name='mdl_add']").val(response.address)

                $(".edt_save").click(function(){
                    const data = $("[name='mdl_edt_frm']").serialize()
                    $.ajax({
                        url: 'update/'+id,
                        type: 'put',
                        data: data,
                        success: function (response) {
                            if(response.status == 200)
                            {
                                window.location.reload()
                            }
                            else
                            {
                                alert("Error In Updating The Student")
                                return false
                            }
                        }

                    })

                })

            }
        })

    })
    $(".delete").click(function(){
        const current = $(this);
        const del_id = $(this).attr('del_id')
        const token = $("[name='_token']").val()
            $.ajax({
                type: "delete",
                url: "delete",
                data: {
                    _token : token,
                    id: del_id
                },
                success: function (response) {
                    if(response.status =='200')
                    {
                        current.closest('tr').remove()
                        $("#deleteModal").modal('hide')

                        alert("Student record deleted successfully")
                    }
                    else
                    {
                        alert("Error In Deleting The Student")
                        return false;
                    }
                }
            })

    })
})
