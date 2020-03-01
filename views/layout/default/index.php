<?php /* TOMO - PRATAMA STUDIO */
DECLARE(STRICT_TYPES=1); ?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
    <title><?php echo $title; ?></title>
    <style>body {
            text-align: center;
            padding: 5%
        }

        h1 {
            font-size: 50px
        }

        body {
            font: 20px Helvetica, sans-serif;
            color: #333
        }

        article {
            text-align: center;
            display: block;
            text-align: left;
            width: 80%;
            margin: 0 auto;
            padding: 0px auto;
        }

        a {
            color: #dc8100;
            text-decoration: none
        }

        a:hover {
            color: #333;
            text-decoration: none
        }</style>
</head>
<body>
<?php require_once $_view; ?>
</body>
</html>
