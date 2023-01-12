$(document).ready(function () {
    
    $.ajax({
        url: "http://localhost/app/transactions/gettransactionsjson",
        type: "GET",
        dataType: "json",
        success: function(data) {
            template = templateHTML(data);
            $('#container__transactions').html(template);
        }
    });
});

$('#search').keyup(function () { 
    let search = $(this).val();
    $.ajax({
        url: "http://localhost/app/transactions/gettransactionsjson",
        type: "POST",
        data: {search: search},
        success: function(data) {
            template = templateHTML(data);
            $('#container__transactions').html(template);
        }
    });
});

function templateHTML(data) {
    const translate = {'transfer' : 'Transferencia', 'cash' : 'Efectivo'};
    let template = '';
    data.forEach(element => {
        template += `
            <div transactionsId="${element.id}">
                <h2> ID ${element.id} </h2>
                <h3> Documento: ${element.document_user} </h3>
                <span> Valor total: ${element.value_total} </span>
                <span> Valor neto: ${element.value_net} </span>
                <span> Metodo de pago: ${translate[element.method_pay]} </span>
                <p>${element.date}</p>
            </div>
        `;
    });
    return template;
}