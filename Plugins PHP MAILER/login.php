<?php
class user_forms{
    private function submit_button($values){
      echo "input type= 'submit'  value='{$value}'>";
    }



    public function signup_form(){
      ?>
      <h2>Signup Form</h2>
      <form action='submit_signup.php' method='post'>
        <label for='username'>Username:</label>
        <input type='text' id='username' name='úsername' required><br><br>
        <label for='email'>Email:</label>
        <input type='email' id='email' name='email'required><br><br>
        <label for='password'>Password:</label>
        <input type='password' id='password' name='password' required><br><br>
        <?php $this->submit_button('Sign up'); ?> <a>
        <?php $this->submit_button('Sign up'); ?> <a> href="login.php">Already have an account? Log in
    </form>
    <?php
    }
}


    public function login(){
      ?>
      <h2>Login Form</h2>
      <form action='submit_login.php' method='post'>
        <label for='username'>Username:</label>
        <input type='text' id='username' name='úsername' required><br><br>
        <label for='email'>Email:</label>
        <input type='email' id='email' name='email'required><br><br>
        <label for='password'>Password:</label>
        <input type='password' id='password' name='password' required><br><br>
        <?php $this->submit_button('Log In'); ?><a> href="index.php">Already have an account? Log in
    </form>
    </form>
    <?php
    }

  