<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'header.php';?> 
        <?php include 'config.php';?> 
        <style>
            body{
                background: url("bank3.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                font-family: 'Poppins', sans-serif;
            }
            .createform{
                margin: 50px 20% 50px 20%;
                align-content: center;
                padding: 20px;
                box-sizing: border-box;
                box-shadow: 1px 1px 8px black;
            }
            .mb-3{
                margin: 10px;
                padding: 10px;
            }
            .mb-3 label{
                text-align: left;
            }
            input:not([type="radio"]), select{
                width: 60%;
                padding:5px;
                border: 2px solid darkblue;
                border-radius: 5px;
            }
            button{
                padding: 10px;
                margin: 5px;
                border-radius: 5px;
                box-shadow: 2px 4px rgb(153, 2, 254); 
                color: rgb(153, 2, 254);
                background-color: rgb(255, 247, 0);
                font-weight: bold;
            }
            button:hover{
                background-color: chartreuse;
                color: black;
                box-shadow: none;
                transition: all 1s ease;
            }
        </style>
    </head>
    <body>
        <center>
        <form action="" method="POST" class="createform">
            <h1 align="center" style="margin: 5px;">Create Account</h1>
            <div class="mb-3">
              <label style="margin-right: 40px;">Full Name : </label>
              <input type="text" id="name" name="name" placeholder="enter your full name">
            </div>
            <div class="mb-3">
              <label style="margin-right: 35px;">Occupation : </label>
              <input type="text" id="occ" name="occupation" placeholder="enter your occupation">
            </div>
            <div class="mb-3" style="display: flex;">
                <p style="margin-left: 60px; margin-right: 63px;">Address : </p>
                <textarea rows="7" cols="53" name="address" placeholder="enter your address" style="border: 2px solid darkblue; border-radius: 5px;"></textarea>
            </div>
            <div class="mb-3">
              <label style="margin-right: 57px;">Email ID : </label>
              <input type="email" id="email" name="email" placeholder="enter your email address">
            </div>
            <div class="mb-3">
              <label style="margin-right: 5px;">Contact Number : </label>
              <input type="number" id="contact" name="contact" placeholder="enter your contact number">
            </div>
            <div class="mb-3">
              <label style="margin-right: 50px;">Password : </label>
              <input type="password" id="password"  name="password" placeholder="enter your password">
            </div>
            <div class="mb-3" style="display: flex; padding-right: 30px; align-items: center;">
                <label style="margin-right: 70px; margin-left: 59px;">Gender : </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                    <label class="form-check-label" for="flexRadioDefault1" style="margin-right: 100px;">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Female
                    </label>
                  </div>
            </div>
            <div class="mb-3">
                <label class="branch" style="margin-right: 68px;">Branch : </label>
                <select id="branch" name="branch">
                    <option value="-1">--Branch--</option>
                    <option>Visakhapatnam</option>
                    <option>Hyderabad</option>
                    <option>Bangalore</option>
                    <option>Chennai</option>
                    <option>New Delhi</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="account_type" style="margin-right: 24px;">Account Type : </label>
                <select id="account_type" name="account_type">
                    <option value="-1">--Account Type--</option>
                    <option>Current Account</option>
                    <option>Saving Account</option>
                    <option>Salary Account</option>
                    <option>Deposit Account</option>
                    <option>NRI Account</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="sub">Create Account</button>
        </form>
        </center>
    </body>
</html>
