<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEXZ0Ssd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEXZ0Ssd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEXZ0Ssd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEXZ0Ssd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEXZ0Ssd\App_KernelDevDebugContainer([
    'container.build_hash' => 'EXZ0Ssd',
    'container.build_id' => '56108f08',
    'container.build_time' => 1709541108,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEXZ0Ssd');
