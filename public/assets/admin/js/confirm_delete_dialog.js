function delete_item(url)
{
    console.log(url);
    Swal.fire({
        title: 'Are you sure ?',
        html: "<div style='margin: 10px 0'>You will delete this record permanently !</div>",
        // type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        width:450,
    }).then((result) =>{
        if(result.value){
            $('#deleteItemForm').attr('action', url).submit();
        }
    })

}
