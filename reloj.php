<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reloj</title>
</head>
<body>

<div id="clock"><?php echo date('H:i:s'); ?></div>

<p id="texto">Texto</p>

<script>
    function startClock() {
        const clock = document.getElementById('clock');
        var parrafo = document.getElementById('texto');

        setInterval(() => {
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
        }, 1000);
    }

    window.onload = startClock;
</script>

</body>
</html>
