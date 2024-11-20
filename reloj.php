<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reloj</title>
</head>
<body>

<div id="clock"><?php echo date('H:i:s'); ?></div>

    <script>
        function startClock() {
            const clock = document.getElementById('clock');

            setInterval(() => {
                const ahora = new Date();
                const horas = String(ahora.getHours()).padStart(2, '0');
                const minutos = String(ahora.getMinutes()).padStart(2, '0');
                const segundos = String(ahora.getSeconds()).padStart(2, '0');
                
                clock.textContent = `${horas}:${minutos}:${segundos}`;
            }, 1000);
        }

        window.onload = startClock;
    </script>
    
</body>
</html>
