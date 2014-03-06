<?php


class db
{
  
    public function connect()
    {
        //$myconnect = mysql_connect('localhost','root','root') or die(mysql_error());
        $myconnect = mysql_connect('68.178.216.143','jeffsPortfolio','West115th@8');
            if(!$myconnect){ echo "Error in the connections"; }
            else
            { 
                //$db = mysql_select_db('portfolio', $myconnect) or die(mysql_error());
                $db = mysql_select_db('jeffsPortfolio', $myconnect);
                    if(!$db){ echo "Error in the db selections"; }
            }
    }
}
