<?php

use App\Models\Member;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name?}', function (?string $name = null) {
    return view('accueil', [
        'title' => 'Laravel',
        'name' => $name
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/about/{id?}', function ($id = null) {
    $members = Member::getAllMembers();
    if ($id != null) {
        $member = Member::find($id);
    }

    return view('about', [
        'title' => 'A propos',
        "team" => $members,
        'member' =>  $member ?? null
    ]);
});