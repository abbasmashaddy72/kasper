<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Application
Breadcrumbs::for('#', function (BreadcrumbTrail $trail) {
    $trail->push('Application', '/');
});

// Application > User
Breadcrumbs::for('user.index', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('User', route('admin.user'));
});

// Application > Role
Breadcrumbs::for('role.index', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('Role', route('admin.role'));
});

// Application > Supplier
Breadcrumbs::for('supplier.index', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('Supplier', route('admin.supplier'));
});

// Application > Contractor
Breadcrumbs::for('contractor.index', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('Contractor', route('admin.contractor'));
});

// Application > Sub Contractor
Breadcrumbs::for('sub-contractor.index', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('Sub Contractor', route('admin.sub-contractor'));
});
