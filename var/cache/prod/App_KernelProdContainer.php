<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1Nnulck\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1Nnulck/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container1Nnulck.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container1Nnulck\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container1Nnulck\App_KernelProdContainer([
    'container.build_hash' => '1Nnulck',
    'container.build_id' => '33020751',
    'container.build_time' => 1610099329,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1Nnulck');