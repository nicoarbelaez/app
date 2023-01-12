$(document).ready(function() {

    $.ajax({
        url: "http://localhost/app/history/gethistoryjson",
        type: "GET",
        dataType: "json",
        success: function(data) {
            const translate = {'transfer' : 'Transferencia', 'cash' : 'Efectivo'};
            let template = '';
            data.forEach(element => {
                template += `
                    <div transactionsId="${element.id}">
                        <h2> ID ${element.id} </h2>
                        <span> Valor total: ${element.value_total} </span>
                        <span> Valor neto: ${element.value_net} </span>
                        <span> Metodo de pago: ${translate[element.method_pay]} </span>
                        <p>${element.date}</p>
                    </div>
                `;
                $('#container__history').html(template);
            });
        }
    });
});