

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Request a quote</title>
        <link href="~/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        
        <script src="Scripts/jquery-1.8.3.js"></script>
        <script src="Scripts/jquery.validate.js"></script>
        <link rel="stylesheet" href="Scripts/print.css type="text/css" media="print">
        <script src="Scripts/bootstrap.js"></script>
        <link href="Content/bootstrap.css" rel="stylesheet" type="text/css">

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Content/bootstrap-responsive.css" rel="stylesheet">

    </head>
    <body>

    <style type="text/css">
        th {
            
        }

           tr {
            padding-bottom:  5px;
            border-bottom: 1px solid #000000;
        }
        
    </style>
    <div class="container">

        <div class="row">
            <div class="span12">
                <h4>Thank you! The following information has been delivered to Indiana Standards Laboratory.</h4>
            </div>
        </div>

    <div class="row">
      <?php

        if (isset($_POST)){
           
            $html= '<h1>Quote request</h1><hr>';
            $html.= '<h4>Contact Name:</h4> '.$_POST['contact_name'].'<br>';
            $html.= '<h4>Company Name:</h4> '.$_POST['company_name'].'<br>';
            $html.= '<h4>E-mail:</h4> '.$_POST['email'].'<br>';
            $html.= '<h4>Phone Number:</h4> '.$_POST['phone_number'].'<br>';
            $html.= '<h4>Service Requested:</h4> '.$_POST['what_service'].'<br>';
            $html.= '<h4>Certificate Requested:</h4> '.$_POST['cert_type'].'<br><br><br>';

           
           //count number of rows in table (total number of post variables minus the ones not included in the table, divided by the number of values)     
           $number_of_rows = (count($_POST)-6)/5;
           $i = 1;

           //set up rows array
           $rows = array();

           //push each row into array
           for ($i=1; $i<=$number_of_rows; $i++){
               $rows[$i] = array($_POST['quantity-'.$i], $_POST['manufacturer-'.$i], $_POST['model-'.$i], $_POST['nomenclature-'.$i], $_POST['range_accuracy-'.$i]);
           }

           //set up table
           $table = '<table class="span12" width="100%"><tr><td><strong>Quantity</strong></td><td><strong>Manufacturer</strong></td><td><strong>Model</strong></td><td><strong>Nomenclature</strong></td><td><strong>Range/Accuracy</strong></td></tr>';

           //read each row
           foreach($rows as $row){
               $table.='<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td></tr>';
           }

           $table.='</table><br><br>';
           //put the file logic here, so that nothing else fails afterward
            $tmpname1 = $_FILES['attachments1']['tmp_name'];
            $uploadfile1 = 'uploads/'.$_FILES['attachments1']['name'];
            if (move_uploaded_file($tmpname1, $uploadfile1)){
            echo 'File Attached. ';
            }else { echo 'File Did Not Attach. '; }
            $tmpname2 = $_FILES['attachments2']['tmp_name'];
            $uploadfile2 = 'uploads/'.$_FILES['attachments2']['name'];
            if (move_uploaded_file($tmpname2, $uploadfile2)){
            echo 'File Attached. ';
            }else { echo 'No file to attach. '; }
            $tmpname3 = $_FILES['attachments3']['tmp_name'];
            $uploadfile3 = 'uploads/'.$_FILES['attachments3']['name'];
            if (move_uploaded_file($tmpname3, $uploadfile3)){
            echo 'File Attached. ';
            }else { echo 'No file to attach. '; }

           //after table
           $aftertable = '<br><br><h4>Attachments</h4>';
           $aftertable.= "<a href='http://www.indianastandards.com/quotebuilder/".$uploadfile1."'>".$_FILES['attachments1']['name']."</a><br>";
           $aftertable.= "<a href='http://www.indianastandards.com/quotebuilder/".$uploadfile2."'>".$_FILES['attachments2']['name']."</a><br>";
           $aftertable.= "<a href='http://www.indianastandards.com/quotebuilder/".$uploadfile3."'>".$_FILES['attachments3']['name']."</a><br>";
           // 
            echo $html;
            echo $table;
            echo $aftertable;

			
        }
        //thus starteth the email
        $to = 'kmeyers@indianastandards.com';
        $subject = 'Quote Builder from Indiana Standards';
        $message = $html;
        $message .= $table;
        $message .= $aftertable;
       // To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        mail($to, $subject, $message, $headers);
      ?> 
        
        <br><br>
        <a href="http://indianastandards.com">Click here to return to IndianaStandards.com</a>, or
        <div class="btn btn-success" onclick="window.print()">Click here to print a copy</div> <br><br>
    </div>
    </div>
    </body>
</html>