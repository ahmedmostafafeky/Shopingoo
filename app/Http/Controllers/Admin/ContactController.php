<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\ContactService;
use App\Http\Requests\Admin\ContactUpdateRequest;

class ContactController extends Controller
{

    private ContactService $contactService;

    public function __construct(ContactService $contactService) {
        $this->contactService = $contactService;
    }

    public function index() {
        return $this->contactService->index();
    }

    public function update(ContactUpdateRequest $request) {
        return $this->contactService->update($request->validated());
    }
}