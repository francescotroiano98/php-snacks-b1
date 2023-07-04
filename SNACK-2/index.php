<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php snack 2</title>
    </head>
    <body>

        <!--  ACTION : destinatario dei miei dati del form -->
        <!--  Il metodo usato per passare i dati : destinatario dei miei dati del form -->

        <form action="./server.php" method="GET">
            <input type="text" placeholder='write your name' name="name">
            <input type="text" placeholder='write your email' name="email">
            <input type="number" placeholder='write your age' name="age">

            <button type="submit">
                Invia il form
            </button>
        </form>
    </body>
</html>