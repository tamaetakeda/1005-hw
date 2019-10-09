
<!doctype html>
<html lang="ja">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">


    <title>新規登録</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" method="POST" action="HW_login_insert.php">
    <!-- <div class="jumbotron"> -->
    <fieldset>
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="122" height="72">
    <h1 class="h3 mb-3 font-weight-normal">本棚サイトへようこそ</br> </br>★新規登録★</h1>
    <label for="inputname" class="sr-only">Email address</label>
    <input type="text" name="name" class="form-control" placeholder="お名前" required autofocus>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="lid" class="form-control" placeholder="ID/メールアドレス" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="lpw" class="form-control" placeholder="パスワード" required>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="新規登録">
    </fieldset>
    </div>
    </br>
    <a class="btn btn-lg btn-primary btn-block" href="index.php">ログイン画面に戻る</a>  
</form>
   
</body>
</html>