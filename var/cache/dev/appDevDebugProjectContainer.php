<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerErjivpm\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerErjivpm/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerErjivpm.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerErjivpm\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerErjivpm\appDevDebugProjectContainer([
    'container.build_hash' => 'Erjivpm',
    'container.build_id' => 'c3368d85',
    'container.build_time' => 1670926227,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerErjivpm');
