<?php
$createshow = (isset($createshow)) ? $createshow :[];
echo view('web.folder.header' , ['createshow'=>$createshow]);
echo $customerweb;
echo view('web.folder.footer');


?>