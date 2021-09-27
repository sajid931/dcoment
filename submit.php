<?php
// opens a new file to write
$data_file = fopen("example.tex", "w");
$name = $_POST("name");
$gmil = $_POST("Gmail");
$tex_to_write = $name . " " . $gmil;
// write data to server side file
fwrite($data_file, $tex_to_write);
fclose($data_file);



?>