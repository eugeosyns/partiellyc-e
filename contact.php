<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

</head>

<body>
    <?php
    include("header.html")
        ?>
    <main class="d-flex flex-column w-75 mx-auto mt-2 gap-3">
        <h3><i class="fa-solid fa-message"></i>Nous contacter</h3>
        <form action="" class="d-flex flex-column w-50 gap-1 mx-auto">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control">
            <label for="lastname">lastname</label>
            <input type="text" name="lastname" class="form-control">
            <label for="tel">téléphone</label>
            <input type="tel" name="tel" class="form-control">
            <label for="mail">mail</label>
            <input type="mail" name="mail" class="form-control">
            <label for="sujet">sujet</label>
            <input type="text" name="sujet" class="form-control">
            <label for="message">message</label>
            <input type="textearea" name="message" class="form-control">
            <button type="submit" class="w-50 mx-auto" class="form-control">envoyer</button>
        </form>
    </main>
    <?php
    include("footer.php")
        ?>
</body>

</html>