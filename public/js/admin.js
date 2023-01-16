$(document).ready(function () {
  $.ajax({
    url: "http://localhost/app/f297a57a5a743894a0e4a801fc3/getUncompletedTransactions",
    type: "GET",
    dataType: "json",
    success: function (response) {
      let template = "";
      response.forEach((element) => {
        template += `
                    <tr class="bg-white border-b-2" transactionsId="${element.id}">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            ${element.id}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" id="document_user">${element.document_user}</td>
                        <td class="px-6 py-4 whitespace-nowrap">NOMBRE</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">
                            $ ${element.value_total}
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">
                           $ ${element.value_net}
                          </span>
                        </td>
                        <td class="px-6 py-4">${element.date}</td>
                        <td class="px-6 py-4 flex gap-4 whitespace-nowrap">
                            <select  name="method_pay" id="method_pay"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 p-2.5">
                              <option value="">Forma de pago</option>
                              <option value="transfer">Transferencia</option>
                              <option value="cash">Efectivo</option>
                            </select>
                            <button id="btn__completed" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg shadow-xl text-sm px-5 py-2.5 text-center mr-2 mb-2">Completar</button>
                            <button id="btn__delete" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg shadow-xl text-sm px-5 py-2.5 text-center mr-2 mb-2">Eliminar</button>
                        </td>
                    </tr>
                `;
        $("#table__uncompleted").html(template);
      });
    },
  });
});

$(document).on("click", "#btn__completed", function (e) {
  let element = $(this).parent().parent();
  var id = $(element).attr("transactionsId");
  var method_pay = $(element).find("#method_pay").val();
  var document_user = $(element).find("#document_user").text();

  const translate = { transfer: "Transferencia", cash: "Efectivo" };
  const validMethods = ["transfer", "cash"];

  if (
    method_pay == "" ||
    method_pay == null ||
    !validMethods.includes(method_pay)
  ) {
    Swal.fire({
      title: "Error",
      text: "Debe seleccionar una forma de pago",
      icon: "error",
      confirmButtonText: "Aceptar",
    });
    return false;
  }

  Swal.fire({
    title: "¿Deseas completar la transacción?",
    footer: "No podras revertir esta accion",
    html: `
            <b> ID: </b> ${id} <br>
            <b> No. Documento: </b> ${document_user} <br>
            <b> Forma de pago: </b> ${translate[method_pay]}
        `,
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, completar!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "http://localhost/app/f297a57a5a743894a0e4a801fc3/completedTransaction",
        type: "POST",
        data: { id: id, method_pay: method_pay, document_user: document_user },
        success: function (response) {
          response = JSON.parse(response);
          const typeAlert = {
            error: "Error",
            success: "Exito",
            warning: "Advertencia",
          };
          Swal.fire({
            title: typeAlert[response["type"]],
            icon: response["type"],
            text: response["message"],
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
          });
          element.remove();
        },
      });
    }
  });

  e.preventDefault();
});

$(document).on("click", "#btn__delete", function (e) {
  var element = $(this).parent().parent();
  var id = $(element).attr("transactionsId");
  var document_user = $(element).find("#document_user").text();

  Swal.fire({
    title: "¿Deseas eliminar la transacción?",
    footer: "No podras revertir esta accion",
    html: `
            <b> ID: </b> ${id} <br>
            <b> No. Documento: </b> ${document_user}
        `,
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "http://localhost/app/f297a57a5a743894a0e4a801fc3/deleteTransaction",
        type: "POST",
        data: { id: id, document_user: document_user },
        success: function (response) {
          response = JSON.parse(response);
          const typeAlert = {
            error: "Error",
            success: "Exito",
            warning: "Advertencia",
          };
          Swal.fire({
            title: typeAlert[response["type"]],
            icon: response["type"],
            text: response["message"],
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
          });
          element.remove();
        },
      });
    }
  });
});
