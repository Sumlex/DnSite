<link rel="stylesheet" type="text/css" href="Code/login.css">

<?php
    require "db.php";

    $data = $_POST;
    
    if( isset($data['do_login']))
    {
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if ($user)
        {
            //логин существует
            if( password_verify($data['password'], $user->password))
            {
                //Все хорошо, логиним пользователя
                $_SESSION['logged_user'] = $user;
                header('Location: index.php');//перенаправление на главную
            }else
            {
                $errors[] = 'Неверный пароль !';
            }
        }else
        {
            $errors[] = 'Пользователь с таким логином не найден!';
        }
        
        if(! empty($errors))
        {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
    }
?>

<form action="login.php" method="post" id="signup">
    
    <p>
        <p><strong>Логин</strong>:</p>
        <input type="text" name="login" value="<?php echo @$data['login'];?>">
    </p>

    <p>
        <p><strong>Пароль</strong>:</p>
        <input type="password" name="password" value="<?php echo @$data['password'];?>">
    </p>

    <p>
        <button type="login" name="do_login">Войти</button>
    </p>
</form>