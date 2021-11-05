<?php

    
    
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
        Staff Status : <input type="checkbox" name="one" onclick="return onlyone()"> Permanent <input type="checkbox" name="one" onclick="return onlyone()">  Contract <input type="checkbox"> National Service <input type="checkbox"> Intern <input type="checkbox"> Consultant <br><br>
        Profile Expiring Date : <input type="date" id="PED" name="ped">    HR/MIS/CARDS Confirmation of Expiry Date : <input type="text" id="CED" name="ced"> <br><br>
        HR T24 training confirmation
       </div> <br>
       <div>
           <p class="RQB">
              <strong>REQUEST TYPE</strong> 
           </p>
           
           <input type="checkbox"> T24 Access &nbsp; <strong>Hold on</strong> <br> <br>
           Mandate Access : <input type="checkbox"> Read &nbsp; <input type="checkbox"> Write &nbsp; <input type="checkbox"> Delete &nbsp; <input type="checkbox"> Access to Domain Controller (network) &nbsp; <input type="checkbox"> E-mail &nbsp; <input type="checkbox"> Moodys &nbsp; <input type="checkbox"> Laserfiche &nbsp; <input type="checkbox"> SWIFTs &nbsp; <input type="checkbox"> AML &nbsp; <input type="checkbox"> OPAY &nbsp; <input type="checkbox"> Custody System &nbsp; <br><br>
           Hr Software  : <input type="checkbox"> Human Resource (15,17,18,20) &nbsp; <input type="checkbox"> Payroll (15,17,18,20) <br><br>
           Role/Description(Type of profile): <textarea rows="4" columns="100">  </textarea> <br><br>
           Head's Approval : <input type="checkbox"> Approved &nbsp; <input type="checkbox"> Declined &nbsp; &nbsp; Date : <input type="date"> <br><br>
           Internal Control Approval : <input type="checkbox"> Approved &nbsp; <input type="checkbox"> Declined &nbsp; &nbsp; Date : <input type="date"> <br><br>
           Senior Management Approval : <input type="checkbox"> Approved &nbsp; <input type="checkbox"> Declined &nbsp; &nbsp; Date : <input type="date"> &nbsp;
           


       </div>

       <div>
           <p class="RQB">
              <strong>MIS USE - Access to Domain Server</strong> 
           </p>
            
           Head's Approval : <input type="text"> &nbsp;&nbsp; Date: <input type="date"> <br><br>
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

         <center> <button>
              Submit
          </button> </center>
       </td>
       
    


    </th>
</table>
</form>

<script type="text/javascript">
        function onlyone(){
            var  a = document.getElementsByName('one');
            var start = 0;
            var count;
            for(count=0; count<a.lenght; count++){
                if(a[count].checked==true){
                    start = start + 1;
                }
            }
            
            if (start>=1|| start <= 0){
                alert("Select only One");
                
            }
        }
    
    </script>
    


</body>

</html>