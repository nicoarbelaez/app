$(document).ready(function() {

    $.ajax({
        url: "http://localhost/app/f297a57a5a743894a0e4a801fc3/getUncompletedTransactions",
        type: "GET",
        dataType: "json",
        success: function(response) {
            let template = '';
            response.forEach(element => {
                template += `
                    <div transactionsId="${element.id}">
                        <h2> ID ${element.id} </h2>
                        <h3 id="document_user">${element.document_user}</h3>
                        <span> Valor total: ${element.value_total}</span>
                        <span> Valor neto: ${element.value_net}</span>
                        <p>${element.date}</p>
                        <button id="btn__completed">Completar</button>
                        <select name="method_pay" id="method_pay">
                            <option value="">Forma de pago</option>
                            <option value="transfer">Transferencia</option>
                            <option value="cash">Efectivo</option>
                        </select>
                        <button id="btn__delete">Eliminar</button>
                    </div>
                `;
                $('#container__uncompleted').html(template);
            });
        }
    });
});

$(document).on('click', '#btn__completed', function(e) {

    let element = $(this).parent();
    var id = $(element).attr('transactionsId');
    var method_pay = $(element).find('#method_pay').val();
    var document_user = $(element).find('#document_user').text();

    const translate = {'transfer' : 'Transferencia', 'cash' : 'Efectivo'};
    const validMethods = ['transfer', 'cash'];

    if(method_pay == '' || method_pay == null || !validMethods.includes(method_pay)) {
        Swal.fire({
            title: 'Error',
            text: 'Debe seleccionar una forma de pago',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
        return false;
    }

    Swal.fire({
        title: '¿Deseas completar la transacción?',
        footer: 'No podras revertir esta accion',
        html: `
            <b> ID: </b> ${id} <br>
            <b> No. Documento: </b> ${document_user} <br>
            <b> Forma de pago: </b> ${translate[method_pay]}
        `,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, completar!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "http://localhost/app/f297a57a5a743894a0e4a801fc3/completedTransaction",
                type: "POST",
                data: {id: id, method_pay: method_pay, document_user: document_user},
                success: function(response) {

                    response = JSON.parse(response);
                    const typeAlert = {'error': 'Error', 'success': 'Exito', 'warning': 'Advertencia'}
                    Swal.fire({
                        title: typeAlert[response['type']],
                        icon: response['type'],
                        text: response['message'],
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    });
                    element.remove();
                }
            });
        }
    });

    e.preventDefault();
});

$(document).on('click', '#btn__delete', function(e) {
    var element = $(this).parent()
    var id = $(element).attr('transactionsId');
    var document_user = $(element).find('#document_user').text();

    Swal.fire({
        title: '¿Deseas eliminar la transacción?',
        footer: 'No podras revertir esta accion',
        html: `
            <b> ID: </b> ${id} <br>
            <b> No. Documento: </b> ${document_user}
        `,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "http://localhost/app/f297a57a5a743894a0e4a801fc3/deleteTransaction",
                type: "POST",
                data: {id: id, document_user: document_user},
                success: function(response) {

                    response = JSON.parse(response);
                    const typeAlert = {'error': 'Error', 'success': 'Exito', 'warning': 'Advertencia'}
                    Swal.fire({
                        title: typeAlert[response['type']],
                        icon: response['type'],
                        text: response['message'],
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    });
                    element.remove();
                }
            });
        }
    });
});