<?php 

return [
    'post' => '{slug}-{id}.asp',
    'search' => '{countryCode}/search',
    'searchPostsByUserId' => '{countryCode}/users/{id}/ads',
    'searchPostsByUsername' => '{countryCode}/profile/{username}',
    'searchPostsByTag' => '{countryCode}/tag/{tag}',
    'searchPostsByCity' => '{countryCode}/location/{city}/{id}',
    'searchPostsBySubCat' => '{countryCode}/category/{catSlug}/{subCatSlug}',
    'searchPostsByCat' => '{countryCode}/category/{catSlug}',
    'searchPostsByCompanyId' => 'companies/{id}/ads',
    'login' => 'login',
    'logout' => 'logout',
    'register' => 'register',
    'companies' => '{countryCode}/companies',
    'pageBySlug' => 'page/{slug}',
    'sitemap' => '{countryCode}/sitemap',
    'countries' => 'countries',
    'contact' => 'contact',
    'pricing' => 'pricing',
    'company.posts' => '{countryCode}/companies/{id}/ads',
];
