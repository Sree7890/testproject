<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
 <?php 
 echo "<pre>";
 print_r($seo);  
  echo "</pre>";
  ?>
  <p>1. element()</p>
  <?php echo element("meta_data",$seo);
   		 
   		$my_shape = elements(array('meta_data', 'meta_key', 'title'), $seo, 'foobar');
   		echo "<pre>";
   		print_r($my_shape);
   		echo "</pre>";
   ?>
</body>
</html>

