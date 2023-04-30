<?php

$server='localhost';
$username='root';
$password='';
$database='banking';

$conn = mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);

}
echo"";

if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $occupation=$_POST['occupation'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $branch=$_POST['branch'];
    $account_type=$_POST['account_type'];
    $account_balance=100;
    $expiry_month=10;
    $expiry_year=2032;
    $cvv=rand(100,999);
    $pin=rand(1000,9999);

    $result = mysqli_query($conn,"SELECT MAX(account_num) AS large FROM `account`");
    $row = mysqli_fetch_array($result);
    $row['large']+=1;

    $sql = "INSERT INTO `account`(`name`, `occupation`, `address`, `email`, `contact`, `password`, `gender`, `branch`, `account_type`, `account_balance`,`expiry_month`,`expiry_year`,`cvv`,`pin`) VALUES ('$name','$occupation','$address','$email','$contact','$password','$gender','$branch','$account_type','$account_balance','$expiry_month','$expiry_year','$cvv','$pin')";
    if(mysqli_query($conn,$sql)){
        echo "Your account created successfully in INDIAN BANK. Your Account Number is ". $row['large'] .", your pin number is ". $pin ." and your Current Balance is ". $account_balance;
    }
    else{
        echo "ERROR: Failed to create your account due to $sql. ". mysqli_error($conn);
    }
}

if(isset($_POST['login'])){
    $uname=$_POST['username'];
    $pswd=$_POST['password'];
    $query = "SELECT * FROM `account` WHERE `name`='$uname' AND `password`='$pswd'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        $date=date("Y/m/d");
        date_default_timezone_set('Asia/Calcutta');
        $time=date("H:i:s");
        $quer = "INSERT INTO `login`(`username`,`password`,`login_date`,`login_time`) VALUES ('$uname','$pswd','$date','$time')";
        mysqli_query($conn,$quer);
        echo '<script>alert("You have successfully logged in");</script>';
        $URL1="home.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
    }
    else{
        echo '<script>alert("Incorrect EmailID or Password");</script>';
        $URL2="login.php";
        echo "<script type='text/javascript'>document.location.href='{$URL2}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL2 . '">';
    }
}

if(isset($_POST['depo'])){
    $accnum=$_POST['accnum'];
    $user=$_POST['user'];
    $psd=$_POST['psd'];
    $acctype=$_POST['acctype'];
    $branch=$_POST['branch'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];
    $depotype=$_POST['depotype'];
    $amount=$_POST['amount'];
    $pin=$_POST['pin'];

    $sqlquery = "SELECT * FROM `account` WHERE `account_num`='$accnum' AND `name`='$user' AND `password`='$psd' AND `account_type`='$acctype' AND `branch`='$branch' AND `expiry_month`='$expmonth' AND `expiry_year`='$expyear' AND `cvv`='$cvv' AND `pin`='$pin'"; 
    $result=mysqli_query($conn,$sqlquery);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        $depodate=date("Y/m/d");
        date_default_timezone_set('Asia/Calcutta');
        $depotime=date("H:i:s");
        $que1="SELECT `account_balance` FROM `account` WHERE `account_num`='$accnum'";
        $val=mysqli_query($conn,$que1);
        $pre=mysqli_num_rows($val);
        $rows=mysqli_fetch_array($val);
        $balance=$rows['account_balance'];
        $bal=$balance+$amount;
        $sqlque1 = "INSERT INTO `deposit`(`account_number`, `username`, `password`, `account_type`, `branch`, `expiry_month`, `expiry_year`, `cvv`, `pin`, `deposit_type`, `deposit_amount`, `current_balance`, `deposit_date`, `deposit_time`) VALUES ('$accnum','$user','$psd','$acctype','$branch','$expmonth','$expyear','$cvv','$pin','$depotype','$amount','$bal','$depodate','$depotime')";
        $sqlque2 = "UPDATE `account` SET `account_balance`='$bal' WHERE `account_num`='$accnum'";
        mysqli_query($conn,$sqlque1);
        mysqli_query($conn,$sqlque2);
        echo '<script>alert("Your amount deposited successfully");</script>';
        $URL1="home.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
    }
    else{
        echo '<script>alert("Please enter a valid Acccount Details");</script>';
        $URL1="deposit.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
    }
}

