<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="public/css/home.css">
    <?php include_once 'views/header.php'?>

    <main>
        <div class="header header__home">
            <div class="header__box container">
                <div class="header__info">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore dolor laudantium perspiciatis quisquam eos. Fugit recusandae veniam enim.</p>
                    <div class="header__button">
                        <a href="#">¿Donde estamos?</a>
                        <a href="#cont">Empezar</a>
                    </div>
                </div>
                <div class="header_ilustration">
                    <img src="public/img/il__transaction-header.svg" alt="img">
                </div>
            </div>
        </div>
        <div id="container__info" class="container">
            <div id="info1">
                <h1>Lorem ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                <div><img src="public/img/il__transaction-header.svg" alt="img"></div>
            </div>
            <div id="info2">
                <h1>Lorem ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                <div><img src="public/img/il__transaction-header.svg" alt="img"></div>
            </div>
            <div id="info3">
                <h1>Lorem ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                <div><img src="public/img/il__transaction-header.svg" alt="img"></div>
            </div>
        </div>
        <div class="container" id="cont">
            <div class="flag">
                <div>
                    <h1>HOLA</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, voluptatum dolores similique aut natus iure.</p>
                </div>
                <div>
                    <h1>HOLA</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, voluptatum dolores similique aut natus iure.</p>
                </div>
                <div>
                    <h1>HOLA</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, voluptatum dolores similique aut natus iure.</p>
                </div>
            </div>
            <div class="container__coin">
                <div class="input__coin">
                    <label for="coin_50">
                        <img src="public/img/money__50.svg" alt="Moneda de 50">
                    </label>
                    <input type="number" name="coin_50" id="coin_50" placeholder="Moneda de 50">
                </div>
                <div class="input__coin">
                    <label for="coin_100">
                        <img src="public/img/moneda_100_235.png" alt="Moneda de 100">
                    </label>
                    <input type="number" name="coin_100" id="coin_100">
                </div>
                <div class="input__coin">
                    <label for="coin_200">
                        <img src="public/img/moneda_200_235.png" alt="Moneda de 200">
                    </label>
                    <input type="number" name="coin_200" id="coin_200">
                </div>
                <div class="input__coin">
                    <label for="coin_500">
                        <img src="public/img/moneda_500_235.png" alt="Moneda de 500">
                    </label>
                    <input type="number" name="coin_500" id="coin_500">
                </div>
                <div class="input__coin">
                    <label for="coin_1000">
                        <img src="public/img/money__1000.svg" alt="Moneda de 1000">
                    </label>
                    <input type="number" name="coin_1000" id="coin_1000">
                </div>
                <div>
                    <button type="submit">ENVIAR</button>
                </div>
            </div>
        </div>
    </main>
    <?php include_once 'views/footer.php'?>
</body>
</html>