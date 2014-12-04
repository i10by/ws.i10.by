<?  // REGISTRATION SCRIPT

    if(empty($_POST))
        exit();

    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $pass = md5(md5($_POST['pass']));

    if(get_db_count("devs", "email", $email) > 0)
        echo_end(-1);

    mysql_query("INSERT INTO `devs` VALUES ('', '$email', '$pass', '', '$fname', '$sname', '1')");
    echo_end("5");