<?php session_start();?>
<html>
    <head>
        <?php include 'header.php'?>
        <?php include 'config.php'?>
        <style>
            body{
                background: url("invest.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                font-family: 'Poppins', sans-serif;
            }
            .container{
                margin: 50px 25% 50px 25%;
                align-content: center;
                padding: 20px;
                box-sizing: border-box;
                box-shadow: 1px 1px 8px black;
                width: 55%;
            }
            .con{
                margin: 5px;
                padding: 5px;
            }
            .con label{
                text-align: left;
            }
            input, select{
                width: 70%;
                padding:5px;
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
        <form class="container" method="POST">
            <h1 align="center" style="margin: 10px;">Deposit</h1>
            <div class="con">
                <label style="margin-right: 45px;">Username : </label>
                <input type="text" name="user" placeholder="enter your username">
            </div>
            <div class="con">
                <label style="margin-right: 50px;">Password : </label>
                <input type="password" name="psd" placeholder="enter your password">
            </div>
            <div class="con">
                <label style="margin-right: 23px;">Account Type : </label>
                <select name="acctype">
                    <option value="-1">--Account Type--</option>
                    <option>Current Account</option>
                    <option>Saving Account</option>
                    <option>Salary Account</option>
                    <option>Deposit Account</option>
                    <option>NRI Account</option>
                </select>
            </div>
            <div class="con">
                <label style="margin-right: 69px;">Branch : </label>
                <select name="branch">
                    <option value="-1">--Branch--</option>
                    <option>Visakhapatnam</option>
                    <option>Hyderabad</option>
                    <option>Bangalore</option>
                    <option>Chennai</option>
                    <option>New Delhi</option>
                </select>
            </div>
            <div class="con">
                <label style="margin-right: 27px;">Expiry Month : </label>
                <input type="number" name="expmonth" placeholder="enter expiry month on your card">
            </div>
            <div class="con">
                <label style="margin-right: 40px;">Expiry Year : </label>
                <input type="number" name="expyear" placeholder="enter expiry year on your card">
            </div>
            <div class="con">
                <label style="margin-right: 88px;">CVV : </label>
                <input type="number" name="cvv" placeholder="enter cvv on your card">
            </div>
            <div class="con">
                <label style="margin-right: 2px;">Account Number : </label>
                <input type="number" name="accnum" placeholder="enter account number">
            </div>
            <div class="con">
                <label style="margin-right: 40px;">Pin number : </label>
                <input type="number" name="pin" placeholder="enter pin number">
            </div>
            <div class="con">
                <label style="margin-right: 28px;">Deposit Type : </label>
                <select name="depo">
                    <option value="-1">--Deposit Type--</option>
                    <option>Fixed Deposit</option>
                    <option>Recurring Deposit</option>
                    <option>Flexi Deposit</option>
                    <option>Anuity Deposit</option>
                    <option>Special Term Deposit</option>
                </select>
            </div>
            <div class="con">
                <label style="margin-right: 9px;">Deposit Amount : </label>
                <input type="number" name="amount" placeholder="enter deposit amount in rupees">
            </div>
            <button type="submit" class="butt" name="depo">Deposit</button>
        </form>
    </body>
</html>
