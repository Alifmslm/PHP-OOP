<?php

class Connection
{
    public function __destruct() {
        echo 'Object dihapus dari memory';
    }
}

$connect  = new Connection();
unset($connect);