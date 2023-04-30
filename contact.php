<?php session_start();?>
<html>
    <head>
        <?php include 'header.php'?>
        <?php include 'config.php'?>
        <style>
            body{
                background: url("img4.jpg");
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
            input, select, textarea{
                width: 70%;
                padding: 7px;
                border: 2px solid rgb(103, 143, 2);
                border-radius: 5px;
                background-color: aliceblue;
            }
            .butt{
                margin-left: 40%;
                padding: 10px;
                background-color: rgb(255, 0, 221);
                font-weight: bold;
                border-radius: 7px;
                box-shadow: 2px 4px solid rgba(138, 135, 135, 0);
                color: rgb(255, 255, 255);
            }
            .butt:hover{
                background-color: rgb(30, 0, 255);
                color: rgb(255, 238, 0);
                transition: all 0.1s ease;
            }
        </style>
    </head>
    <body>
        <form class="container" id="form1" method="GET">
            <h1 align="center" style="margin: 10px; color:rgb(90, 26, 122)">Contact Us</h1>
            <div class="con">
                <label style="margin-right: 50px;">Full Name : </label>
                <input type="text" name="fullname" placeholder="enter your full name">
            </div>
            <div class="con">
                <label style="margin-right: 60px;">Email ID : </label>
                <input type="email" name="email" placeholder="enter your email id">
            </div>
            <div class="con">
                <label style="margin-right: 15px;">Mobile Number : </label>
                <input type="number" name="mobile" placeholder="enter your mobile number">
            </div>
            <div class="con" style="display: flex;">
                <p style="margin-right: 30px;">Your Message : </p>
                <textarea rows="5" cols="35" name="message" placeholder="enter your message"></textarea>
            </div>
            <button type="submit" id="submit" class="butt" name="submit">Submit</button>
        </form>
    </body>
</html>
