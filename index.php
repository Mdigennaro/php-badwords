<?php

$name = 'Ben Parker';

$citation = 'Da un grande potere derivano grandi responsabilità.';

var_dump($_GET);

$censura = str_replace('potere', $_GET['block'], $citation)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h1>
  <?php echo $name; ?>
</h1>

<p> 
  <?php echo $citation; ?> 
</p>

<div>
  Il nome dell'autore è lungo : <?php echo strlen($name); ?> caratteri.
</div>

<div>
  Il paragrafo della citazione è lungo : <?php echo strlen($citation); ?> caratteri.
</div>

<p> 
  <?php echo $censura ?> 
</p>

<div>
  Il paragrafo della citazione è lungo : <?php echo strlen($censura); ?> caratteri.
</div>

</body>
</html>