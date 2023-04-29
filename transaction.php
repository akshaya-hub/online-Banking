<?php session_start();?>
<html>
    <head>
        <?php include 'header.php'?>
        <?php include 'config.php'?>
        <style>
            body{
                background: url("trans.png");
                background-size: cover;
                background-repeat: no-repeat;
                font-weight: bold;
                font-family: 'Poppins','sans-serif';
            }
            .container{
                margin: 50px 15% 50px 15%;
                align-content: center;
                padding: 20px;
                box-sizing: border-box;
                box-shadow: 1px 1px 8px black;
                width: 70%;
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
        <form class="container" method="POST">
            <h1 align="center" style="margin: 10px; color:rgb(61, 10, 115)">Transactions</h1>
            <div class="con">
                <label style="margin-right: 32px;">Your Account Username : </label>
                <input type="text" name="fromuser" placeholder="enter your username">
            </div>
            <div class="con">
                <label style="margin-right: 34px;">Your Account Password : </label>
                <input type="password" name="psd" placeholder="enter your password">
            </div>
            <div class="con">
                <label style="margin-right: 72px;">Your Account Type : </label>
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
                <label style="margin-right: 47px;">Your Account Number : </label>
                <input type="number" name="fromaccnum" placeholder="enter account number">
            </div>
            <div class="con">
                <label style="margin-right: 7px;">Your Account Expiry Month : </label>
                <input type="number" name="expmonth" placeholder="enter expiry month on your card">
            </div>
            <div class="con">
                <label style="margin-right: 22px;">Your Account Expiry Year : </label>
                <input type="number" name="expyear" placeholder="enter expiry year on your card">
            </div>
            <div class="con">
                <label style="margin-right: 75px;">Your Account CVV : </label>
                <input type="number" name="cvv" placeholder="enter cvv on your card">
            </div>
            <div class="con">
                <label style="margin-right: 20px;">Your Account Pin number : </label>
                <input type="number" name="pin" placeholder="enter pin number">
            </div>
            <div class="con">
                <label style="margin-right: 27px;">Enter Amount to transfer : </label>
                <input type="number" name="amount" placeholder="enter amount to be transferred">
            </div>
            <div class="con">
                <label style="margin-right: 52px;">Transfer to Username : </label>
                <input type="text" name="touser" placeholder="enter username to which amount to be transferred">
            </div>
            <div class="con">
                <label>Transfer to Account Number : </label>
                <input type="number" name="toaccnum" placeholder="enter account number to which amount to be transferred">
            </div>
            <button type="submit" class="butt" name="trans">Transfer Money</button>
        </form>
    </body>
</html>
