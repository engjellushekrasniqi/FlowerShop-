<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $data = [
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'message' => $request->input('message'),
        ];

        $xmlPath = storage_path('app/contacts.xml');
        $xml = simplexml_load_file($xmlPath);
        $contact = $xml->addChild('contact');
        $contact->addChild('name', $data['name']);
        $contact->addChild('email', $data['email']);
        $contact->addChild('message', $data['message']);
        $xml->asXML($xmlPath);

        return redirect()->route('contact.form')->with('message', 'Your message has been sent.');
    }

    public function viewContacts()
    {
        $xmlPath = storage_path('app/contacts.xml');
        $contacts = [];

        if (file_exists($xmlPath)) {
            $xml = simplexml_load_file($xmlPath);
            foreach ($xml->contact as $contact) {
                $contacts[] = [
                    'name' => (string)$contact->name,
                    'email' => (string)$contact->email,
                    'message' => (string)$contact->message,
                ];
            }
        }

        return view('admin.contacts', compact('contacts'));
    }
}
