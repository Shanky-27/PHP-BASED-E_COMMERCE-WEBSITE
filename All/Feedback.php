<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Feedback</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"
    type="text/css" />
  <link href="external.css" rel="stylesheet" type="text/css" />
  <style>
     body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color:black;
  background-repeat:no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
form {background: transparent;
  border-radius: 20px;
  padding: 10px;
  border: 2px  ridge #ffbb00;
  text-align: center;
}

h1 {
  letter-spacing: 5px;
  color: antiquewhite;
  font-size: 60px;
}
form ::placeholder{
  color:white;
  
}
.input-box1 input{
  font-size:10px;
  background: transparent;
  border: none;
  height:20px;
  margin: 10px; 
  color: white;
  border-radius:10px;
  display: flex;
}
.input-box1{
  display: flex;
}
.input-box2{
  display: flex;
}
.input-box2 input{
  font-size:10px;
  background: transparent;
  border: none;
  height:20px;
  margin: 10px;
  color: white;
  border-radius:10px;
  display: flex;
}
textarea{
  font-size:10px;
  background: transparent;
  color: white;
  border-radius:10px;
  display: flex;
}
     @media screen and (max-width : 320px){ 
       h1{
         letter-spacing: 0px;
       }
        .input-box2 input{
          width: 95px;
        }
        .input-box1 input{
          width: 95px;
        } 
     }
    @media screen and (min-width : 395px){
      h1{
         letter-spacing: 0px;
       }
        .input-box2 input{
            font-size:20px;
          width: 95px;
        }
        .input-box1 input{
            font-size:20px;
          width: 95px;
        } 
        textarea{
            font-size:20px;
        }
     }
     button{
      font-size:20px;
      color:white;
      background:transparent;
       border: 2px  ridge #ffbb00;
     }
  </style>
</head>

<body>
  <h1>
    Feedback
  </h1>
  <form   method="post">
  <div class="input-box1">
    <input type="text" name="name" placeholder="Full Name">
    <input type="email" name="email" placeholder="Email">
  </div>
  <div class="input-box2">
    <input type="number" name="phone"placeholder="Contact Number">
    <input type="date" name="date">
  </div>
  <textarea rows="8" cols="30" placeholder="Your Message" name="message"></textarea><br>
    <button onclick="showAlert()" value="submit" name="submit" >Submit</button>
  </form>
</body>
<script>

function showAlert() {
    alert ("Thank you For your Feedback");
  }
</script>

</html>
 <?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "AWD_PRACTICE";

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$message=$_POST['message'];
$con=mysqli_connect($server,$username,$password,$dbname);

$sql="INSERT INTO `Feedback`(`name`, `email`, `phone_no.`, `date`, `message`) VALUES ('$name','$email','$phone','$date','$message')";

$res=mysqli_query($con,$sql);
 
 ?>