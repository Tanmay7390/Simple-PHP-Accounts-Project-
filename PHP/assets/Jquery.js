
        $(document).ready(function(){
            var a=true;
            $("#table_div").slideUp(0);

            $.post("Data.php",{
                db_op: "Select"
            },function(data,status){
            $("#table_body").append(data);
            });

            $("#Submit").click(function(){
                $.post("Data.php",{
                    db_op: "Insert",
                    Name_: $("#Name").val(),
                    Address_: $("#Address").val(),
                    City_: $("#City").val(),
                    Phone_No_: $("#Phone_No").val()
                },function(data,status){
                    window.location.replace("http://localhost/PHP/Open.php");
                    //alert(data);
                });
            });
            $("#btnviewData").click(function(){
                if(a==true)
                {
                    $("#table_div").slideDown("fast","linear");
                    a=false;
                }else
                {
                    $("#table_div").slideUp("fast","linear");
                    a=true;
                }
                //$("#div_details").slideUp("fast","linear");
            });
            $("#Update").click(function(){
                $.post("Data.php",{
                    db_op: "Update",
                    ID_: parseInt(trainindIdArray[0]),
                    Name_: $("#Name").val(),
                    Address_: $("#Address").val(),
                    City_: $("#City").val(),
                    Phone_No_: $("#Phone_No").val()
                },function(data,status){
                    $.post("Data.php",{
                        db_op: "Select"
                    },function(data,status){
                        $("#table_body").empty();
                        $("#table_body").append(data);
                    });
                });
                $("#Submit").css("display","block");
                $("#Update").css("display","none");
                $("#btnnew").css("display","none");
                $("#Name").val("");
                $("#Address").val("");
                $("#City").val("");
                $("#Phone_No").val("");
            });

            $("#btnnew").click(function(){
                $("#Submit").css("display","block");
                $("#Update").css("display","none");
                $("#btnnew").css("display","none");
                $("#Name").val("");
                $("#Address").val("");
                $("#City").val("");
                $("#Phone_No").val("");
            });

            
        });