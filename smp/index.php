<html>
<head>
    <meta charset="utf-8">
    <title>Notes</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
	   .fig {
    text-align: center; /* Выравнивание по центру */ 
   }
        body {
            background-image: url("img/qqq.png");
        }



            .form-signin {
            max-width: 300px;
            padding: 1px 29px 29px;
            margin: 0 auto 50px;
            border: 3px solid #fff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 7px;
        }

            .form-signin .form-signin-heading, .form-signin .checkbox {
                margin-bottom: 10px;
            }

            .form-signin input[type="text"], .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }
            }
    </style>
    <style>
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

</head>
    <div class="container">
        <form class="form-signin" action="">
            <h2 class="form-signin-heading"><font color="white">Войти:</font></h2>
            <input type="text" class="input-block-level" placeholder="Имя Пользователя" name="log" required>
            <input type="password" class="input-block-level" placeholder="Пароль" name="pass" required>
            <button class="btn btn-success" type="submit" name="type" value="Вход">        Вход        </button>
            <button class="btn btn-info" type="submit" name="type" value="Регистрация">Регистрация</button>

        </form>
    </div>
		
<?php
    session_start();
    if ($_SESSION['log']!=null){
        echo "
<script>
window.location='notes.php';
</script>
";
    }
    else
    {


$log=$_GET['log'];
$pass=$_GET['pass'];
$type=$_GET['type'];
$db=new MongoClient();
$users=$db->notes->users;
$user = array( "username" => $log, "password" => $pass); 
$content=$users->findOne($user);
if ($content==null and $type=="Вход"){
    echo '<script>
    alert("Неправильнре Имя Пользоватля или Пароль!");
    window.location="index.php";
    </script>';
    return false;
    }
if ($content==null and $type=="Регистрация"){
    $users->insert($user);
    echo '<script>
    alert("Регистрация прошла успешно!");
    </script>';
    return false;
    }
if ($content!=null and $type=="Регистрация"){
    echo '<script>
    alert("Данное Имя Пользователя уже занято!");
    </script>';
    return false;
    }
if ($content!=null and $type=="Вход"){
    echo '<script>
    window.location="title.php";
    </script>'; 
        $_SESSION["log"] = $content["username"];
    return true;
}
}
?>

</body>
</html>