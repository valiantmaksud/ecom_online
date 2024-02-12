const Toast = Swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

function showAlertMessage(message, time = 1000, type = 'error') {

    swal.fire({
        position: "top-end", 
        width: 400, 
        icon: type, 
        title: "<b>" + message + "</b>",
        showConfirmButton: !1, 
        timer: time
    });
}
function showToastr(message, type = 'error') {

    Toast.fire({
        icon: type,
        title: "<b>" + message + "</b>",
    })
}



