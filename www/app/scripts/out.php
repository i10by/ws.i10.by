<?  // LOGOUT
    header("Location: /in");

    setcookie ('id', "", time() - 1, '/');
    setcookie ('hash', "", time() - 1, '/');