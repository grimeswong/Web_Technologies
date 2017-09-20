<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('week11.db');
      }
   }

   function getGames($searchTerm = null) {
      $db = new MyDB();
      $array = [];
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }
      if(!$searchTerm) {
         $sql ='SELECT * from GAMES;';
      } else {
         $sql ='SELECT * FROM GAMES WHERE TITLE LIKE "'.$searchTerm.'"';
      }
      $ret = $db->query($sql);
      if(!$ret){
        echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }
?>