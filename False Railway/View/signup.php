<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>

  <form action="/WEB TECH CODES PHP/MID TERM/Sample Project 1/sample/controller/action_signup.php" method="POST">
  <div>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <br />

    <div>
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter your firstname" name="firstname">
    </div>

    <br />

    <div>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your lastname" name="lastname">
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
    </div>

    <br />

    <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
    </div>

    <br />
    
    <div>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat">
    </div>

    <br />

    <div>
      <button type="button" onClick="document.location.href='/WEB TECH CODES PHP/MID TERM/Sample Project 1/sample/index.php'">Cancel</button>
      <button type="button" onClick="document.location.href='/WEB TECH CODES PHP/MID TERM/Sample Project 1/sample/view/login.php'">Login</button>
      <button type="submit">Submit</button>
    </div>
  </div>
</form>

 <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>
