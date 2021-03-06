    <?php
      if(isset($_POST['login']) && !empty($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
     
        // Check to see if Email & password
        // if so, run it through checkInput func to see if legit
        if(!empty($email) or !empty($password)) {
          $email = $getFromU->checkInput($email);
          $password = $getFromU->checkInput($password);
     
        // Check if email is in the DB or even valid 
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "Invalid format";
          }else {
            if($getFromU->login($email, $password) === false){
              $error = "The email or password is incorrect!";
            }
          }
        }else {
          $error = "Please enter username and password!";
        }
      }
    ?>

    <div class="login-div">
        <form method="post">
            <ul>
                <li>
                    <input type="text" name="email" placeholder="Please enter your Email here" />
                </li>
                <li>
                    <input type="password" name="password" placeholder="password" /><input type="submit" name="login" value="Log in" />
                </li>
                <li>
                    <input type="checkbox" Value="Remember me">Remember me
                </li>
                <?php
          if(isset($error)){
            echo '<li class="error-li">
            <div class="span-fp-error">'.$error.'</div>
            </li>';
          }
        ?>
            </ul>

        </form>
    </div>
