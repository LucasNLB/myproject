<?php
class LoginSignupModel extends DB{
    
     
    public function LoginSignup(){

        if(isset($_POST['submit'])){
            // select value of form
            $Email = pg_escape_string($this->con, $_POST['email']);
            $Pass = pg_escape_string($this->con, $_POST['pass']);
            // connet database to compare
            $sql = 'SELECT * FROM public."Login" WHERE email =\''.$Email.'\' and pass = \''.$Pass.'\'';
            
            return pg_query($this->con, $sql);
        }
    }
   

    
    public function SignUp(){
        if(isset($_POST['submitSignUp'])){
            // select value of form
            $Email = pg_escape_string($this->con, $_POST['emailSignUp']);
            $Pass = pg_escape_string($this->con, $_POST['passSignUp']);
            // connet database to compare
            $sql = 'INSERT * FROM public."Login" WHERE email =\''.$Email.'\' and pass = \''.$Pass.'\'';
            
            return $sql;
        }
        

        

        // return pg_query($this->con, $sql);

    }
}
?>