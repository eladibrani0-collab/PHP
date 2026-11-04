<?php

$my_file=fopen("ds.txt","r");

while(!feof($my_file)){
    echo fgets($my_file)."<br>";
}

fclose("ds.txt");





?>