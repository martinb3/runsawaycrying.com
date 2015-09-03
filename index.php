<?php 

$full_domain = $_SERVER['SERVER_NAME'];
$short_name = str_replace(".runsawaycrying.com", "", $full_domain);

if(strpos($short_name, '.') !== FALSE) {
  $parts = split('\.', $short_name);
  $short_name = $parts[0];
}

$output = ucfirst($short_name);
?><p><?php echo $output ?>, don't run away crying.</p><?php

$fname = "/var/www/runsawaycrying.com/name-$short_name.txt";
if(file_exists($fname)) {
  $img = file_get_contents($fname);
}
else {
  $f_contents = file("/var/www/runsawaycrying.com/cryinglist.txt");
  $line = $f_contents[array_rand($f_contents)];
  $img = $line;
}
$img = rtrim($img)

?><p><img src="<?php echo $img; ?>"/></p><?php

?><!-- short name was <?php echo $short_name; ?> --><?php
