<?php
/*phpinfo(); */
var_dump(dirname(__FILE__));
require_once (dirname(__FILE__) . "/../lib/MonNamespace/Core.php");



MonNamespace\Core::run();

?>