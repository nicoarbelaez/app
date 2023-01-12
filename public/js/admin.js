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

    var element = $(this).parent();
    var id = $(element).attr('transactionsId');
    var method_pay = $(element).find('#method_pay').val();
    var document_user = $(element).find('#document_user').text();

    let validMethods = ['transfer', 'cash'];
    if(method_pay == '' || method_pay == null || !validMethods.includes(method_pay)) {
        alert('Debe seleccionar una forma de pago');
        return false;
    }

    if(confirm('Desear completar la transaccion con id: ' + id)) {
        $.ajax({
            url: "http://localhost/app/f297a57a5a743894a0e4a801fc3/completedTransaction",
            type: "POST",
            data: {id: id, method_pay: method_pay, document_user: document_user},
            success: function(response) {
                element.remove();
            }
        });
    }
    e.preventDefault();
});

$(document).on('click', '#btn__delete', function(e) {
    var element = $(this).parent()
    var id = $(element).attr('transactionsId');
    var document_user = $(element).find('#document_user').text();

    if(confirm('Desear eliminar la transaccion con id: ' + id)) {
        $.ajax({
            url: "http://localhost/app/f297a57a5a743894a0e4a801fc3/deleteTransaction",
            type: "POST",
            data: {id: id, document_user: document_user},
            success: function(response) {
                element.remove();
            }
        });
    }
});