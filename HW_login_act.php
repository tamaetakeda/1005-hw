<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();

// POST値


//1.  DB接続します
include("HW_funcs.php");
$pdo = db_conn();

//2. データ登録SQL作成
$sql  = "SELECT * FROM gs_hw_user_table WHERE lid=:lid AND lpw=:lpw AND life_flg=0"; 
//一致を確認 life_flag退会者の確認
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $_POST["lid"], PDO::PARAM_STR);
$stmt->bindValue(':lpw', $_POST["lpw"], PDO::PARAM_STR); //* Hash化する場合はコメントする
//安全化
$status = $stmt->execute();


//3. SQL実行時にエラーがある場合STOP
if($status==false){
    sql_error();
}

//4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能() レコードがいくつ帰ってきたか確認できる

//5. 該当レコードがあればSESSIONに値を代入
//* if(password_verify($lpw, $val["lpw"])){
if( $val["id"] != "" ){
  //Login成功時
  $_SESSION["chk_ssid"]  = session_id(); //持っているものを変数にして渡す
  $_SESSION["kanri_flg"] = $val['kanri_flg']; 
  $_SESSION["name"]      = $val['name']; //名前を表示するために表示を渡す XXさんこんにちは、をやるため

  redirect("HW_select.php"); //redirectはfuncsで作ってある
}else{
  //Login失敗時(Logout経由)
  redirect("HW_fail.php"); 
}

exit();

?>

