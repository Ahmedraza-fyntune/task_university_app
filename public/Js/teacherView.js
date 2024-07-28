$(function(){
    $(".edit").click(function(){
        $("#basicModal").modal('show')
        const current = $(this);
        const name = current.closest('.attrteach').attr('tname');
        const qualification = current.closest('.attrteach').attr('tqual')
        const id = current.closest('.attrteach').attr('tid')
        const add = current.closest('.attrteach').attr('tadd')
        // console.log(name,qualification,id,add)
        console.log(current.closest('.attrteach'))
        $("[name='teachname']").val(name)
        $("[name='qual']").val(qualification)
        $("[name='add']").val(add)

        $(".sub_up").click(function(){
            const formdata = $("[name='msl_teacher_frm']").serialize()
            const token = $("[name='_token']").val()
            $.ajax({
                url:'update/'+id,
                method: 'put',
                data: formdata,
                success: function (response){
                    if(response.status == 200)
                    {
                       $('.valid-feedback').text("Teacher Details Updated Successfully").show()
                        window.location.reload()
                    }
                    else
                    {
                        $('.valid-feedback').addClass('invalid-feedback').removeClass('valid-feedback').text("Error in Updating The Teacher Details").show()
                        return false
                    }
                }

            })
        })


    })
    $(".del_tech").click(function()
    {
        const current = $(this)
        const id = $(this).attr('id')
        const token = $("[name='_token']").val()
        $.ajax({
            url:'delete/'+id,
            method: 'delete',
            data:{
                _token: token
            },
            success: function(response){
                if(response.status == '200')
                {
                    alert("Teacher Deleted Successfully")
                    current.closest("tr").remove()

                }
                else
                {
                    alert("Error In Deleting The Teacher")
                    return false
                }
            }
        })
    })
})

