<?  // LOGIN SCRIPT

    if(empty($_POST))
        echo_end(-1);

    $email = $_POST['email'];
    $pass = md5(md5($_POST['pass']));
    $new_hash = gen_str();

    if(get_db_count("devs", "email", $email) != 1)
        echo_end(-1);

    $db_pass = db_select_req("pass", "devs", "email", $email);

    if($db_pass != $pass)
        echo_end(-1);

    # If all right do it
    $id = db_select_req("id", "devs", "email", $email);
    $sql = mysql_query("UPDATE `devs` SET `hash` = '$new_hash' WHERE `id` = '$id'");
    setcookie ('id', $id, time() + sMonth, '/');
    setcookie ('hash', $new_hash, time() + sMonth, '/');
    echo_end("5");