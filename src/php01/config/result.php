<?php
$my_name = htmlspecialchars($_POST['name'], ENT_QUOTES);

$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);

$orders = htmlspecialchars($_POST['orders'], ENT_QUOTES);



print "私の名前は、" . $my_name . '<br />';

print "ご希望商品は、" . $choices . '<br />';

print "注文数は、" . $orders;　　