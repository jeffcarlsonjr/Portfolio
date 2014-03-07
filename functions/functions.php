<?php


class db
{
  
    public function connect()
    {
        if($_SERVER['HTTP_HOST'] == 'localhost:8888')
        {
            $myconnect = mysql_connect('localhost','root','root') or die(mysql_error());
            if(!$myconnect){ echo "Error in the connections"; }
            else
            { 
                $db = mysql_select_db('portfolio', $myconnect) or die(mysql_error());
                
                    if(!$db){ echo "Error in the db selections"; }
            }
        }
        else 
        {
            $myconnect = mysql_connect('68.178.216.143','jeffsPortfolio','West115th@8');
            if(!$myconnect){ echo "Error in the connections"; }
            else
            { 
                
                $db = mysql_select_db('jeffsPortfolio', $myconnect);
                    if(!$db){ echo "Error in the db selections"; }
            }
        }
        
        
            
    }
}
