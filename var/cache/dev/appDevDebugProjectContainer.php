<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPrcrtf1\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPrcrtf1/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerPrcrtf1.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerPrcrtf1\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerPrcrtf1\appDevDebugProjectContainer([
    'container.build_hash' => 'Prcrtf1',
    'container.build_id' => '5b238314',
    'container.build_time' => 1559897916,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPrcrtf1');
