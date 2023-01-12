$(document).on('click', '#btn__submit-coin', function(e){
    const inputCoin = {
        'coin_50' : $('#coin_50').val(),
        'coin_100' : $('#coin_100').val(),
        'coin_200' : $('#coin_200').val(),
        'coin_500' : $('#coin_500').val(),
        'coin_1000' : $('#coin_1000').val(),
    }

    $.ajax({
        url: 'http://localhost/app/home/submitTransactionCoin',
        type: 'POST',
        data: inputCoin,
        success: function(response){

            response = JSON.parse(response);
            const typeAlert = {'error': 'Error', 'success': 'Enviado', 'warning': 'Advertencia'}
            Swal.fire({
                title: typeAlert[response['type']],
                icon: response['type'],
                text: response['message'],
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true
            });
        }
    });

    e.preventDefault();
});