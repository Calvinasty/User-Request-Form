<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database_name="calbank userrqtform";

 $conn=mysqli_connect($servername,$username,$password,$database_name);

 // check connection
 if(!$conn)
 {
     die("Connection Failed:" . mysqli_connect_error());
 }

 if(isset($_POST['save'])){
     $Dept_Unit_Branch = $_POST['Dept_Unit_Branch'];


     $sql_query = " INSERT INTO entry_info('Dept_Unit_Branch') VALUES ('$Dept_Unit_Branch') ";
 }
    
    
?>
<style>
    h1{
        margin-left:10px;
        

    }
    img{
        float: right;
    }

    .fdate{
        float:right;
    }

    #main{
        border: 1px solid black;

    }

    .RQB{
        background-color: gold;
        
    }
    
    #Innertable{
            border:1px solid black;
    }
    .innertable{
        border:1px solid black; 
    }
    
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/3/34/Logo_png-01.png" />
    <title>Document</title>
</head>
<body>
    <h1>
          
          USER ACCESS REQUEST FORM  <img src="logo.png" width="200" >  
        
</h1>
<form action="">
<table id="main" width="100%">
    <th>
       <td> <p class="RQB"> <strong>DEPARTMENT DETAILS</strong> </p>
       <div>
        Name of Department/Unit/Branch : <input type="text" id="Deptname" name="dname">  <p class="fdate">Date : <input type="text" id="Date" name="Date"> </p> <br> <br>
        Requesting Staff Name(Same as Official Name with HR) Designation : <br>
        <input type="text" id="Deptname" name="surname" placeholder="Surname"> &nbsp; &nbsp; <input type="text" id="Deptname" name="othernames" placeholder="Other Names"> <br><br>
        Staff Status : 
        <input type="radio"  name="one"> Permanent 
        <input type="radio"  name="one">  Contract 
        <input type="radio"  name="one"> National Service 
        <input type="radio"  name="one">Intern 
        <input type="radio"  name="one"> Consultant <br><br>
        Profile Expiring Date : <input type="date" id="PED" name="ped">    HR/MIS/CARDS Confirmation of Expiry Date : <input type="text" id="CED" name="ced"> <br><br>
        HR T24 training confirmation
       </div> <br>
       <div>
           <p class="RQB">
              <strong>REQUEST TYPE</strong> 
           </p>
           
           <input type="radio"> T24 Access &nbsp; <strong>Hold on</strong> <br> <br>
           Mandate Access : 
           <input type="radio" name="two"> Read &nbsp; 
           <input type="radio" name="two"> Write &nbsp; 
           <input type="radio" name="two"> Delete &nbsp; 
           <input type="radio" name="two"> Access to Domain Controller (network) &nbsp; 
           <input type="radio" name="two"> E-mail &nbsp; 
           <input type="radio" name="two"> Moodys &nbsp; 
           <input type="radio" name="two"> Laserfiche &nbsp; 
           <input type="radio" name="two"> SWIFTs &nbsp; 
           <input type="radio" name="two"> AML &nbsp; 
           <input type="radio" name="two"> OPAY &nbsp; 
           <input type="radio" name="two"> Custody System &nbsp; <br><br>
           Hr Software  : 
           <input type="radio" name="three"> Human Resource (15,17,18,20) &nbsp; 
           <input type="radio" name="three"> Payroll (15,17,18,20) <br><br>
           Role/Description(Type of profile): <textarea rows="4" columns="100">  </textarea> <br><br>
           Head's Approval : 
           <input type="radio" name="four"> Approved &nbsp; 
           <input type="radio" name="four"> Declined &nbsp; &nbsp; Date : 
           <input type="date"> <br><br>
           Internal Control Approval : 
           <input type="radio" name="four"> Approved &nbsp; 
           <input type="radio" name="four"> Declined &nbsp; &nbsp; 
           Date : <input type="date"> <br><br>
           Senior Management Approval : 
           <input type="radio" name="four"> Approved &nbsp; 
           <input type="radio" name="four"> Declined &nbsp; &nbsp; Date : <input type="date"> &nbsp;
           


       </div>

       <div>
           <p class="RQB">
              <strong>MIS USE - Access to Domain Server</strong> 
           </p>
            
           Head's Approval : <input type="text" > &nbsp;&nbsp; Date: <input type="date"> <br><br>
           Staff Assigned : <input type="text"> &nbsp;&nbsp; Moodys ID: <input type="type"> <br><br>
           Network ID : <input type="text"> &nbsp;&nbsp; E-mail ID: <input type="email"> <br><br>
           (Contact MIS for your Password)
           


       </div>
       <div>
           <p class="RQB">
              <strong>Cerification by User</strong> 
           </p>
            
           Certified by : <input type="text"> &nbsp;&nbsp; Date: <input type="date"> <br><br>
           Head of Dept's Sign Off : <input type="text"> &nbsp;&nbsp; Date: <input type="date"> <br><br>
           
           


       </div>

       <table style="width:100%" id="Innertable">
            <tr>
              <td class="innertable">Consultant</td>
              <td class="innertable">Senior Management Approval Required</td>
            </tr>
            <tr>
                <td class="innertable">Intern</td>
                <td class="innertable">Senior Management Approval Required</td>
            </tr>
            <tr>
                <td class="innertable">National Service</td>
                <td class="innertable">Senior Management Approval Required</td>
            </tr>
          </table> <br><br>

         <center> 
            <input type="submit" name="save" value="Submit" >     
        </center>
       </td>
       
    


    </th>
</table>
</form>

<script type="text/javascript">
      
    
    </script>
    


</body>

</html>