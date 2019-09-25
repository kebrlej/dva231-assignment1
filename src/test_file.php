<?php
require("file_reader.php");
$news = get_json();
echo $news['news'][0]['title'];
