<html>
    <head>
        <title>Mon formulaire</title>
    </head>

    <body>
        <form action="ma_page.html" method="POST">
            <label for="field_1">Exemple de champs de formulaire </label>
            <input type="text" name="field_1" value="Tapez tu texte" />

            <input type="submit" value="Envoyer" />

            <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        </form>
    </body>
</html>