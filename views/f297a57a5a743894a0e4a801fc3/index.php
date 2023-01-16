<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="public/css/default.css">
</head>
<body>
    <?php include_once 'views/header.php'?>
    <main>  
        <div class="container mx-auto relative overflow-x-auto shadow-xl sm:rounded-lg" >
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">No. Comprobante</th>
                        <th scope="col" class="px-6 py-3">No. Documento</th>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3">Total</th>
                        <th scope="col" class="px-6 py-3">Total neto</th>
                        <th scope="col" class="px-6 py-3">Fecha</th>
                        <th scope="col" class="px-6 py-3">Opcion</th>
                    </tr>
                </thead>
                <tbody class="divide-y-1 " id="table__uncompleted">
                </tbody>
            </table>
        </div>

    </main>
    <script src="public/js/admin.js"></script>
    <?php include_once 'views/footer.php'?>
</body>
</html>
