<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Overlock">
    <title>VOX - Sign Up</title>
    <script src="script.js"></script>
</head>
<body>
    <header>
        <ul>
            <li class="left-nav"><a href="index.html">VOX</a></li>
            <li class="right-nav"><a href="login.php">Login</i></a></li>
            <li class="right-nav"><a class="active" href="signup.php">Sign Up</a></li>
            <li class="right-nav"><a href="movies.html">Movies</a></li>
            <li class="right-nav"><a href="index.html">Home</a></li>
        </ul>
    </header>
    <h1 id="signuptext">SIGN UP</h1>
    <form id="signupform" action="signup.php" method="POST">
        <p>Enter Username</p>
        <input type="text" placeholder="Type Username">
        <p>Enter Email ID</p>
        <input type="email" placeholder="Type email">
        <br>
        <p>Enter Password</p>
        <input type="password" placeholder="Type Password">
        <br>
        <p>Re-enter Password</p>
        <input type="password" placeholder="Retype Password">
        <br>
        <input type="submit" value="Sign Up">
        <br>
        <br>    
        <p>Already a member? <a href="login.php">Login</a>
        <br>
        <br>
        <h1 id="ortext">OR</h1>
        <br>
        <button class="social facebook">Sign in using Facebook</button>
        <br>    
        <button class="social twitter">Sign in using Twitter</button>
        <br> 
        <button class="social google">Sign in using Google</button> 
    </form>
    <br>
    <button class="openbtn" onclick="openForm();">Chat with TicketBot</button>
    <div class="chatbox" id="myForm">
        <form action="chatbot.php" class="chatform" method="POST">
            <p>Chat</p>
            <label for="msg"><b>Message</b></label>
            <textarea placeholder="Type Message..." name="msg" required></textarea>
            <button type="submit" class="sendbtn">Send</button>
            <button type="button" class="cancelbtn" onclick="closeForm();">Close</button>
        </form>
    </div>
    <br>
    <hr>
    <footer>
        <ul>
            <li><a href="#"><i class="fa fa-headphones"></i> Customer Care</a></li>
            <li><a href="#"><i class="fa fa-comment"></i> FAQs</a></li>
            <li><a href="#"><i class="fa fa-phone"></i><abbr title="+91 9844706287"> Contact Us</abbr></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i><abbr title="ticketempire@gmail.com"> Email Us</abbr></a></li>
        </ul>
        <div>
            <p>Copyright © TicketEmpire 2019. All rights reserved.</p>
        </div>
    </footer>    
</body>
</html>