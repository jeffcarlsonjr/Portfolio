<?php


class Logins
{
    private $loginVars = array('Username'=>null,'Password'=>null);
    
//    public function __construct() {
//        parent::__construct();
//            if(isset($_POST['Login']))
//                {
//                echo 'hello';
//                    $this->login_get_data();
//                    
//                }
//        ;
//    }
    
    public function login_get_data($username, $password)
    {
        //Giving error i any of the fields are empty
     
        if(empty($username) || empty($password))
        {
            echo "<script> alert('Make sure that you fill in all the fields')</script>";
            //header('Location: login.php');
        }
        //Else continue
        
        else
        {
            $this->loginVars['Username'] = $username;
            $this->loginVars['Password'] = $password;
            
            $this->login_clean_data();
        }
    }
    
   public function login_clean_data()
   {
       $this->loginVars['Username'] = mysql_real_escape_string($this->loginVars['Username']);
       $this->loginVars['Password'] = mysql_real_escape_string($this->loginVars['Password']);
       $this->loginVars['Password'] = md5($this->loginVars['Password']);
       
       $this->login_check_data();
       
   }
   
   public function login_check_data()
   {
       $query = mysql_query("SELECT * FROM user WHERE email = '".$this->loginVars['Username']."' && password = '".$this->loginVars['Password']."' ");
       $row = mysql_fetch_assoc($query);
       if(mysql_num_rows($query) > 0)
       {
           mysql_query("UPDATE user SET lastLogin = NOW() WHERE id = '".$row['id']."' ");
           
           session_start();
           $_SESSION['id'] = $row['id'];
           $this->emailMe($this->loginVars['Username']);
           echo json_encode($row['id']);
           
//           $_SESSION['username'] = $this->loginVars['Username'];
//           $_SESSION['password'] = $this->loginVars['Password'];
//           
//           header('Location: applications.php');
           die();
       }
       
       
       
   }
   
   public function emailMe($email)
   {
        $mail = new PHPMailer();

        $mail->From = $email;
        
        $mail->addAddress('jeff.carlsonjr@gmail.com');
        $mail->addReplyTo('jeff.carlsonjr@gmail.com');
        

        $mail->WordWrap = 100;
        $mail->isHTML(true);

        $mail->Subject = "Just logged in";
        $mail->Body = "<p>Someone just logged in to you Protfolio site</p>";
        $mail->send();
   }
}


class Users
{
    public function findPerson($id)
    {
        $query = mysql_query("SELECT name FROM user WHERE id = '".$id."'");
        $row = mysql_fetch_assoc($query);
        
        echo "<h2>Welcome ".$row['name']."!</h2>";
    }
}




class tools
{
    public function metaRedirect($length,$where)
    {
        echo '<meta http-equiv="refresh" content="'.$length.';url='.$where.'">';
    }
}


