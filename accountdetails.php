<?php session_start();?>
<html>
    <head>
        <?php include 'header.php'?>
        <?php include 'config.php'?>
        <style>
            body{
                background: url("img2.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                font-family: 'Poppins','sans-serif';
            }
            .container{
                margin: 50px 25% 50px 25%;
                align-content: center;
                padding: 20px;
                box-sizing: border-box;
                box-shadow: 1px 1px 8px black;
                width: 50%;
            }
            .con{
                margin: 5px;
                padding: 5px;
            }
            .con label{
                text-align: left;
            }
            input, select{
                width: 68%;
                padding: 7px;
                border: 2px solid rgb(103, 143, 2);
                border-radius: 5px;
                background-color: aliceblue;
            }
            .butt{
                margin-left: 40%;
                padding: 10px;
                background-color: gold;
                font-weight: bold;
                border-radius: 7px;
                box-shadow: 2px 4px solid rgba(138, 135, 135, 0);
                color: darkmagenta;
            }
            .butt:hover{
                background-color: chartreuse;
                color: darkred;
                transition: all 0.1s ease;
            }
        </style>
    </head>
    <body>
        <form class="container" id="form1" method="GET">
            <h1 align="center" style="margin: 10px; color:deeppink">Account Details</h1>
            <div class="con">
                <label style="margin-right: 68px;">Username : </label>
                <input type="text" name="username" placeholder="enter your username">
            </div>
            <div class="con">
                <label style="margin-right: 23px;">Account Number : </label>
                <input type="number" name="accountno" placeholder="enter account number">
            </div>
            <div class="con">
                <label style="margin-right: 72px;">Password : </label>
                <input type="password" name="password" placeholder="enter your password">
            </div>
            <div class="con">
                <label style="margin-right: 58px;">Pin Number : </label>
                <input type="number" name="pinno" placeholder="enter pin number">
            </div>
            <button type="submit" id="submit" class="butt" name="accdet">View Account Details</button>
        </form>
    </body>
</html>
