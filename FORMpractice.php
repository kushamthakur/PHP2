<html>
<head>
<title>FORMpractice</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.img{background-image:url('https://images.hdqwalls.com/download/trekking-with-friend-hb-1366x768.jpg');
	height:100vh; background-repeat:no-repeat;background-size:100% 100%;}
.img h1{padding-top:50px;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
.container {
  padding: 16px;
}
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 5px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 59%;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.a{border: 1px solid; height:100% 100%; width: 100%;background-color: aquamarine;
		padding-left: 20px;padding-top: 5px; padding-right:20px;
	}
</style>
</head>
<body>
  <div class="img">
   <center><h1>Signup Form</h1>

          <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
   </center>
  </div>
  <div id="id01" class="modal">
   <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" method="post" action="alreadycon.php" enctype="multipart/form-data">
     <div class="a">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>NAME</b></label>
      <input type="text" placeholder="Enter Name" name="name" required><br><br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required><br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>

      <label for="contact_no"><b>Contact</b></label>
      <input type="text" placeholder="Enter Contact no." name="contact" required><br><br>

      <label for="emp_id"><b>Emp-id</b></label>
      <input type="text" placeholder="Enter Emp-id" name="emp" required><br><br>

      <label for="branch" ><b>Branch</b></label>
      <select name="branch" style="width:100%; height:25px;">
        <option selected>select</option>
         <option value="Mandi">Mandi</option>
         <option value="Kangra">Kangra</option>
         <option value="Bilaspur">Bilaspur</option>
         </select><br><br><br><br>

      <label for="Role"><b>Role</b></label>
      <select name="role" style="width:100%; height:25px;">
        <option selected>select</option>
         <option value="staff">Staff</option>
         <option value="admin">admin</option>
         <option value="user">user</option>
     </select><br><br><br><br>
     <input type="file" name="photo"><br>
     <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
      </div>
</div>
</div>
<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>