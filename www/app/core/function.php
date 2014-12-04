<?  // Functions

    function go($addr) {
        header("Location: /".$addr);
    }

    function not_found_f() {
        go("404");
    }

    function include_end($inc) {
        include $inc;
        exit();
    }

    function echo_end($code) {
        echo $code;
        exit();
    }

    function get_page($page_name) {
        include PAGES_PATH.$page_name.'.php';
    }

    function get_template($tml_name) {
        include '/template/'.$tml_name.'.php';
    }

    function is_auth() {
        if(!empty($_COOKIE['id']) && !empty($_COOKIE['hash']))
            return true;

        return false;
    }

    function db_select_req($select, $table, $cond_key, $cond_value) {
        $request = mysql_query("SELECT `$select` FROM `$table` WHERE `$cond_key` = '$cond_value'");
        $request = mysql_fetch_array($request);

        return $request[0];
    }

    function get_db_count($table, $field, $data) {
        $sql = mysql_query("SELECT count(1) FROM `$table` WHERE `$field` = '$data'");
        $sql = mysql_fetch_array($sql);

        return $sql[0];
    }

    function gen_str($length = 6) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
        $str = "";
        $sLen = strlen($chars) - 1;

        while (strlen($str) < $length)
            $str .= $chars[mt_rand(0, $sLen)];

        return $str;
    }