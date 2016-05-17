<?php
require_once(dirname(dirname(__FILE__)).'/config/Local.conf');

class Database{
//    public static function connectTools($host=DB_TOOLS_HOST,$user=DB_TOOLS_USER,$pass=DB_TOOLS_PASS,$db=DB_TOOLS_NAME)
//    {
//        try
//        {
//              $dbh = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
//              $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//              return $dbh;
//        }
//        catch(PDOException $e){
//              echo $e->getMessage();
//        }
//    }
        public static function connect($host=DB_TOOLS_HOST,$user=DB_TOOLS_USER,$pass=DB_TOOLS_PASS,$db=DB_TOOLS_NAME)
    {
             try
        {
               
              $data=  mysql_connect($host, $user, $pass);
              mysql_select_db($db,$data);
               if(!mysql_select_db($db))
               {
                   echo 'Kết nối database không tồn tại';
               }
              
        }
        catch(PDOException $e){
              echo $e->getMessage();
        }
    }
    
}
?>
