<?php

include('../Classes/admin/Session.php');
session_start();

//prevent , if not submit
if(!isset($_GET['cart'])) dir();



//inlude template

ob_start();
require_once('pdf-template/welcome.php');

$template = ob_get_clean();

//inlcude dompdf library
require_once('dompdf/autoload.inc.php');
use Dompdf\Dompdf;

//using pdf dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($template);


$dompdf->render();

$invoicepdf='Invoice-'.time().'.pdf';
$invoice_path='pdfs/'.$invoicepdf;
//write pdf to directory
file_put_contents('pdfs/'.$invoicepdf, $dompdf->output());

$uid=Session::get('userId');
$query="INSERT INTO tbl_invoice(uid,invoice) values('$uid','$invoice_path')";
$ex=$db->insert($query);

    $query2="SELECT *  from tbl_company";
    $exicute=$db->select($query2);
    if($exicute){
         $rs=$exicute->fetch_assoc();
         $company_name=$rs['comName'];
         $company_email=$rs['email'];
     }
    $userMail=Session::get('email');
    $filename = $invoicepdf;
    $path = 'pdfs';
    $file = $path . "/" . $filename;

    $mailto = $userMail;
    $subject = 'Invoice';
    $message = 'Your last Product Purches Invoice';

    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From:".$company_name."<".$company_email.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }

header('Location:../success.php');

