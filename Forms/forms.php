<?php
class forms{
    public function  signup(){
?>
        <form method="post" action="">
            <label for="username"> Username: </label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <input type="submit" value="Sign Up"> <a href="signin.php">Already have an account? Log in</a>
        </form>
<?php
    }

    private function submit_button($value, $name){
        ?>
        <button type="submit" name="<?php echo $name; ?>" value="<?php echo $value; ?>"><?php echo $value; ?></button>
        <?
    }

        public function  login(){
?>
        <form method="post" action="">
            <label for="username"> Username: </label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <?php $this->submit_button("Log in", "login"); ?>
            <a href="./">Don't have an account? Sign up</a>
        </form>
<?php
    }
    
}