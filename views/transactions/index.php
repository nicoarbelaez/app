<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaccion</title>
    <link rel="stylesheet" href="public/css/default.css">
</head>

<body>
    <?php include_once 'views/header.php'?>
    <main>
        <div class="container mx-auto relative overflow-x-auto shadow-xl sm:rounded-lg">
            <div class="pb-4 bg-white">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="search"
                        class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Buscar transación">
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">No. Comprobante</th>
                        <th scope="col" class="px-6 py-3">No. Documento</th>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3">Total</th>
                        <th scope="col" class="px-6 py-3">Total neto</th>
                        <th scope="col" class="px-6 py-3">Fecha</th>
                        <th scope="col" class="px-6 py-3">Metodo</th>
                    </tr>
                </thead>
                <tbody class="divide-y-1 " id="container__transactions">
                </tbody>
            </table>
        </div>
    </main>
    <script src="public/js/transactions.js"></script>
    <?php include_once 'views/footer.php'?>
</body>

</html>