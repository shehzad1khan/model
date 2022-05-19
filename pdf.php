



 <?php
 require 'dompdf/vendor/autoload.php';
require_once 'dompdf/autoload.inc.php';

    use Dompdf\Dompdf; 
 
$dompdf = new Dompdf();

$page = file_get_contents("./print.php");

$dompdf->loadHtml($page);
 
$dompdf->setPaper('A4', 'portrait'); 
 
$dompdf->render(); 
 
$dompdf->stream("codexworld", array("Attachment" => 0));

?>  


<!-- https://www.youtube.com/watch?v=cIhGXoHHsF8 -->