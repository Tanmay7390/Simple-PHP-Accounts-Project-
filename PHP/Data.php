<?php
    include_once 'DB.php';
    if(isset($_POST["db_op"]))
    {
        $db_op=$_POST["db_op"];
    }
    if(isset($_POST["ID_"]))
    {
        $I_ =$_POST["ID_"];
    }
    if(isset($_POST["Name_"]))
    {
        $N_ =$_POST["Name_"];
    }
    if(isset($_POST["Address_"]))
    {
        $A_ =$_POST["Address_"];
    }
    if(isset($_POST["City_"]))
    {
        $C_ =$_POST["City_"];
    }
    if(isset($_POST["Phone_No_"]))
    {
        $P_ =$_POST["Phone_No_"];
    }
    $cols=array("Name", "Address", "City", "Phone_No");
    $vals="";
    if(strcmp($db_op, "Insert") == 0)
    {
        $vals=array($N_, $A_,$C_, $P_);
        insert("first",implode(",",$cols),implode(",",$vals));
    }
    elseif (strcmp($db_op, "Update") == 0) 
    {
        $vals=array($N_, $A_,$C_, $P_);
        update("first",implode(",",$cols),implode(",",$vals),"`id` =$I_");
    }
    elseif (strcmp($db_op, "Delete") == 0)
    {
        delete("first","`id` =$I_");
    }
    elseif (strcmp($db_op, "Select") == 0)
    {
        $res=select("first","*","");
        $i=1;
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr class='w3-hover-green'><td>$i</td><td><button class='edit'><span class='0'>$row[0],</span><span class='1'>$row[1],</span><span class='2'>$row[2],</span><span class='3'>$row[3],</span><span class='4'>$row[4]</span></button></td><td><button class='delete'><span class='0'>$row[0],</span><span class='1'>$row[1],</span><span class='2'>$row[2],</span><span class='3'>$row[3],</span><span class='4'>$row[4]</span></button></td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
            $i++;
        }
    }
    
?>

<script>
var row_index=0;
    var trainindIdArray="";
    $(".edit").click(function(){
        $("#Submit").css("display","none");
        $("#Update").css("display","block");
        $("#btnnew").css("display","block");
        var split=$(this).text();
        trainindIdArray = split.split(',');
        //alert(trainindIdArray[0]);
        $("#Name").val(trainindIdArray[1]);
        $("#Address").val(trainindIdArray[2]);
        $("#City").val(trainindIdArray[3]);
        $("#Phone_No").val(trainindIdArray[4]);
        $("#table_div").slideUp("fast","linear");
        a=true;
    });
    $(".delete").click(function(){
        var split=$(this).text();
        var id = split.split(',');
        //$("tr").eq(parseInt(row_index+1)).remove();
        $.post("Data.php",{
            ID_: parseInt(id[0]),
            db_op: "Delete"
        },function(data,status){
            $.post("Data.php",{
                db_op: "Select"
            },function(data,status){
                $("#table_body").empty();
                $("#table_body").append(data);
            });
        });
    });
    $('tr').mouseover(function(){
        row_index = $(this).index();
    });
</script>