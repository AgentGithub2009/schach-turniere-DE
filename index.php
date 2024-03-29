<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Schach-Turniere-DE</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='lib/jquery.js'></script>
    <script src='js/Main.js'></script>
</head>

<style>
    body{
        background-image: url("https://cdn.discordapp.com/attachments/919621805243785266/1075496854944501780/Titelbild.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>
    <div id="headingRectangle"> 
        <h1 id="title"> <img src="./img/springer.jpg" width="40" height="60">chach-Turniere-DE</h1>
        <a href="myAccount.html"> <button id="myAccountButton" class="accountButton"> Mein Profil </button> </a>
    </div>

    <div id="playChessLink"> Play <a href="https://www.chess.com"> Chess </a></div>

    <div id="aboutUs"> <a href="./aboutUs.html"> Über uns </a></div>

    <div class="dropdown">
        <button id="tournamentsButton"> Turniere </button>
        
        <div class="dropdown-content">
            <a href="./comingTournaments.html" style="font-family: Mosk-ExtraBold; font-size: 18px;"> anstehende Turniere </a>
            <a href="./pastTournaments.html"> vergangene Turniere </a>
            <a href="./createTournament.html"> Turnier erstellen</a>
        </div>
    </div>


    <a href="login.html"> <button id="loginButton" class="accountButton" style="top: 325px; background-color: #4CAF50; left: 10px;"> Login </button> </a>
    <a href="signUp.html"> <button id="signUpButton" class="accountButton" style="top: 375px; background: none; left: 10px;"> Sign Up </button> </a>
</body>
</html>
