<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOk7Plbk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOk7Plbk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOk7Plbk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOk7Plbk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOk7Plbk\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ok7Plbk',
    'container.build_id' => '2a8b9e05',
    'container.build_time' => 1590574213,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOk7Plbk');
