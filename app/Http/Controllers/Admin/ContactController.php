<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function show($id)
    {
        //
        $titleCard = 'نمایش پیام کاربر';
        $query = Message::find($id);
        return view('admin.contacts.show', ['item' => $query, 'titleCard' => $titleCard]);
    }
    public function index()
    {
        $titleCard = 'لیست پیام های کاربران';
        $th = ['شناسه', 'نام', 'ایمیل', 'operation'];

        return view('admin.contacts.index',
            [
                'items' => Message::get(),
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );
    }

}
