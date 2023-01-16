<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="/public/css/output.css" rel="stylesheet">
</head>
<?php include_once 'views/header.php'?>
<main class="bg-slate-100">
    <section>
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
            <div class="flex flex-wrap items-center mx-auto max-w-7xl">
                <div class="w-full lg:max-w-lg lg:w-1/2 rounded-xl">
                    <div>
                        <div class="relative w-full max-w-lg">
                            <div class="relative">
                                <div class="object-cover object-center mx-auto rounded-lg shadow-2xl bg-gray-800 h-96 w-96"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start mt-12 mb-16 text-left lg:flex-grow lg:w-1/2 lg:pl-6 xl:pl-24 md:mb-0 xl:mt-0">
                    <h1 class="mb-8 text-4xl font-bold leading-none tracking-tighter text-gray-900 md:text-7xl lg:text-5xl">
                        Lorem ipsum dolor sit.
                    </h1>
                    <p class="mb-8 text-base leading-relaxed text-left text-gray-500">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque recusandae dolorum error aperiam autem! Recusandae dolores accusantium nam harum esse.
                    </p>
                    <div class="mt-0 lg:mt-6 max-w-7xl sm:flex">
                        <div class="mt-3 rounded-lg sm:mt-0">
                            <button class="items-center block px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-gray-900 rounded-xl hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Hacer solicitud
                            </button>
                        </div>
                        <div class="mt-3 rounded-lg sm:mt-0 sm:ml-3">
                            <button class="items-center block px-10 py-3.5 text-base font-medium text-center text-gray-900 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                ¿Donde nos encontramos?
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="m-auto max-h-max bg-white rounded-lg shadow-2xl container max-w-xs">
            <div class="bg-gray-900 w-full rounded-t-lg items-center block text-base font-medium text-center text-white py-5">
                Hacer solicitud
            </div>
            <div class="p-4 flex flex-col gap-y-5">
                <div class="flex justify-between items-center">
                    <label class="h-20 w-20 rounded-full shadow-lg" for="coin_50">
                        <img src="public/img/moneda_50_235.png" alt="Moneda de 50">
                    </label>
                    <div class="relative">
                        <input type="number" id="coin_50" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label for="floating_outlined" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
				50 Pesos
			</label>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <label class="h-20 w-20 rounded-full shadow-lg" for="coin_100">
                        <img src="public/img/moneda_100_235.png" alt="Moneda de 100">
                    </label>
                    <div class="relative">
                        <input type="number" id="coin_100" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label for="floating_outlined" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
				100 Pesos
			</label>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <label class="h-20 w-20 rounded-full shadow-lg" for="coin_200">
                        <img src="public/img/moneda_200_235.png" alt="Moneda de 200">
                    </label>
                    <div class="relative">
                        <input type="number" id="coin_200" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label for="floating_outlined" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
				200 Pesos
			</label>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <label class="h-20 w-20 rounded-full shadow-lg" for="coin_500">
                        <img src="public/img/moneda_500_235.png" alt="Moneda de 500">
                    </label>
                    <div class="relative">
                        <input type="number" id="coin_500" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label for="floating_outlined" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
				500 Pesos
			</label>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <label class="h-20 w-20 rounded-full shadow-lg" for="coin_1000">
                        <img src="public/img/moneda_1000_235.png" alt="Moneda de 1000">
                    </label>
                    <div class="relative">
                        <input type="number" id="coin_1000" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label for="floating_outlined" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
				1000 Pesos
			</label>
                    </div>
                </div>
                <button class="items-center block py-2 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-gray-900 rounded-xl hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"  id="btn__submit-coin">
                    Hacer solicitud
                </button>
            </div>
        </div>
    </section>

</main>

<script src="public/js/home.js"></script>
<?php include_once 'views/footer.php'?>
</body>

</html>