<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Overlock">
    <title>VOX - Sign Up</title>
    <script src="script.js"></script>
</head>
<body>
    <header>
        <ul>
            <li class="left-nav"><a href="index.html">VOX</a></li>
            <li class="right-nav"><a class="active" href="login.php">Login</i></a></li>
            <li class="right-nav"><a href="signup.php">Sign Up</a></li>
            <li class="right-nav"><a href="movies.html">Movies</a></li>
            <li class="right-nav"><a href="index.html">Home</a></li>
        </ul>
    </header>
    <h1 id="signuptext">LOGIN</h1>
    <form id="signupform" action="signup.php" method="POST">
        <p>Enter Username</p>
        <input type="text" style="font-color:black" placeholder="Type Username">
        <br>
        <p>Enter Password</p>
        <input type="password" placeholder="Type Password">
        <br>
        <input type="submit" value="Login">
        <br>
        <br>    
        <p>Not yet a member? <a href="signup.php">Sign Up</a>
        <br>
        <br>
        <p><a href="forgotpassword.php">Forgot Password?</a></p>
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