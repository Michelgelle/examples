<?php declare(strict_types = 1);
namespace Templado\Engine;

require __DIR__ . '/../src/autoload.php';
require __DIR__ . '/viewmodel/viewmodel.php';

try {
    $page = Templado::loadHtmlFile(
        new FileName(__DIR__ . '/html/viewmodel.xhtml')
    );
    $page->applyViewModel(new Example\ViewModel());

    echo $page->asString() . "\n";

} catch (TempladoException $e) {
    foreach($e->getErrorList() as $error) {
        echo (string)$error;
    }
}
