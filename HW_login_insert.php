<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ エラーをはかない
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name   =$_POST["name"];
$lid  =$_POST["lid"];
$lpw =$_POST["lpw"];
//2. DB接続します...これこのまま使う
// try {
//   //Password:MAMP='root',XAMPP=''
//   //hostは本番レンタルサーバのアドレスに変更する=データベースサーバ（今は、自分のPC上なのでlocalhost。。）
//   $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
//   // $pdo = new PDO('mysql:dbname=********;charset=utf8;host=localhost','******ユーザー名 MAMPは両方root','******パスワード');
// } catch (PDOException $e) {
//   exit('DB Connection Error:'.$e->getMessage());
//   // exit('********:'.$e->getMessage()); 接続設定が間違っているかの確認ができる exit()というのは止める関数'文字を入れられる'
// }
include("HW_funcs.php");
$pdo=db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare(
"INSERT INTO gs_hw_user_table(name, lid, lpw, kanri_flg, life_flg)VALUES(:name,:lid,:lpw,'0','0')");
// :**** で変数になる
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INTセキュリティ。定型)bindvalue橋渡し:nameを$nameに渡す
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
// $stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
// $stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);
$status = $stmt->execute(); //これで実行 成功したらtrueが帰ってくる、失敗してたらfalse 
// bindValueで一回挟むことでセキュリティをあげている

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  // $error = $stmt->errorInfo(); //0,1,2の配列でエラーが入る
  // exit("SQLError:".$error[2]);
  sql_error();
}else{
//５．index.phpへリダイレクト
redirect("index.php");
// function redirect($file_name){
//   header("Location:".$file_name);  //:の後に半角入れる
//   exit(); //止める
}
?>
