<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKjNgtx6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKjNgtx6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKjNgtx6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKjNgtx6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKjNgtx6\App_KernelDevDebugContainer([
    'container.build_hash' => 'KjNgtx6',
    'container.build_id' => 'fda0a432',
    'container.build_time' => 1590590224,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKjNgtx6');
