<?php
    require 'db.php';
    $page = 1;
    $errors = false;
    $errors2 = array();
    $errors3 = array();
    $q1 = 0;
    $q2 = 0;
    $q3 = 0;
    if ( isset($_GET['id']) )
    {
        if ( $_GET['id'] == 1 )
        {
            header('Location: index.php');
        }
        if ( $_GET['id'] == 2 )
        {
            $page = 2;
        }
        if ( $_GET['id'] == 3 )
        {
            $page = 3;
        }
    }
    if ( $page == 1 )
    {
        if ( empty($_COOKIE['loged']) ) {
            $data = $_POST;
            if ( isset( $data['send_1'] ) )
            {
                if ( $data['user_login_1'] )
                {
                    if ( strlen($data['user_login_1']) < 3 || strlen($data['user_login_1']) > 12 )
                    {
                        $errors = 'Ati introdus incorect!';
                        $q1 = 1;
                    }
                    elseif ( strpos(' '.$data['user_login_1'].' ', '!') || strpos(' '.$data['user_login_1'].' ', '@') || strpos(' '.$data['user_login_1'].' ', '#')    ||
                    strpos(' '.$data['user_login_1'].' ', '$') || strpos(' '.$data['user_login_1'].' ', '%') || strpos(' '.$data['user_login_1'].' ', '^')             ||
                    strpos(' '.$data['user_login_1'].' ', '&') || strpos(' '.$data['user_login_1'].' ', '*') || strpos(' '.$data['user_login_1'].' ', '(')             ||
                    strpos(' '.$data['user_login_1'].' ', ')') ||
                    strpos(' '.$data['user_login_1'].' ', '=') || strpos(' '.$data['user_login_1'].' ', '+') || strpos(' '.$data['user_login_1'].' ', '`')             ||
                    strpos(' '.$data['user_login_1'].' ', '~') || strpos(' '.$data['user_login_1'].' ', '|') || strpos(' '.$data['user_login_1'].' ', '/')             ||
                    strpos(' '.$data['user_login_1'].' ', '|') || strpos(' '.$data['user_login_1'].' ', '[') || strpos(' '.$data['user_login_1'].' ', ']')             || 
                    strpos(' '.$data['user_login_1'].' ', '{') || strpos(' '.$data['user_login_1'].' ', '}') || strpos(' '.$data['user_login_1'].' ', '"')             || 
                    strpos(' '.$data['user_login_1'].' ', "'") || strpos(' '.$data['user_login_1'].' ', '№') || strpos(' '.$data['user_login_1'].' ', ':')             || 
                    strpos(' '.$data['user_login_1'].' ', ';') || strpos(' '.$data['user_login_1'].' ', '?') || strpos(' '.$data['user_login_1'].' ', '{')             || 
                    strpos(' '.$data['user_login_1'].' ', '<') || strpos(' '.$data['user_login_1'].' ', '>') || preg_match("/htt/i", ' '.$data['user_login_1'].' ')    ||
                    preg_match("/xxx/i", ' '.$data['user_login_1'].' ') || preg_match("/porn/i", ' '.$data['user_login_1'].' ') )
                    {
                        $errors = 'Ati introdus incorect!';
                        $q1 = 1;
                    }
                    else
                    {
                        function new_key() {
                            $key1 = rand(0,9);
                            $key1 = (string)$key1;
                            $key2 = rand(0,9);
                            $key2 = (string)$key2;
                            $key3 = rand(0,9);
                            $key3 = (string)$key3;
                            $key4 = rand(0,9);
                            $key4 = (string)$key4;
                            $key = $key1.$key2.$key3.$key4;
                            echo $key;
                        }
                        new_key();
                    }
                }
                else
                {
                    $errors = 'Ati introdus incorect!';
                    $q1 = 1;
                }
            }
        }
        if ( isset($_POST['loged']) ) {
            $key = $_POST['loged'];
            $user = R::findOne('users', 'key = ?', array($key));

        }
    }
    if ( $page == 2 )
    {
        $data = $_POST;
        if ( isset( $data['send_2'] ) )
        {
            if ( $data['user_login_2'] )
            {
                if ( strpos(' '.$data['user_login_2'].' ', '!') || strpos(' '.$data['user_login_2'].' ', '@') || strpos(' '.$data['user_login_2'].' ', '#')        ||
                strpos(' '.$data['user_login_2'].' ', '$') || strpos(' '.$data['user_login_2'].' ', '%') || strpos(' '.$data['user_login_2'].' ', '^')             ||
                strpos(' '.$data['user_login_2'].' ', '&') || strpos(' '.$data['user_login_2'].' ', '*') || strpos(' '.$data['user_login_2'].' ', '(')             ||
                strpos(' '.$data['user_login_2'].' ', ')') ||
                strpos(' '.$data['user_login_2'].' ', '=') || strpos(' '.$data['user_login_2'].' ', '+') || strpos(' '.$data['user_login_2'].' ', '`')             ||
                strpos(' '.$data['user_login_2'].' ', '~') || strpos(' '.$data['user_login_2'].' ', '|') || strpos(' '.$data['user_login_2'].' ', '/')             ||
                strpos(' '.$data['user_login_2'].' ', '|') || strpos(' '.$data['user_login_2'].' ', '[') || strpos(' '.$data['user_login_2'].' ', ']')             || 
                strpos(' '.$data['user_login_2'].' ', '{') || strpos(' '.$data['user_login_2'].' ', '}') || strpos(' '.$data['user_login_2'].' ', '"')             || 
                strpos(' '.$data['user_login_2'].' ', "'") || strpos(' '.$data['user_login_2'].' ', '№') || strpos(' '.$data['user_login_2'].' ', ':')             || 
                strpos(' '.$data['user_login_2'].' ', ';') || strpos(' '.$data['user_login_2'].' ', '?') || strpos(' '.$data['user_login_2'].' ', '{')             || 
                strpos(' '.$data['user_login_2'].' ', '<') || strpos(' '.$data['user_login_2'].' ', '>') || preg_match("/htt/i", ' '.$data['user_login_2'].' ')    ||
                preg_match("/xxx/i", ' '.$data['user_login_2'].' ') || preg_match("/porn/i", ' '.$data['user_login_2'].' ') || strlen($data['user_login_2']) < 3   ||
                strlen($data['user_login_2']) > 12 )
                {
                    $errors2[] = 'Nume de utilizator incorect!';
                    $q2 = 1;
                }
            }
            else
            {
                $errors2[] = 'Introduceti numele de utilizator!';
                $q2 = 1;
            }
            if ( $data['user_name_1'] )
            {
                if ( strpos(' '.$data['user_name_1'].' ', '!') || strpos(' '.$data['user_name_1'].' ', '@') || strpos(' '.$data['user_name_1'].' ', '#')        ||
                strpos(' '.$data['user_name_1'].' ', '$') || strpos(' '.$data['user_name_1'].' ', '%') || strpos(' '.$data['user_name_1'].' ', '^')             ||
                strpos(' '.$data['user_name_1'].' ', '&') || strpos(' '.$data['user_name_1'].' ', '*') || strpos(' '.$data['user_name_1'].' ', '(')             ||
                strpos(' '.$data['user_name_1'].' ', ')') ||
                strpos(' '.$data['user_name_1'].' ', '=') || strpos(' '.$data['user_name_1'].' ', '+') || strpos(' '.$data['user_name_1'].' ', '`')             ||
                strpos(' '.$data['user_name_1'].' ', '~') || strpos(' '.$data['user_name_1'].' ', '|') || strpos(' '.$data['user_name_1'].' ', '/')             ||
                strpos(' '.$data['user_name_1'].' ', '|') || strpos(' '.$data['user_name_1'].' ', '[') || strpos(' '.$data['user_name_1'].' ', ']')             || 
                strpos(' '.$data['user_name_1'].' ', '{') || strpos(' '.$data['user_name_1'].' ', '}') || strpos(' '.$data['user_name_1'].' ', '"')             || 
                strpos(' '.$data['user_name_1'].' ', "'") || strpos(' '.$data['user_name_1'].' ', '№') || strpos(' '.$data['user_name_1'].' ', ':')             || 
                strpos(' '.$data['user_name_1'].' ', ';') || strpos(' '.$data['user_name_1'].' ', '?') || strpos(' '.$data['user_name_1'].' ', '{')             || 
                strpos(' '.$data['user_name_1'].' ', '<') || strpos(' '.$data['user_name_1'].' ', '>') || preg_match("/htt/i", ' '.$data['user_name_1'].' ')    ||
                preg_match("/xxx/i", ' '.$data['user_name_1'].' ') || preg_match("/porn/i", ' '.$data['user_name_1'].' ') || strlen($data['user_name_1']) < 3   ||
                strlen($data['user_name_1']) > 16 )
                {
                    $errors2[] = 'Nume incorect!';
                    $q2 = 1;
                }
            }
            else
            {
                $errors2[] = 'Introduceti numele dumneavoastra!';
                $q2 = 1;
            }
            if ( $data['user_surname_1'] )
            {
                if ( strpos(' '.$data['user_surname_1'].' ', '!') || strpos(' '.$data['user_surname_1'].' ', '@') || strpos(' '.$data['user_surname_1'].' ', '#')      ||
                strpos(' '.$data['user_surname_1'].' ', '$') || strpos(' '.$data['user_surname_1'].' ', '%') || strpos(' '.$data['user_surname_1'].' ', '^')           ||
                strpos(' '.$data['user_surname_1'].' ', '&') || strpos(' '.$data['user_surname_1'].' ', '*') || strpos(' '.$data['user_surname_1'].' ', '(')           ||
                strpos(' '.$data['user_surname_1'].' ', ')') ||
                strpos(' '.$data['user_surname_1'].' ', '=') || strpos(' '.$data['user_surname_1'].' ', '+') || strpos(' '.$data['user_surname_1'].' ', '`')           ||
                strpos(' '.$data['user_surname_1'].' ', '~') || strpos(' '.$data['user_surname_1'].' ', '|') || strpos(' '.$data['user_surname_1'].' ', '/')           ||
                strpos(' '.$data['user_surname_1'].' ', '|') || strpos(' '.$data['user_surname_1'].' ', '[') || strpos(' '.$data['user_surname_1'].' ', ']')           || 
                strpos(' '.$data['user_surname_1'].' ', '{') || strpos(' '.$data['user_surname_1'].' ', '}') || strpos(' '.$data['user_surname_1'].' ', '"')           || 
                strpos(' '.$data['user_surname_1'].' ', "'") || strpos(' '.$data['user_surname_1'].' ', '№') || strpos(' '.$data['user_surname_1'].' ', ':')           || 
                strpos(' '.$data['user_surname_1'].' ', ';') || strpos(' '.$data['user_surname_1'].' ', '?') || strpos(' '.$data['user_surname_1'].' ', '{')           || 
                strpos(' '.$data['user_surname_1'].' ', '<') || strpos(' '.$data['user_surname_1'].' ', '>') || preg_match("/htt/i", ' '.$data['user_surname_1'].' ')  ||
                preg_match("/xxx/i", ' '.$data['user_surname_1'].' ') || preg_match("/porn/i", ' '.$data['user_surname_1'].' ') || strlen($data['user_surname_1']) < 3 || 
                strlen($data['user_surname_1']) > 16 )
                {
                    $errors2[] = 'Prenume incorect!';
                    $q2 = 1;
                }
            }
            else
            {
                $errors2[] = 'Introduceti Familia';
                $q2 = 1;
            }
            if ( strlen($data['user_password_2']) < 5 || strlen($data['user_password_3']) > 16 )
            {
                $errors2[] = 'Parola incorecta!';
                $q2 = 1;
            }
            if ( $data['user_password_2'] != $data['user_password_3'] )
            {
                $errors2[] = 'Parolele nu sunt identice!';
                $q2 = 1;
            }
            
            if ( $data['user_e-mail_1'] )
            {
                if ( ! preg_match("/@/", $data['user_e-mail_1']) )
                {
                    $errors2[] = 'Introduceti e-mail-ul dumneavoastra!';
                }
                elseif ( strlen($data['user_e-mail_1']) < 5 || strlen($data['user_e-mail_1']) > 25 )
                {
                    $errors2[] = 'Introduceti e-mail-ul dumneavoastra!';
                }
            }
            else
            {
                $errors2[] = 'Introduceti e-mail-ul dumneavoastra!';
            }
            
            if ( ! (int)$data['user_phone'] )
            {
                $errors2[] = 'Introduceti numarul de telefon corect!';
                $q2 = 1;
            }
            
        }
    }
    R::close();
