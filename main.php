<?php
    
    $url = "localhost";  // ローカル環境ならば、localhostで
    $user = "Yuito Hashimoto";      // ユーザー名 
    $pass = "yuito8490";          // ユーザーパスワード 
    $db = "creative";        // DB名
  
    $mysqli = new mysqli($url, $user, $pass, $db);
  
    if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
    }
  
    $mysqli->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);
    $mysqli->query("SELECT * FROM creative");
    $mysqli->commit();
    $mysqli->close();
    
?>