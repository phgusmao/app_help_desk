<?php

    session_start();

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    // //remover indices do array de sessão
    // //unset()

    // unset($_SESSION['x']); //remove o indice apenas se existe

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    // //destruir a variavel de sessão
    // //session_destroy()

    // session_destroy(); //será destruída, mas apenas na próxima sessão que não existirá mais. Tendo que forçar um redirecionamento

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    session_destroy();
    header('Location: index.php');

?>