<?php 
  // １．データベースに接続する
  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  // POSTでデータが送信された時のみSQLを実行する
    // ２．SQL文を実行する
    $sql = 'SELECT * FROM `survey`';
    // SQLを実行
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    // データを取得する
    while (1) {
    	// 連想配列に入れる処理
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($rec == false) {
    break;
  }
  echo $rec['code'] . '<br>';
  echo $rec['nickname'] . '<br>';
  echo $rec['email'] . '<br>';
  echo $rec['content'] . '<br>';
  echo '<hr>';
}


  // ３．データベースを切断する
  $dbh = null;
 ?>