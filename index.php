<Html>
<head>
	<title>Teste tratar</title>
</head>
<body>
<?php

	include("TratarHtml.php");
	$tratarhtml = new TratarHtml();
 ?>

 <div>
 	<?php
 	  echo $tratarhtml->img("teste.jpg");

 	  ?>
 </div>

</body>
</Html>