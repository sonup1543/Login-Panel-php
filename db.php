<?php

define('DB_NAME', 'lainteriors_in_taarefai_la');
define('DB_USER', 'lainteriors_in_taarefai_la');
define('DB_PASSWORD', 'taarefa_la');
define('DB_HOST', 'lainteriors.in.mysql');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

if (!$link) {
    die('Could not connect: ' . mysqli_error());
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}



if(isset($_POST['submit'])){
    $name = !empty($_POST['name']) ? $_POST['name'] : '';
    $email = !empty($_POST['email']) ? $_POST['email'] : '';
    $phone = !empty($_POST['phone']) ? $_POST['phone'] : '';
    $scope = !empty($_POST['scope']) ? $_POST['scope'] : '';
    $checkBox = isset($_POST['scopedetail']) && is_array($_POST['scopedetail']) ? implode(',', $_POST['scopedetail']) : '';
    $property = isset($_POST['scopedetai']) && is_array($_POST['scopedetai']) ? implode(',', $_POST['scopedetai']) : '';
    $budget = !empty($_POST['budget']) ? $_POST['budget'] : '';
    $month = !empty($_POST['period']) ? $_POST['period'] : '';
    $year = !empty($_POST['year']) ? $_POST['year'] : '';
    $currentDateTime = !empty($_POST['current_datetime']) ? $_POST['current_datetime'] : '';
    $ip_address = !empty($_POST['ip_address']) ? $_POST['ip_address'] : '';

    $dateObj = DateTime::createFromFormat('!m', $month);
    $monthName = $dateObj ? $dateObj->format('F') : '';




$sql = "INSERT INTO persons (Name, Email, Phone,Scope,Scopepoint,Interiorbuget,Interiormonth,Interioryear,Property,current_datetime,ip_address) VALUES ('$name', '$email', '$phone','$scope','$checkBox','$budget','$monthName','$year','$property', '$currentDateTime', '$ip_address')";
 mysqli_query($link, $sql);

    $from = $email;
    
    $subject = "New Query Quotation For Residential";
    $subject2 = "New Query Quotation For Commercial";
    $email_to = "info@lainteriors.in,anil@outsourcingservicesusa.com";
    $headers = 'From: info@lainteriors.in' . "\r\n";
 
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    $email_to1 = $email;
    $subject1 = "Thank You For The Contact";
    $message1 ="Hello,<br><br>
 

             We appreciate you contacting us. We have received your request and will get back in touch with you soon!<br>
 

             If your inquiry is urgent, please use the telephone number listed below to talk to one of our staff members.<br>
             
<img src='http://lainteriors.in/wp-content/uploads/2020/02/LA-interior-logo.png' style='display:block;margin:0 auto; background-color:black;' >
( A Unit of Ornate Interiors India Pvt Ltd )<br>
BH-715/716, 81 High Street<br>
Sector – 81,<br>
Greater Faridabad, Haryana – 121002<br>
Phone: +91 9873280202 / +91 9990780202<br>
(*complaints will not be entertained on these numbers)<br>
Customer Care No. : +91 9990680202
<br><br>

<b>Stay Connected</b><br>

 https://www.facebook.com/lainteriors.in/<br>

https://www.instagram.com/lainteriors98/<br>";
    

 $message="
<html>
<head>
<title>HTML email</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
<style>
#customers {
  font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #43a9bb;
  color: white;
}
</style>
</head>
<body>
<div class='container'>
 <img src='http://lainteriors.in/wp-content/uploads/2020/02/LA-interior-logo.png' style='display:block;margin:0 auto;background-color:black;'>
 <h4 style='text-align:center'>Here is the detailed information</h4>
 <br>
<div>
<table id='customers'style='display:table;margin:0 auto;'>
<tr>
<th>Name</th>
<td>" . $name . "</td>
</tr>
<tr>
<th>Email</th>
<td>" . $email . "</td>
</tr>
<tr>
<th>Phone Number</th>
<td>" . $phone . "</td>
</tr>
<tr>
<th>Scope</th>
<td>" . $scope . "</td>
</tr>
<tr>
<th>Property Size</th>
<td>" . $checkBox . "</td>
<tr>
<tr>
<th>Property Requirement</th>
<td>" . $property . "</td>
<tr>
<th>Budget</th>
<td>" . $budget . "</td>
</tr>
<tr>
<th>Month</th>
<td>" . $monthName . "</td>
</tr>
<tr>
<th>Year</th>
<td>".$year."</td>
</tr>
</table>
</div>
</div>
</body>
</html>
";

$message2 ="
<html>
<head>
<title>HTML email</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
<style>
#customers {
  font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #43a9bb;
  color: white;
}
</style>
</head>
<body>
<div class='container'>
 <img src='http://lainteriors.in/wp-content/uploads/2020/01/logos-11.png' style='display:block;margin:0 auto;'>
 <h4 style='text-align:center'>Here is the detailed information</h4>
 <br>
<div>
<table id='customers'style='display:table;margin:0 auto;'>
<tr>
<th>Name</th>
<td>" . $name . "</td>
</tr>
<tr>
<th>Email</th>
<td>" . $email . "</td>
</tr>
<tr>
<th>Phone Number</th>
<td>" . $phone . "</td>
</tr>
<tr>
<th>Scope</th>
<td>" . $scope . "</td>
</tr>
<tr>
<th>Property Size</th>
<td>" . $checkBox . "</td>
</tr>
<tr>
<th>Budget</th>
<td>" . $budget . "</td>
</tr>
<tr>
<th>Month</th>
<td>" . $monthName . "</td>
</tr>
<tr>
<th>Year</th>
<td>".$year."</td>
</tr>
</table>
</div>
</div>
</body>
</html>
";


    if ('Residential'== $scope){

   // mail($email_to, $subject, $message, $headers,$from);
    $mailSuccess = mail($email_to, $subject, $message, $headers);
    
    }else{
    
   // mail($email_to, $subject2, $message2, $headers,$from);
     $mailSuccess = mail($email_to, $subject2, $message2, $headers);
}
    
   // mail($email_to1, $subject1, $message1, $headers,$headers);
        $mailSuccess1 = mail($email_to1, $subject1, $message1, $headers);



    // End sending email data...

    if ($mailSuccess) { ?>
    
        <script language="javascript" type="text/javascript">
            window.location = 'http://lainteriors.in/thank-you';
        </script>
    <?php }    else { ?>
        <script language="javascript" type="text/javascript">
            alert('Message failed. Please, 0000');
            window.location = '<?php echo site_url(); ?>/get-quotes/';
        </script>
<?php

    }

}

?>
