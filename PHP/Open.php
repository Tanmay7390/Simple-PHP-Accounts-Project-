<?php
    include_once 'DB.php';
?>
<html>
    <head>
        <script src="assets/jq_v3_5_1.js" type="text/javascript"></script>
    </head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        div{
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
            padding-top :50px;
            border-radius :20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top :50px;
            width :600px;
            height: 520px;
            background-color: rgba(255, 255, 255, .15);  
            backdrop-filter: blur(5px);
        }
        h1{
            text-align :center;
            display: block;
            margin-left: auto;
            margin-right: auto;
            font-family : 'Open Sans',sans-serif;
            font-weight: bolder; 
            font-size: 50px;
            color: black;
        }
        label{
            float :left;
            width :200px;
            margin-left :60px;
            color :black;
            font-family : 'Open Sans',sans-serif;
            font-weight: bolder;
        }
        b{
            color :black;
        }
        body{
            font-family : 'Open Sans',sans-serif;
            font-weight: bolder;  
            font-size: 30px;    
            background-image: url(img/backimg.jpg);
            background-size: 100% 100%;
        }
        #btnBack{
            outline: none;
            -moz-box-shadow:    inset 0 0 10px darkslateblue;
            -webkit-box-shadow: inset 0 0 10px darkslateblue;
            box-shadow:         inset 0 0 10px darkslateblue;
            height :40px;
            width: 250px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            /*font-family: "Arial Rounded MT Bold", "Helvetica Rounded", Arial, sans-serif;*/
            font-family : 'Open Sans',sans-serif;
            font-weight: bolder;
            font-size: 20px;
            font-weight: bolder;
            color: black;
            background-color: darkturquoise;;
            border-radius: 25px;
            border :none;
            position : absolute;
            left: 84%;
            top: 1%;
            width: 200px;
            background-color: cornflowerblue;
            box-shadow: 0 2.8px 2.2px rgb(0 0 0 / 3%), 0 6.7px 5.3px rgb(0 0 0 / 5%), 0 12.5px 10px rgb(0 0 0 / 6%), 0 22.3px 17.9px rgb(0 0 0 / 7%), 0 41.8px 33.4px rgb(0 0 0 / 9%), 0 100px 80px rgb(0 0 0 / 12%);
            color: black;
        }
    </style>
    <body>
        <button id="btnBack">Back To Login</button>
        <div>
        
        <h1>Personal Details</h1>

        <?php
        $row=mysqli_fetch_array(run_query("SELECT * FROM `first` ORDER BY id DESC LIMIT 1"));
        echo "<label>Name</label><b>: $row[1]</b><br><br><label>Address</label><b>: $row[2]</b><br><br><label>City</label><b>: $row[3]</b><br><br><label>Phone No</label><b>: $row[4]</b>";
        ?>
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $("#btnBack").click(function(){
                window.location.replace("http://localhost/PHP/index.php");
            });
        });
    </script>
</html>