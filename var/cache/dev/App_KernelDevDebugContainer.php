<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIhA4R7Q\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIhA4R7Q/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIhA4R7Q.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIhA4R7Q\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIhA4R7Q\App_KernelDevDebugContainer([
    'container.build_hash' => 'IhA4R7Q',
    'container.build_id' => '687fb22d',
    'container.build_time' => 1590417429,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIhA4R7Q');
