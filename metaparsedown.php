<?php

/**
 * Class Autoloader for MetaParsedown No Composer
 * @version 1.0
 * @author  Steve George <steve@pagerange.com>
 * @created 2019-11-01
 * @updated 2010-11-01
 * @license MIT
 */
spl_autoload_register(function($class){
	
    $base_dir = __DIR__ . '/';

    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use Metaparsedown\MetaparsedownException;
use Metaparsedown\Pagerange\Markdown\ParserNotFoundException;
use Metaparsedown\Pagerange\Markdown\MetaParsedown;

function getMetaparsedown()
{
    return new MetaParsedown();
}

