<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le conseil</title>

</head>

<body>
    <?php
    include("header.html")
        ?>
    <main class="d-flex flex-column w-75 mx-auto mt-2 gap-3">
        <h3><i class="fa-solid fa-message"></i>Nous contacter</h3>
        <form action="">
            <label for="name">name</label>
            <input type="text" name="name">
            <label for="lastname">lastname</label>
            <input type="text" name="lastname">
            <label for="tel"></label>
            <input type="tel" name="tel">
            <label for="mail">mail</label>
            <input type="mail" name="mail">
            <label for="sujet">sujet</label>
            <input type="text" name="sujet">
            <label for="message">message</label>
            <input type="textearea" name="message">
            <button type="submit"></button>
        </form>
    </main>
    <?php
    include("footer.php")
        ?>
</body>

</html>