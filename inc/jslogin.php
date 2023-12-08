  <!-- login function -->
  <?php
    require_once('db_config.php')
    
    $username =$_POST['username'];
    $password =$_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1 ";
    $stmtselect = $con->prepare($sql);
    $result = $stmtselect->execute([$username, $password]);

    if($result){
      $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
      if($stmtselect->rowCount() > 0){
        echo '1';
      }
      else{
        echo 'That user is not exist';
      }
    else{
      echo 'There were error';
    }
    }

  ?>