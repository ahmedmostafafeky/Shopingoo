<?php
namespace App\Service\Admin;

use App\Models\Contact;


class ContactService {
    public function index() {
        return view('admin.pages.contact',[
            'contact' => Contact::first(),
        ]);
    }

    public function update($attributes) {
        Contact::first()->update($attributes);
        return back()->with('sucsess','updated succesfuly');
    }
}