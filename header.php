<html>
    <head>
        <title>Indian Bank</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="bankicon.jpg">
        <style>
            *{
                padding: 0;
                margin: 0;
                font-family: 'Poppins', sans-serif;
                box-sizing: border-box;
            }
            .menu-bar{
                background: rgb(0,100,0);
                text-align: center;
            }
            .menu-bar ul{
                display: inline-flex;
                list-style: none;
                color: #fff;
            }
            .menu-bar ul li{
                width: 120px;
                margin: 10px;
                padding-top: 12px;
                padding-bottom: 12px;
            }
            .menu-bar ul li a{
                text-decoration: none;
                color: #fff;
            }
            .active, .menu-bar ul li:hover{
                background: #2bab0d;
                border-radius: 3px;
            }
            .menu-bar .fa{
                margin-right: 8px;
            }
            .sub-menu-1{
                display: none;
            }
            .menu-bar ul li:hover .sub-menu-1{
                display: block;
                position: absolute;
                background: rgb(0,100,0);
                margin-top: 15px;
                margin-left: 15px;
            }
            .menu-bar ul li:hover .sub-menu-1 ul{
                display: block;
                margin: 10px;
            }
            .menu-bar ul li:hover .sub-menu-1 ul li{
                width: 150px;
                padding: 10px;
                border-bottom: 1px dotted #fff;
                background: transparent;
                border-radius: 0;
                text-align: left;
            }
            .menu-bar ul li:hover .sub-menu-1 ul li:last-child{
                border-bottom: none;
            }
            .menu-bar ul li:hover .sub-menu-1 ul li a:hover{
                color: #b2ff00;
            }
        </style>
    </head>
    <body>
        <div class="menu-bar">
            <ul>
                <li class="active">
                    <a href="#"><i class="fa fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"></i>About Us</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="contact.php" target="_blank">Contact Us</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Login</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="createaccount.php" target="_blank">Create Account</a></li>
                            <li><a href="login.php" target="_blank">Sign in</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-university"></i>Accounts</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="accountdetails.php" target="_blank">Account Details</a></li>
                            <li><a href="transactionhistory.php" target="_blank">Transaction History</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-inr"></i>Credit/Debit</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="deposit.php" target="_blank">Deposit</a></li>
                            <li><a href="withdrawal.php" target="_blank">Withdrawal</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-solid fa-mobile"></i>Digital</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="transactions.php" target="_blank">Internet Banking</a></li>
                            <li><a href="transactions.php" target="_blank">Mobile Banking</a></li>
                            <li><a href="#">Cyber Security</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <script src="node_modules/@fortawesome/fontawesome-free/js/all.js" charset="utf-8"></script>
    </body>
</html> 
