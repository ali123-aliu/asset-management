<script>
    $(document).on('click','.deleteBtn',function(e){
        e.preventDefault()
        var tr = $(this).parent().parent();
        var url = $(this).data('url');
        var token = $(this).data('token');
        var data = {'_token': token}
        console.log(data);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: url,
                    data: data,
                    success: function (data) {
                        message(data.message, data.status)
                        tr.remove();
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        message(errorThrown, 'error')
                    }
                });
            }
        })
    })
    const swalWithLoader = Swal.mixin({
        allowOutsideClick: false,
        showConfirmButton: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });
    function showLoader(){
        swalWithLoader.fire({
            title: 'Loading...',
        });
    }
    function hideLoader(){
        Swal.close();
    }
    function message(msg,status){
        Swal.fire(msg,'',status)
    }
</script>
