<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test</title>
        <meta charset="utf-8" />
        <meta name="description" content="Un chiffre aléatoire va être choisi entre 1 et 10 grâce au code PHP qui suit : <?php echo rand(1, 10); ?>" />
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    <?php
		
		$nombredeligne = 0;

		while ($nombredeligne <= 100)
		{
			echo '<p>' . $nombredeligne .' Je ne dois pas mentir à la maitresse !</p>';
			$nombredeligne++;
		}
	?>


    </body>
</html>