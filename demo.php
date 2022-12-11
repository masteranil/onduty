
  <?php 
     require_once 'classes/connection.php';
     ?>


<Html> <!-- This tag is compulsory for any HTML document. -->   
<Head>  
The dflkgnlkdngHead tag is used to create a title of web page, CSS syntax for a web page, and helps in written a JavaScript code. -->  
</Head>  
<?php
            ob_start();
            require("pdf/fpdf.php");
            $pdf = new FPDF('p','mm','A4');
            $pdf->AddPage('text');
            $pdf->Output ();
            ob_end_flush ();
            ?>
<Body>  

   <th>
     hiiii</th>
<!-- The Body tag is used to display the content on a web page. In this example we do not specify any content or any tag, so in output nothing will display on the web page. -->  
</Body>  
</Html>  