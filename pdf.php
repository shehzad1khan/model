



 <?php
 require 'dompdf/vendor/autoload.php';
require_once 'dompdf/autoload.inc.php';

    use Dompdf\Options;
    use Dompdf\Dompdf; 
    

$options = new Options();
$options->set('defaultFont', 'Courier');
$options->set('isHtml5ParserEnabled', true);
$options->setIsHtml5ParserEnabled(true);
$options->set('isRemoteEnabled', true);
$options->set('isPhpEnabled', true);
$options->set('isJavascriptEnabled', true);  
   
$dompdf = new Dompdf();

$page = file_get_contents("print.php");

$dompdf->loadHtml($page);
 
$dompdf->setPaper('A4', 'portrait'); 
 
$dompdf->render(); 
 
$dompdf->stream("codexworld", array("Attachment" => 0));

?>  
