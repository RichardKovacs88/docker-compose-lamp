<?php
class Clients {
    private $pid;
    public $html;
    public function __set( $html, $value ) {
        echo "__set was called!  html = $html\n";
        $this->$html = $value;
    }
}

$db = new mysqli( 'database', 'tech', 'x4nJa763Hn))Lbu9', 'techRent' );
mysqli_set_charset($db,"utf8");
$result = $db->query( 'SELECT `html` FROM `clients` WHERE 1' );
$object = $result->fetch_object( 'Clients' );
print $object->html;
?>x