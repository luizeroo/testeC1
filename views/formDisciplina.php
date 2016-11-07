<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Disciplina</title>
    </head>
    <body>
        <h2> Disciplina </h2>
        <form action='/index.php/welcome/inserirDisciplina' method='post'>
            <input type="text" name="nome">
            <input type="text" name='descricao'>
            <input type='submit' vaue='submit'>
        </form>
        
        <h2> Professor fez esse </h2>
        <form action='/index.php/disciplina/cadastro' method='post'>
            <input type="text" name="nome" placeholder='Nome'>
            <textarea name='descricao' placeholder='Descricao'></textarea>
            <input type='submit' vaue='submit'>
        </form>
    </body>
</html>