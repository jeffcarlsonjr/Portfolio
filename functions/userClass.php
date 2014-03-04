<?php

interface post_data {
 
	// Create interface that the main class will rely on
 
	function login_get_data();
	function login_clean_data();
	function login_check_data();
 
	}
abstract class sql_server {
 
        // Class that handles the SQL connection
        
	        
	public function __construct() {
            $db = new DB();
            $db->connect();
		}
	}

class Logins extends sql_server implements post_data
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
    
    public function login_get_data()
    {
        //Giving error i any of the fields are empty
     
        if(empty($_POST['username']) || empty($_POST['password']))
        {
            echo "<script> alert('Make sure that you fill in all the fields')</script>";
            //header('Location: login.php');
        }
        //Else continue
        
        else
        {
            $this->loginVars['Username'] = $_POST['username'];
            $this->loginVars['Password'] = $_POST['password'];
            
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
           
           $_SESSION['username'] = $this->loginVars['Username'];
           $_SESSION['password'] = $this->loginVars['Password'];
           
           header('Location: applications.php');
           die();
       }
       
       
       else 
       {
           echo  "<script> alert('Username/Password combination is invalid')</script>";
           //header('Location: login.php');
           //die();
       }
   }
}

class tools
{
    public function metaRedirect($length,$where)
    {
        echo '<meta http-equiv="refresh" content="'.$length.';url='.$where.'">';
    }
}