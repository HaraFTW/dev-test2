<?php

    function login($user, $password)
    {
        // insert whatever validation is needed

        // if input is valid
        // find user in DB, I used simple PDO in this case
        $query = "SELECT * FROM users WHERE user = ? AND password = MD5(?)"; // MD5 can be repaced with SHA or whatever hashing is needed; but I think it's better to use PHP's password_hash() and password_verify()
        $sql = $dbp->prepare($query);
        $sql->execute(array($user, $password));
        $user_info = $sql->fetch(PDO::FETCH_ASSOC);

        if(!empty($user_info))
            $_SESSION['user'] = $user_info;
    }

    function logout()
    {
        $_SESSION['user'] = null;
    }

    // P.S.: depending on the PHP framework you have built-in tools for login and logout but the task asked for a "simple logic" so here it is, the simplest logic I know