?>
<?php if ($page == 1):?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For 7C</title>
    <link rel="stylesheet" type="text/css" href="sources/style.css">
    <?php if ( $q1 == 1 ):?>
    <link rel="stylesheet" type="text/css" href="sources/style4.css">
    <?php endif?>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif|Philosopher" rel="stylesheet">
    <!--<link rel="shortcut icon" href="images/index.jpg" type="image/x-icon">-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js" defer></script>
</head>
<body>
    <div id="particles-js"></div>
    <script type="text/javascript" src="sources/script.js" defer></script>
    <div id="page-wrapper">
        <form action="" method="post">
            <label>Autorizare</label>
            <?php if ( $q1 == 1 ):?>
            <div class="errors"><p><?php echo $errors?></p></div>
            <?php endif?>
            <input type="text" name="user_login_1" placeholder="Numele de utilizator">
            <input type="password" name="user_password_1" placeholder="Parola"><br/>
            <span>Tinema minte </span><input type="checkbox" name="user_remember">
            <input type="submit" name="send_1" value="Incearca">
        </form>
        <a href="index.php?id=2">Registrare</a><br/>
        <a href="index.php?id=3">Nu-mi amintesc parola!</a>
    </div>
</body>
</html>
<?php endif?>
<?php if ($page == 2):?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For 7C</title>
    <link rel="stylesheet" type="text/css" href="sources/style2.css">
    <?php if ( $q2 == 1 ):?>
    <link rel="stylesheet" type="text/css" href="sources/style4.css">
    <?php endif?>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif|Philosopher" rel="stylesheet">
    <!--<link rel="shortcut icon" href="images/index.jpg" type="image/x-icon">-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js" defer></script>
