<html>
    <head>
        <script src="assets/jq_v3_5_1.js" type="text/javascript"></script>
        <script src="assets/Jquery.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="assets/Style.css">
    </head>
    
    <body>
        <div id="table_div" class="w3-responsive">
            <table id="table_" class="w3-table">
                <tr class="w3-orange">
                    <th>Sr No</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Phone_No</th>
                </tr>
                <tbody id="table_body">
                    
                   
                </tbody>
            </table>
        </div>
        <button style="display:none" id="btnnew">New</button>
        <button id="btnviewData">View Data</button>
        <div id="div_details">
            
        <h1>Personal Details</h1>
        
        <input type="text" name="" id="Name" placeholder="Enter Name">
        <br>
        <input type="text" name="" id="Address" placeholder="Enter Address">
        <br>
        <input type="text" name="" id="City" placeholder="Enter City">
        <br>
        <input type="text" name="" id="Phone_No" placeholder="Enter Phone No">
        <br>
        <button id="Submit">Submit</button>
        <button style="display:none" id="Update">Update</button>
        <br>
        </div>
    </body>
</html>