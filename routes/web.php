<?php

use App\Models\Member;
use Illuminate\Support\Facades\Route;

Route::get('/members', function () {
    return Member::all();
});

Route::get('/members/{id}', function ($id) {
    return Member::findOrFail($id);
});

Route::get('/members/new', function(){
    $member = new Member();
    $member->name = 'John Doe';
    $member->job = 'Developer';
    $member->save();
    return $member;
});

Route::get('members/{id}/delete', function($id){
    $member = Member::findOrFail($id);
    $member->delete();
    return $member;
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
    $members = Member::all();
    if ($id != null) {
        $member = Member::findOrFail($id);
    }

    return view('about', [
        'title' => 'A propos',
        "team" => $members,
        'member' =>  $member ?? null
    ]);
});