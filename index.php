<?php

$names = array("Brad", "John", "Mike", "james");

$count = 0;
while($count < count($names)) {
echo "<li>Hi My Name is $names[$count].</li>";
$count ++;
}

?>


<p> Hi, My name is <?php echo $names[0] ?>.</p>
