<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class XMlController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Emri i skedarit XML
        $fileName = 'contacts.xml'; // ose çfaredo emer qe ka file-i

        // Kontrollo nese ekziston file-i
        if (!Storage::exists($fileName)) {
            return response()->json(['error' => 'File not found'], 404);
        }

        // Merr permbajtjen e file-it
        $xmlContent = Storage::get($fileName);

        // Parse XML ne nje array
        try {
            $xml = simplexml_load_string($xmlContent, "SimpleXMLElement", LIBXML_NOCDATA);
            $json = json_encode($xml);
            $array = json_decode($json, true);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid XML format', 'message' => $e->getMessage()], 500);
        }
        
        return view('xml',[
            'data' => $array['contact'] ?? [], 
        ]);

    }
}
