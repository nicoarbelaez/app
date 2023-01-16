<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Página no encontrada</title>
    <link rel="stylesheet" href="public/css/default.css">
</head>
<body>
    <?php include_once 'views/header.php'?>
    
    <main>
<div class="grid h-screen px-4 bg-white place-content-center dark:bg-gray-900">
  <div class="text-center">
    <h1 class="font-black text-gray-200 text-9xl dark:text-gray-700">404</h1>

    <p
      class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl"
    >
      Vaya, encontró nuestra página 404
    </p>

    <p class="mt-4 text-gray-500 dark:text-gray-400">
      Esto no es una falla, solo un accidente no intencional. Sin embargo, dudamos que esta sea la página que estás buscando y nos disculpamos por ello.
    </p>

    <a
      href="#"
      class="inline-block px-5 py-3 mt-6 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring"
    >
      Go Back Home
    </a>
  </div>
</div>

    </main>

    <?php include_once 'views/footer.php'?>
</body>
</html>