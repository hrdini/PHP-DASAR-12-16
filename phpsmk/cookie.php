    <?php 

    $cookie_name = 'user';
    $cookie_value = 'dini';

    setcookie($cookie_name, $cookie_value);

    $cookie_value = 'Febri';

    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name];

    setcookie("User", "", time() - 3600);

    echo '</br>';

    var_dump($_COOKIE);
    ?>