
<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>ログイン</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" method="POST" action="HW_login_act.php">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">本棚サイトへようこそ</br> </br>★サインイン★</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="lid" class="form-control" placeholder="ID/メールアドレス" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="lpw" class="form-control" placeholder="パスワード" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">サインイン</button>
    <a class="btn btn-lg btn-primary btn-block" href="HW_login_index.php" >新規登録</a>    
    <a class="btn btn-lg btn-primary btn-block" href="HW_select_wologin.php" >登録せずに見る</a>  

    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
</body>
</html>