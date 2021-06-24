<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Mail\ContactMail;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'lastname'              => 'required',
            'firstname'             => 'required',
            'lastname_kana'         => 'required',
            'firstname_kana'        => 'required',
            'birthday_year'         => 'required',
            'birthday_month'        => 'required',
            'birthday_day'          => 'required',
            'gender'                => 'required',
            'school_year'           => 'required',
            'school_name'           => 'required',
            'postalcode'            => 'nullable',
            'address'               => 'required',
            'parentname'            => 'required',
            'tel'                   => 'required',
            'email'                 => 'required|email',
            'teamname'              => 'nullable',
            'participation_year'    => 'required',
            'participation_month'   => 'required',
            'participation_day'     => 'required',
            'cose'                  => 'required',
            'freearea'              => 'nullable',
        ]);

        // フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request, Contact $contact)
    {
        $action = $request->get('action', 'return');
        $input = $request->except('action');

        if ($action === 'submit')
        {
            $contact->fill($request->all());
            $contact->save();

            // 参考元である下記コードではエラーは出ないが、DBに登録されない(ナゼ？)
            // メソッドに「Contact」のDIをして上記の記述で実行できた。

            // DBにデータを保存
            // $contact = new Contact();
            // $contact->fill($input);
            // $contact->save();

            // メール送信
         Mail::to($contact['email'])->send(new ContactMail('mails.contact', 'お問い合わせありがとうございます', $contact));

            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        }
    }

    public function complete()
    {
        return view('contacts.complete');
    }
}
