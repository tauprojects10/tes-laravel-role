<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Kategori
Breadcrumbs::for('kategori', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Kategori', route('kategori'));
});

// Home > Kategori > Create
Breadcrumbs::for('kategori.create', function (BreadcrumbTrail $trail) {
    $trail->parent('kategori');
    $trail->push('Create', route('kategori.create'));
});

// Home > Kategori > Edit
Breadcrumbs::for('kategori.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('kategori');
    $trail->push('Edit', route('kategori.edit', $id));
});

// Home > Produk
Breadcrumbs::for('produk', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Produk', route('produk'));
});

// Home > Produk > Create
Breadcrumbs::for('produk.create', function (BreadcrumbTrail $trail) {
    $trail->parent('produk');
    $trail->push('Create', route('produk.create'));
});

// Home > Produk > Edit
Breadcrumbs::for('produk.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('produk');
    $trail->push('Edit', route('produk.edit', $id));
});

// Home > Pembayaran
Breadcrumbs::for('pembayaran', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Pembayaran', route('pembayaran'));
});

// Home > Pembayaran > Create
Breadcrumbs::for('pembayaran.create', function (BreadcrumbTrail $trail) {
    $trail->parent('pembayaran');
    $trail->push('Create', route('pembayaran.create'));
});

// Home > Pembayaran > Edit
Breadcrumbs::for('pembayaran.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('pembayaran');
    $trail->push('Edit', route('pembayaran.edit', $id));
});

// Home > Pelanggan
Breadcrumbs::for('pelanggan', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Pelanggan', route('pelanggan'));
});

// Home > Pelanggan > Create
Breadcrumbs::for('pelanggan.create', function (BreadcrumbTrail $trail) {
    $trail->parent('pelanggan');
    $trail->push('Create', route('pelanggan.create'));
});

// Home > Pelanggan > Edit
Breadcrumbs::for('pelanggan.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('pelanggan');
    $trail->push('Edit', route('pelanggan.edit', $id));
});
