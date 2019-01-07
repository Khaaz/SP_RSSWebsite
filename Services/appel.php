<html>
<body>
<?php
 
include('XmlParser.php');
         
$parser = new \Services\XmlParser(dirname(__FILE__).'/rss.xml');
$parser ->parse();
$result = $parser ->getResult();
echo $result;
 
?>
</body>
</html>
