<?php

spl_autoload_register(function ($className) {
    echo "Looking for $className. Requiring " . lcfirst($className) . '.php<br/>';
    require lcfirst($className) . '.php';
});

?>