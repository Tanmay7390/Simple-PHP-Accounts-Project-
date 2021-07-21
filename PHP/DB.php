<?php
    $conn = new mysqli("localhost:3308", "root", "", "tsloops");

    function insert($table_name,$col_,$val_){
      $columns="`".str_replace(",","`,`",$col_)."`";
      $values="'".str_replace(",","','",$val_)."'";
      $insert= "INSERT INTO `$table_name`($columns) VALUES ($values);";
      mysqli_query($GLOBALS['conn'],$insert);
    }


    function update($table_name,$col_,$val_,$where){
      $columns="`".str_replace(",","`,`",$col_)."`";
      $values="'".str_replace(",","','",$val_)."'";
      $arr=explode(",",$columns); 
      $arr1=explode(",",$values);
      $Dat="";
      for($i=0;$i<count($arr);$i++)
      {
        $Dat=$Dat.$arr[$i]; 
        $Dat=$Dat."=";
        $Dat=$Dat.$arr1[$i];
      }
      $Dat=str_replace("'`","',`",$Dat);
      $update= "UPDATE `$table_name` SET $Dat WHERE `$table_name`.$where;";
      mysqli_query($GLOBALS['conn'],$update);
    }


    function delete($table_name,$where){
      $delete= "DELETE FROM `$table_name` WHERE `$table_name`.$where;";
      mysqli_query($GLOBALS['conn'],$delete);
    }

    function select($table_name,$col_,$where){
      $columns="";
      if($where==="")
      {
        $where="1";
      }

      if($col_==="" || $col_==="*")
      {
        $columns="*";
      }
      else{
      $columns="`".str_replace(",","`,`",$col_)."`";
      }
      $select="SELECT $columns FROM `$table_name` WHERE $where";
      $result=mysqli_query($GLOBALS['conn'],$select);
      return $result;
    }

    function run_sql($sql){
      mysqli_query($GLOBALS['conn'],$sql);
    }


    function run_query($rsql){
      $result=mysqli_query($GLOBALS['conn'],$rsql);
      return $result;
    }
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>