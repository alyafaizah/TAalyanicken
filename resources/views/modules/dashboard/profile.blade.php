$(function() {


// @TODO 2
$('#btn-submit').click(function() {

    // @TODO 3
    var email = $('input[name="email-user"]').val();
    var password = $('input[name="password"]').val();

    // @TODO 4
    data_input = {

        "email"     : email,
        "password"  : password,
    }


    // @TODO 5
    $.ajax({

        url : "{{ url('login/proses') }}",
        data: data_input,
        dataType: "json",
        success : function ( response ) {

            if ( response.status == "success" ) {

                swal.fire({
                    text: "Login Berhasil, Selamat Datang di KANSA!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                }).then(function( tombol ) {
                    
                    // jika tombol 
                    if ( tombol.isConfirmed ) {

                        window.location.href = response.url;
                    }

                });
            } else {

                swal.fire({
                    text: response.status,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-danger"
                    }
                });
            }
        }
    })
});


$('#btn-submit-register').click(function() {

    // here . . .
})
})