


 <?php
  include "vendor/autoload.php";
  use Dompdf\Dompdf;

  $dompdf = new Dompdf();

$html = file_get_contents("print.php");
$dompdf->loadHtml($html); 
 
$dompdf->setPaper('A4', 'landscape'); 

 
$dompdf->render(); 
 
$dompdf->stream("codexworld", array("Attachment" => 0));

?>  