<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h2> Preencha com suas informações. </h2>
        <form action='/index.php/Cliente/cadastro' method='post'>
            <table>
                <tr>
                    <td><input type="text" name="nome" placeholder="Insira seu nome"></td>
                </tr>
                <tr>
                    <td><input type="number" name="idade" placeholder="Insira sua idade"></td>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="cpf" placeholder="Insira seu CPF">
                    </td>
                </tr>
            </table>
            <input type='submit' vaue='submit'>
        </form>
    </body>
</html>