<?php

/* $michi = "que bonito michi";

echo "<pre>";
var_dump($_GET);
echo "</pre>"; */

$michi = "que bonito michi";

function local_scope() {
    
    echo $_GET["michi"];
    // echo $michi;

}

local_scope();