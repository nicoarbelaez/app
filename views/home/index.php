<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include_once 'views/header.php'?>

    <main>
        <div>
            <form id="form__coin">
                <div>
                    <label for="coin_50">
                        <img class="w-20" src="public/img/money__50.svg" alt="Moneda de 50">
                    </label>
                    <input type="number" name="coin_50" id="coin_50">
                </div>
                <div>
                    <label for="coin_100">
                        <img class="w-20" src="public/img/moneda_100_235.png" alt="Moneda de 100">
                    </label>
                    <input type="number" name="coin_100" id="coin_100">
                </div>
                <div>
                    <label for="coin_200">
                        <img class="w-20" src="public/img/moneda_200_235.png" alt="Moneda de 200">
                    </label>
                    <input type="number" name="coin_200" id="coin_200">
                </div>
                <div>
                    <label for="coin_500">
                        <img class="w-20" src="public/img/moneda_500_235.png" alt="Moneda de 500">
                    </label>
                    <input type="number" name="coin_500" id="coin_500">
                </div>
                <div>
                    <label for="coin_1000">
                        <img class="w-20" src="public/img/money__1000.svg" alt="Moneda de 1000">
                    </label>
                    <input type="number" name="coin_1000" id="coin_1000">
                </div>
                <div>
                    <button id="btn__submit-coin">Enviar</button>
                </div>
            </form>
        </div>
    </main>

    <script src="public/js/home.js"></script>
    <?php include_once 'views/footer.php'?>
</body>
</html>