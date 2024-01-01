<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="aboutus.css" />
    <link rel="stylesheet" href="../Courses/courses.css">
    <script src="script.js"></script>
</head>

<body>
<div class="topnav" id="myTopnav" style="zoom:90%">
    <a href="index.php" class="active" style="zoom:112%">SkillNinja ⚔︎</a>
    <a href="#home" class="" style="padding-top: 1.5%">News</a>
    <a href="aboutus.php" class="" style="padding-top: 1.5%">About Us</a>
    <a href="enquire.php" class="" style="padding-top: 1.5%">Enquire</a>
    <div>
  </div> 
    <?php
    // Check if the user is logged in
    session_start();
    if (isset($_SESSION['username'])) {
      // If logged in, show the username and a logout button
      echo '  <div class="dropdown">
    <button class="dropbtn">
      <img src="../Images/user.png" style="zoom:8%">&emsp;&emsp;
    </button>
    <div class="dropdown-content">
      <a>Signed in as <b>' .$_SESSION['username'].'</b></a>
      <hr>
      <a href="../Homepage/Profile/profile.php"><i class="material-icons">person</i> Profile</a>
      <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
    </div>
  </div> ';
    } else { // If not logged in, show the login form 
      echo '<a href="#" onclick="openform()" style="float:right;padding-top: 1%;"><i class="material-icons">person</i> Login</a>';
    } ?>
    <?php
    if (!isset($_SESSION['username'])) { ?>
      <a href="#home" class="" style="float: right; padding-top: 1.5%" onclick="openform2()"><button id="reg-btn"
          style="pointer-events: none">
          Join For Free!
        </button></a>
    <?php } ?>
    <a href="#none" style="padding-top: 1%">&nbsp;<input type="search" name="" id="" class="search-bar" />&nbsp;<i
        id="search-btn" class="fa fa-search"></i></a>
    <a href="javascript:void(0)" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>

  </div>
    <!-- Login -->
    <div class="form-popup" id="myform">
        <div class="form-container">
            <h1>Welcome Back!</h1>
            <a href="#closebtn" class="closebtn" onclick="closeform()"><i class="material-icons">close</i></a>
            <form action="../Database/logindb.php" method="POST">
                <input type="hidden" name="redirectTo" value="Homepage/aboutus.php">
                <label for="username">USERNAME:</label>
                <input type="text" name="uname" value="" id="" placeholder="Username" />
                <label for="password">PASSWORD:</label>
                <input type="password" value="" name="pass" placeholder="Password" />
                <p>
                    <a href="#forgotpass" style="text-decoration: none">Forgot Password?</a>
                </p>
                <button type="submit" name="login" value="login">Login</button>
            </form>
            <hr style="
              width: 45%;
              float: left;
              border: 1px solid rgb(204, 204, 204);
            " />
            <b>or</b>
            <hr style="
              width: 45%;
              float: right;
              border: 1px solid rgb(204, 204, 204);
            " />

            <p>
                New to SkillNinja?
                <a href="#home" onclick="openform2(),closeform()">SignUp</a>
            </p>
        </div>
    </div>

    <form action="../Database/registerdb.php" method="POST">
        <input type="hidden" name="redirectTo" value="Homepage/aboutus.php">
        <!-- Register -->
        <div class="form-popup" id="myform2" style="display: none">
            <div class="form-container">
                <h1>Sign Up</h1>
                <a href="#closebtn" class="closebtn" onclick="closeform2()"><i class="material-icons">close</i></a>
                <label for="Fullname">Full Name:</label>
                <input type="text" name="fullname" id="" placeholder="Enter Your Full Name" />
                <label for="username1">Username:</label>
                <input type="text" id="username" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?" min="0" max="99"
                    oninvalid="this.setCustomValidity('Username must be a combination lowercase alphabets and numbers only!')"
                    maxlength="12" name="username" id="" placeholder="Create a Username" />
                <label for="password1">Password:</label>
                <input type="password" name="password" id="password" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?"
                    oninvalid="this.setCustomValidity('Password must contain atleast 4 alphabets and a number!')"
                    maxlength="12" placeholder="Password" />

                <button type="submit" name="signup">Join Now!</button>

                <hr style="
              width: 45%;
              float: left;
              border: 1px solid rgb(204, 204, 204);
            " />
                <b>or</b>
                <hr style="
              width: 45%;
              float: right;
              border: 1px solid rgb(204, 204, 204);
            " />
                <p>
                    Already a user?
                    <a href="#home" onclick="openform(),closeform2()">Login</a>
                </p>
            </div>
        </div>
        <div class="about-section"><br>
      <h1>About Us</h1>
      <p>Made By Aaryan And Pranav, TY BBA(CA), ICCS.</p>
      <p>
        SkillNinja
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
    </div>

    <h2 style="text-align: center">OUR TEAM</h2>

<div class="card">
  <img src="../Images/aaryan.jpg" alt="John" style="width: 100%" />
  <h2>Aaryan Ojha</h2>
  <p class="title">CEO & Founder, Designer</p>
  <p>ICCS</p>
  <div style="margin: 24px 0">
    <a href="https://www.linkedin.com/in/aaryan-ojha-6ab578270"><i class="fa fa-linkedin"></i></a> 
    <a href="https://github.com/aaryanojha"><i class="fa fa-github"></i></a>
  </div>
  <p><button>Contact</button></p>
</div>

<div class="card2">
  <img src="../Images/pranav.jpg" alt="John" style="width: 100%" />
  <h2>Pranav Malwatkar</h2>
  <p class="title">CEO & Founder, Designer</p>
  <p>ICCS</p>
  <div style="margin: 24px 0">
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="https://www.linkedin.com/in/pranav-malwatkar-9834b1239"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook-f"></i></a>
  </div>
  <p><button>Contact</button></p>
</div>

<div style="text-align: center">SkillNinja ko banaya hai</div>
    </form>
</body>

</html>