</head>
<body>
    <div id="particles-js"></div>
    <script type="text/javascript" src="sources/script.js" defer></script>
    <div id="page-wrapper">
        
        <form action="" method="post">
            <label>Registrare</label>
            <?php if ( $q2 == 1 ):?>
            <div class="errors"><p><?php echo array_shift($errors2)?></p></div>
            <?php endif?>
            <?php if ( $q2 == 1 ):?>
            <input type="text" name="user_login_2" value="<?= $_POST['user_login_2']?>" placeholder="Numele de utilizator">
            <input type="text" name="user_name_1" value="<?= $_POST['user_name_1']?>" placeholder="Numele">
            <input type="text" name="user_surname_1" value="<?= $_POST['user_surname_1']?>" placeholder="Familia">
            <input type="password" name="user_password_2" value="<?= $_POST['user_password_2']?>" placeholder="Parola">
            <input type="password" name="user_password_3" value="<?= $_POST['user_password_3']?>" placeholder="Repeta parola">
            <input type="email" name="user_e-mail_1" value="<?= $_POST['user_e-mail_1']?>" placeholder="E-mail">
            <input type="number" name="user_phone" value="<?= $_POST['user_phone']?>" placeholder="Numarul de telefon"><br/>
            <input type="radio" name="user_floor"><span>Masculin</span><br/>
            <input type="radio" name="user_floor"><span>Femein</span>
            <input type="submit" name="send_2" value="Incearca">
            <?php endif?>
            <?php if ( $q2 == 0 ):?>
            <input type="text" name="user_login_2" placeholder="Numele de utilizator">
            <input type="text" name="user_name_1" placeholder="Numele">
            <input type="text" name="user_surname_1" placeholder="Familia">
            <input type="password" name="user_password_2" placeholder="Parola">
            <input type="password" name="user_password_3" placeholder="Repeta parola">
            <input type="email" name="user_e-mail_1" placeholder="E-mail">
            <input type="number" name="user_phone" placeholder="Numarul de telefon"><br/>
            <input type="radio" name="user_floor"><span>Masculin</span><br/>
            <input type="radio" name="user_floor"><span>Femein</span>
            <input type="submit" name="send_2" value="Incearca">
            <?php endif?>
        </form>
        <a href="index.php">Inapoi</a><br/>
    </div>
</body>
</html>
<?php endif?>
<?php if ($page == 3):?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For 7C</title>
    <link rel="stylesheet" type="text/css" href="sources/style3.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif|Philosopher" rel="stylesheet">
    <!--<link rel="shortcut icon" href="images/index.jpg" type="image/x-icon">-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js" defer></script>
</head>
<body>
    <div id="particles-js"></div>
    <script type="text/javascript" src="sources/script.js" defer></script>
    <div id="page-wrapper">
        <form action="" method="post">
            <label>Recuperare</label><br/>
            <label>Etap 1</label>
            <div id="etap"><div id="etap_level"></div></div>
            <input type="email" name="user_e-mail_2" placeholder="E-mail">
            <input type="submit" name="send_3" value="Incearca">
        </form>
        <a href="index.php">Inapoi</a><br/>
    </div>
</body>
</html>
<?php endif?>