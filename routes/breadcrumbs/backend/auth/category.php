<?php

Breadcrumbs::for('admin.auth.category.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push(__('menus.backend.access.categories.management'), route('admin.auth.category.index'));
});

Breadcrumbs::for('admin.auth.category.create', function ($trail) {
    $trail->parent('admin.auth.category.index');
    $trail->push(__('menus.backend.access.categories.create'), route('admin.auth.category.create'));
});

Breadcrumbs::for('admin.auth.category.edit', function ($trail, $id) {
    $trail->parent('admin.auth.category.index');
    $trail->push(__('menus.backend.access.categorys.edit'), route('admin.auth.category.edit', $id));
});
