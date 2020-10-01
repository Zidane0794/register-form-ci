<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
    
    body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #4CAF50; 
  box-sizing: border-box;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    
    </style>
</head>
<body>
    <div class="container">
        <h3>Register Form</h3>
        <form action="<?= site_url('auth/register')?>" method="POST">
            <label for="username">username</label>
            <input type="text" name="username" placeholder="username" required />

            <label for="password">password</label>
            <input type="password" name="password" placeholder="password" required />

            <label for="fullname">fullname</label>
            <input type="text" name="fullname" placeholder="fullname" required />

            <label for="fullname">level</label>
            <select name="level">
              <option value="" disabled selected>--pilih level--</option>
              <option value="1" >admin</option>
              <option value="2" >operator</option>
              <option value="3" >user</option>
            </select>

            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>