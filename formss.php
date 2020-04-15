<!DOCTYPE HTML>
<html>
  <head>
      <title>SK Tech Solutions</title>
  </head>  
  <body>
    <?php
      $nameErr = $emailErr = $ContactPersonErr = $QualificationErr = $Mobileno = $CollegeNameErr = $ReferralName="";
      $name = $email = $ContactPerson = $Qualification = $Mobileno =  $CollegeName = $ReferralName="";
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["Name"])) {
          $NameErr = "Name is required";
  }         else {
          $Name = test_input($_POST["Name"]);
          // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
          $NameErr = "Only letters and white space allowed";
   }
   }
  
      if (empty($_POST["email"])) {
          $emailErr = "Email is required";
    }     else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format";
     }
     }
    
     if (empty($_POST["Contact Person"])) {
         $ContactPersonErr = "";
  }      else {
         $ContactPerson = test_input($_POST["Contact Person"]);
  }

      if (empty($_POST["Qualification"])) {
         $QualificationErr = "Quaification is required";
  }      else {
         $Qualification = test_input($_POST["Qualification"]);
  }
    
      if (empty($_POST["Mobileno."])) {
         $MobilenoErr = "Mobile no. is required";
  }      else {
         $Mobileno = test_input($_POST["Mobileno."]);
  }
      if (empty($_POST["CollegeName"])) {
          $CollegeNameErr = "CollegeName is required";
  }       else {
          $CollegeName = test_input($_POST["CollegeName"]);
  }
      if (empty($_POST["Referral Name"])) {
          $ReferralNameErr = " is required";
  }       else {
          $ReferralName = test_input($_POST["ReferralName"]);
  }
      function test_input($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
       }
?>
      <h2>Interview for the role-Developer</h2>
<p><span class="error">* required field</span></p>
      <form method="post" action="<?php echo
          htmlspecialchars($_Server["PHP_SELF"]);?>">
          Name:<input type= "text" name="name">
          <span class="error">* <?php echo $nameErr;?></span>
          <br><br>
          Email:<input type="text" name="email">
          <span class="error">*<?php echo $emailErr;?></span>
          <br><br>
          Contact Person:<input type="text" name="Contact Person" rows>
          <br><br>
          Qualification:<input type="radio" name="Qualification" value="B.tech">B.tech IT
          <input type="radio" name="Qualification" value="B.E">B.E Mech
          <input type="radio" name="Qualification" value="B.E">B.E EEE
          <input type="radio" name="Qualification" value="B.E">B.E ECE
          <input type="radio" name="Qualification" value="B.E">B.E CSE
          <span class="error">*<?php echo $Qualification;?></span>
          <br><br>
           Mobile No:<input type="number" id="quantity" name="Mobile no.">
          <br><br>
          College Name:<input type="text" name="College Name">
          <span class="error">* <?php echo $CollegeNameErr;?></span>
          <br><br>
           Referral Name:<input type="text" name="Reffaral Name">
          <br><br>
          <input type="submit" name="submit" value="submit">
      </form>
      <?php
           echo "<h2>Your Input:</h2>";
           echo $name;
           echo "<br>";
           echo $email;
           echo "<br>";
           echo $ContactPerson;
           echo "<br>";
           echo $Qualification;
           echo "<br>";
           echo $Mobileno;
           echo "<br>";
           echo $CollegeName;
           echo "<br>";
           echo $ReferralName;
           echo "<br>";
      ?>
     </body>
  </html>