if(isset($_POST['withd'])){
    $accnum=$_POST['accnum'];
    $user=$_POST['user'];
    $psd=$_POST['psd'];
    $acctype=$_POST['acctype'];
    $branch=$_POST['branch'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];
    $amount=$_POST['amount'];
    $pin=$_POST['pin'];

    $sqlquery = "SELECT * FROM `account` WHERE `account_num`='$accnum' AND `name`='$user' AND `password`='$psd' AND `account_type`='$acctype' AND `branch`='$branch' AND `expiry_month`='$expmonth' AND `expiry_year`='$expyear' AND `cvv`='$cvv' AND `pin`='$pin'"; 
    $result=mysqli_query($conn,$sqlquery);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        $withddate=date("Y/m/d");
        date_default_timezone_set('Asia/Calcutta');
        $withdtime=date("H:i:s");
        $que1="SELECT `account_balance` FROM `account` WHERE `account_num`='$accnum'";
        $val=mysqli_query($conn,$que1);
        $pre=mysqli_num_rows($val);
        $rows=mysqli_fetch_array($val);
        $balance=$rows['account_balance'];
        $bal=$balance-$amount;
        $sqlque1 = "INSERT INTO `withdraw`(`account_number`, `username`, `password`, `account_type`, `branch`, `expiry_month`, `expiry_year`, `cvv`, `pin`, `withdrawal_amount`, `current_balance`,`withdrawal_date`,`withdrawal_time`) VALUES ('$accnum','$user','$psd','$acctype','$branch','$expmonth','$expyear','$cvv','$pin','$amount','$bal','$withddate','$withdtime')";
        $sqlque2 = "UPDATE `account` SET `account_balance`='$bal' WHERE `account_num`='$accnum'";
        mysqli_query($conn,$sqlque1);
        mysqli_query($conn,$sqlque2);
        echo '<script>alert("Your amount withdrawed successfully");</script>';
        $URL1="home.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
    }
    else{
        echo '<script>alert("Please enter a valid Acccount Details");</script>';
        $URL1="deposit.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
    }
}

