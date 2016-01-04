<?php
require_once('PhpGrid_Lite/conf.php');

class CI_phpgrid {

    public function example_method($val = '')
    {
        $dg = new C_DataGrid("SELECT * FROM clients", "client_id", "name");
        return $dg;
    }
}
