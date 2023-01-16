$(document).ready(function () {
  $.ajax({
    url: "http://localhost/app/transactions/gettransactionsjson",
    type: "GET",
    dataType: "json",
    success: function (data) {
      $("#container__transactions").html(templateHTML(data));
    },
  });
});

$("#search").keyup(function () {
  let search = $(this).val();
  $.ajax({
    url: "http://localhost/app/transactions/gettransactionsjson",
    type: "POST",
    data: { search: search },
    success: function (data) {
      $("#container__transactions").html(templateHTML(data));
    },
  });
});

function templateHTML(data) {
  const translate = {
    transfer:
      '<span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Transferencia</span>',
    cash: '<span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Efectivo</span>',
  };
  let template = "";
  data.forEach((element) => {
    template += `
            <tr class="bg-white border-b-2" transactionsId="${element.id}">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                       	    ${element.id}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">${
                          element.document_user
                        }</td>
                        <td class="px-6 py-4 whitespace-nowrap">NOMBRE</td>
                        <td class="px-6 py-4 whitespace-nowrap">$ ${
                          element.value_total
                        }</td>
                        <td class="px-6 py-4 whitespace-nowrap">$ ${
                          element.value_net
                        }</td>
                        <td class="px-6 py-4">${element.date}</td>
                        <td class="px-6 py-4">${
                          translate[element.method_pay]
                        }</td>
                    </tr>
        `;
  });
  return template;
}