if(isset($_POST['trans'])){
    $fromuser=$_POST['fromuser'];
    $psd=$_POST['psd'];
    $acctype=$_POST['acctype'];
    $fromaccnum=$_POST['fromaccnum'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];
    $pin=$_POST['pin'];
    $amount=$_POST['amount'];
    $touser=$_POST['touser'];
    $toaccnum=$_POST['toaccnum'];

    $sqlquery1 = "SELECT * FROM `account` WHERE `account_num`='$fromaccnum' AND `name`='$fromuser' AND `password`='$psd' AND `account_type`='$acctype' AND `expiry_month`='$expmonth' AND `expiry_year`='$expyear' AND `cvv`='$cvv' AND `pin`='$pin'"; 
    $result1=mysqli_query($conn,$sqlquery1);
    $row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
    $sqlquery2 = "SELECT * FROM `account` WHERE `name`='$touser' AND `account_num`='$toaccnum'";
    $result2=mysqli_query($conn,$sqlquery2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if((mysqli_num_rows($result1)==1) && (mysqli_num_rows($result2)==1)){
        $transdate=date("Y/m/d");
        date_default_timezone_set('Asia/Calcutta');
        $transtime=date("H:i:s");
        $que1="SELECT `account_balance` FROM `account` WHERE `account_num`='$fromaccnum'";
        $que2="SELECT `account_balance` FROM `account` WHERE `account_num`='$toaccnum'";
        $val1=mysqli_query($conn,$que1);
        $val2=mysqli_query($conn,$que2);
        $pre1=mysqli_num_rows($val1);
        $pre2=mysqli_num_rows($val2);
        $rows1=mysqli_fetch_array($val1);
        $rows2=mysqli_fetch_array($val2);
        $balance1=$rows1['account_balance'];
        $balance2=$rows2['account_balance'];
        $bal1=$balance1-$amount;
        $bal2=$balance2+$amount;
        $sqlque = "INSERT INTO `transactions`(`from_user`, `password`, `account_type`, `from_account_no`, `expiry_month`, `expiry_year`, `cvv`, `pin`, `to_user`, `to_account_no`, `transfer_amount`, `from_account_balance`, `to_account_balance`, `transaction_date`, `transaction_time`) VALUES ('$fromuser','$psd','$acctype','$fromaccnum','$expmonth','$expyear','$cvv','$pin','$touser','$toaccnum','$amount','$bal1','$bal2','$transdate','$transtime')";
        $sqlque1 = "UPDATE `account` SET `account_balance`='$bal1' WHERE `account_num`='$fromaccnum'";
        $sqlque2 = "UPDATE `account` SET `account_balance`='$bal2' WHERE `account_num`='$toaccnum'";
        mysqli_query($conn,$sqlque);
        mysqli_query($conn,$sqlque1);
        mysqli_query($conn,$sqlque2);
        echo '<script>alert("Your Transaction is successful");</script>';
        $URL1="home.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
    }
    else{
        echo '<script>alert("Please enter a valid Acccount Details to make a Transaction");</script>';
        $URL1="transactions.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
    }
}

if(isset($_GET['accdet'])){
    $username=$_GET['username'];
    $accountno=$_GET['accountno'];
    $password=$_GET['password'];
    $pinno=$_GET['pinno'];

    $sqlq = "SELECT * FROM `account` WHERE `name`='$username' AND `account_num`='$accountno' AND `password`='$password' AND `pin`='$pinno'";
    $results=mysqli_query($conn,$sqlq);
    $row=mysqli_fetch_array($results,MYSQLI_ASSOC);
    if(mysqli_num_rows($results)==1){
        echo "<style>
                 .container{
                     display: none;
                 } 
                 center{
                     line-height: 25px;
                 }        
              </style>
          <center><br><h1>Your Account Details</h1><br>
          <p><b>Account Number : </b>". $row['account_num'] .
          "<br><b>Account Holder Name : </b>". $row['name'] .
          "<br><b>Occupation : </b>". $row['occupation'] .
          "<br><b>Address : </b>". $row['address'] .
          "<br><b>Email ID : </b>". $row['email'] .
          "<br><b>Contact Number : </b>". $row['contact'] .
          "<br><b>Password : </b>". $row['password'] .
          "<br><b>Gender : </b>". $row['gender'] .
          "<br><b>Branch : </b>". $row['branch'] .
          "<br><b>Account Type : </b>". $row['account_type'] .
          "<br><b>Expiry Month : </b>". $row['expiry_month'] .
          "<br><b>Expiry Year : </b>". $row['expiry_year'] .
          "<br><b>CVV : </b>". $row['cvv'] .
          "<br><b>Pin : </b>". $row['pin'] .
          "<br><b>Current Balance : </b>". $row['account_balance'] ."</p></center>";
    }
    else{
        echo '<script>alert("Account Details not found");</script>';
        $URL1="accountdetails.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
    }
}

if(isset($_GET['viewtrans'])){
    $username=$_GET['username'];
    $accountno=$_GET['accountno'];
    $password=$_GET['password'];
    $pinno=$_GET['pinno'];

    $sqlq = "SELECT * FROM `account` WHERE `name`='$username' AND `account_num`='$accountno' AND `password`='$password' AND `pin`='$pinno'";
    $results=mysqli_query($conn,$sqlq);
    $row=mysqli_fetch_array($results,MYSQLI_ASSOC);
    if(mysqli_num_rows($results)==1){
        $sqlqu = "SELECT * FROM `transactions` WHERE `from_user`='$username' AND `from_account_no`='$accountno' AND `password`='$password' AND `pin`='$pinno'";
        $sqlqi = "SELECT * FROM `transactions` WHERE `to_user`='$username' AND `to_account_no`='$accountno'";
        $que1="SELECT `account_balance` FROM `account` WHERE `account_num`='$accountno'";
        $val1=mysqli_query($conn,$que1);
        $pre1=mysqli_num_rows($val1);
        $rows11=mysqli_fetch_array($val1);
        $balance1=$rows11['account_balance'];
        echo "
          <style>
            .container{
                display: none;
            }  
            table,th,tr,td{
                border:1px solid white;
                border-collapse: collapse;
                color: white;
                text-align: center;
            }   
            th,td{
                padding: 10px;
            }       
          </style>
          <center style='color: white;'><br><h1>Your Transactions</h1><br>
          <h3>Amount Transferred : </h3><br>
          <table>
                <tr>
                    <th>To Account Number</th>
                    <th>To Username</th>
                    <th>Amount Transferred</th>
                    <th>Transaction Date</th>
                    <th>Transaction Time</th>
                    <th>Your Account Balance</th>
                </tr>";    
        if($resu1=$conn->query($sqlqu)){
            while($rows1=$resu1->fetch_assoc()){
                echo "<tr><td>". $rows1['to_account_no'] ."</td>
            <td>". $rows1['to_user'] ."</td>
            <td>". $rows1['transfer_amount'] ."</td>
            <td>". $rows1['transaction_date'] ."</td>
            <td>". $rows1['transaction_time'] ."</td>
            <td>". $rows1['from_account_balance'] ."</td></tr>";
            }
        }             
          echo "</table><br>
          <h3>Amount Recieved : </h3><br>
          <table>
                <tr>
                    <th>From Account Number</th>
                    <th>From Username</th>
                    <th>Amount Recieved</th>
                    <th>Transaction Date</th>
                    <th>Transaction Time</th>
                    <th>Your Account Balance</th>
                </tr>";
                if($resu2=$conn->query($sqlqi)){
                    while($rows2=$resu2->fetch_assoc()){
                        echo "<tr><td>". $rows2['from_account_no'] ."</td>
                    <td>". $rows2['from_user'] ."</td>
                    <td>". $rows2['transfer_amount'] ."</td>
                    <td>". $rows2['transaction_date'] ."</td>
                    <td>". $rows2['transaction_time'] ."</td>
                    <td>". $rows2['to_account_balance'] ."</td></tr>";
                    }
                }        
          echo "</table><br>
          <h3>Your Current Balance : ". $balance1 ."</h3></center><br>";
    }
    else{
        echo '<script>alert("Account Details not found");</script>';
        $URL1="transactionhistory.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
    }
}

if(isset($_GET['submit'])){
    $fullname=$_GET['fullname'];
    $email=$_GET['email'];
    $mobile=$_GET['mobile'];
    $message=$_GET['message'];

    $sqlcon = "INSERT INTO `contact`(`name`, `email`, `mobile_number`, `message`) VALUES ('$fullname','$email','$mobile','$message')";
    mysqli_query($conn,$sqlcon);
    echo '<script>alert("Your message sent successfully");</script>';
        $URL1="home.php";
        echo "<script type='text/javascript'>document.location.href='{$URL1}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL1 . '">';
}

mysqli_close($conn);
?>
