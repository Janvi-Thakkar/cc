<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "janvi";
$courseId ;
$amount ;
$connection=mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if(isset($_POST['enroll']))
{
  $courseId=$_POST['course_id'];
  $amount=$_POST['course_price'];
}
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
         <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script>
  window.onload= function(){
    document.getElementsByName("course")[0].addEventListener('change',billing);
   
     function billing(){
      
  //  
  //  if(isset($_POST['submit'])
  //  ){
  //      $course=$_POST['course'];
  //  }
  //      $sql_select1= "SELECT * FROM courses WHERE course_id=$course";
  //      $data1= mysqli_query($con,$sql_select);
  //      $courses_data1=array();
  //      while($row1=mysqli_fetch_assoc($data1)){
  //        $courses_data1[]=$row1;
  //      }
  //       
  var course_sel=document.getElementsByName("course")[0].getAttribute("data"); 
  
  
       document.getElementById("price").value= course_sel ;
       
       
    }
 
}
  </script>
	<style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:200i,400&display=swap');

:root {
  --color-white: white;
  --color-darkblue: black;
  --color-darkblue-alpha: w(27, 27, 50, 0.8);
  --color-green: #37af65;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.4;
  color: var(--color-white);
  margin: 0;
}

/* mobile friendly alternative to using background-attachment: fixed */
body::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
  background: var(--color-darkblue);
  background-image: linear-gradient(
      115deg,
      rgba(58, 58, 158, 0.8),
      rgba(136, 136, 206, 0.7)
    ),
    url("images/course_form.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

h1 {
  font-weight: 400;
  line-height: 1.2;
}

p {
  font-size: 1.125rem;
}

h1,
p {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

label {
  display: flex;
  align-items: center;
  font-size: 1.125rem;
  margin-bottom: 0.5rem;
}

input,
button,
select,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button {
  border: none;
}

.container {
  width: 100%;
  margin: 3.125rem auto 0 auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

.header {
  padding: 0 0.625rem;
  margin-bottom: 1.875rem;
}

.description {
  font-style: italic;
  font-weight: 200;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
}

.clue {
  margin-left: 0.25rem;
  font-size: 0.9rem;
  color: #e4e4e4;
}

.text-center {
  text-align: center;
}

/* form */

form {
  background: var(--color-darkblue-alpha);
  padding: 2.5rem 0.625rem;
  border-radius: 0.25rem;
}

@media (min-width: 480px) {
  form {
    padding: 2.5rem;
  }
}

.form-group {
  margin: 0 auto 1.25rem auto;
  padding: 0.25rem;
}

.form-control {
  display: block;
  width: 100%;
  height: 2.375rem;
  padding: 0.375rem 0.75rem;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.input-radio,
.input-checkbox {
  display: inline-block;
  margin-right: 0.625rem;
  min-height: 1.25rem;
  min-width: 1.25rem;
}

.input-textarea {
  min-height: 120px;
  width: 100%;
  padding: 0.625rem;
  resize: vertical;
}

.submit-button {
  display: block;
  width: 100%;
  padding: 0.75rem;
  background: var(--color-green);
  color: inherit;
  border-radius: 2px;
  cursor: pointer;
}
.signup-button {
  display: block;
  width: 50%;
  align:center;
 text-decoration:none;
  padding: 0.75rem;
  background: var(--color-green);
  color: inherit;
  border-radius: 2px;
  cursor: pointer;
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="course.css"> -->
    <title>Coder's Club</title>
    </head>

    <body>

<div class="container">
  <header class="header">
    <h1 id="title" class="text-center"> Course Enrollment Form</h1>
    <!-- <p id="description" class="description text-center">
      Tell us about the course
    </p> -->
  </header>
 
  <form action="payment.php" method="POST" id="survey-form">
    <div class="form-group">
      <label id="name-label" for="name" >User Name</label>
      <input
        type="text"
        name="user_name"
        id="name"
        class="form-control"
        placeholder="Enter your name"
        required
      />
    </div>
    <div class="form-group">
      <label id="pass-label" for="password" >Password</label>
      <input
        type="password"
        name="password"
        id="password"
        class="form-control"
        placeholder="Enter your pass"
        required
      />
    </div>
    <div class="form-group">
      <label id="pass-label" for="password" >Price</label>
      <input
        type="text"
        name="price"
        id="price"
        class="form-control"
        placeholder=""
        disabled
        value="<?php echo $amount; ?>"
      />
    </div>
    <div class="form-group">
      <label id="course_id" for="course_id" ></label>
      <input
        type="hidden"
        name="course_id"
        id="course_id"
        class="form-control"
        placeholder=""   
        value="<?php echo $courseId ?>"
      />
    </div>
    
    <div class="form-group">
      <button type="submit" id="submit" class="submit-button">
        Pay Now
      </button>
    </div>
  </form>
  <hr>
  <center>
  <div class="form-group">
      <h5 style=" margin-right"> Haven't Registered Yet??</h5>
      <a type="" href="#" class="signup-button">
        SignUp
      </a>
    </div>
    </center>
</div>
</body>

</html>
