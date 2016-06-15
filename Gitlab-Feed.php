<?php
/**
 * Created by PhpStorm.
 * User: muhammedzaim
 * Date: 16.06.2016
 * Time: 00:07
 */

$data = simplexml_load_file("https://gitlab.com/u/muhammedzaimtr.atom?private_token=n6eBnsktfrLLaTjih1gF");

foreach ($data as $row){
    $title2 = $row->title;
    $link2 = $row->link;
    echo "<a href=".$link2.">".$title2."</a><br>";
}