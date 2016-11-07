<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h2> Contate-nos! :D </h2>
        <form action='/index.php/welcome/postarIgnite' method='post'>
            <input type="text" name="nome">
            <input type='submit' vaue='submit'>
        </form>
        
        <form action='/index.php/welcome/newPostar' method='post'>
            <input type="text" name="nome">
            <input type='submit' vaue='submit'>
        </form>
    </body>
</html>