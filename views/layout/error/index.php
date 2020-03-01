<?php /* TOMO - PRATAMA STUDIO */
DECLARE(STRICT_TYPES=1); ?>

<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
    <title>Page not Found!</title>
    <style>body {
            background-color: yellow;
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
<article>
    <h1>404 Not Found!</h1>
    <div>
        <p>We are sorry, Page not Found! Please try again later... or Comeback to main page. Thank You!</p>
        <p>These Error Page can be customize in <i>views/layout/error/index.php</i></p>
        <p><a href="<?php echo base_url(); ?>">&mdash; Main Page</a></p>
        <p><strong>Pratama MVC Copyright &copy; <?php echo date('Y', intval(microtime(true))); ?> by: PRATAMA
                STUDIO</strong></p>
    </div>
</article>
</body>
</html>