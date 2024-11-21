<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reloj</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <style>
    @font-face {
        font-family: 'Kbzipadeedoodah';
        src: url('Kbzipadeedoodah-YG3j.ttf');
        font-weight: normal;
        font-style: normal;
    }
            body {
            font-family: 'Kbzipadeedoodah', sans-serif;
        }

        #clock {
            font-size: 4rem;
            font-weight: bold;
        }

        body, html {
        background-color: lavender;
        padding: 100px;
        }

        footer {
        text-align: center;
        font-size: 15px;
        margin-top: 100px;
        }
</style>

<body>

    <center>
        <h1 class="display-1">
            <div id="clock" font-family="Kbzipadeedoodah"></div>
        </h1>
        <h1>
            <p id="texto"></p>
        </h1>
    </center>

    <script>
        function startClock() {
            const clock = document.getElementById('clock');
            var parrafo = document.getElementById('texto');

            function actualizarHora() {
                const ahora = new Date();
                const horas = ahora.getHours(); // Devuelve un número
                const minutos = String(ahora.getMinutes()).padStart(2, '0');
                const segundos = String(ahora.getSeconds()).padStart(2, '0');
                
                clock.textContent = `${String(horas).padStart(2, '0')}:${minutos}:${segundos}`;
                
                // Cambiar el mensaje según la hora
                if (horas >= 6 && horas < 12) {
                    parrafo.innerHTML = "Buenos días";
                } else if (horas >= 12 && horas < 18) {
                    parrafo.innerHTML = "Buenas tardes";
                } else {
                    parrafo.innerHTML = "Buenas noches";
                }
            }

            actualizarHora();
            setInterval(actualizarHora, 1000);

        }

        window.onload = startClock;
    </script>

</body>

<footer>
    <b>Página elaborada por: </b> <br>
    Gabriel Vallarta <br>
    Daniela Nuño <br>
    Andrea Cota <br>
    Luis Daniel Cárdenas <br>
    Eric Morales <br>
</footer>
    
</html>
