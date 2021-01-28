<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php-badwords</title>
    </head>
    <body>
        <?php
            $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
            $badWord = 'Lorem';
            $replace = str_replace($badWord, '***', $paragrafo);
        ?>

        <p> <?php echo $replace;?> </p>

        <span>Lunghezza paragrafo: <?php echo strlen($paragrafo);?>.</span>
    </body>
</html>