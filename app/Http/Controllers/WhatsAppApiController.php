<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsAppApiController extends Controller
{
    public function sendMessage(Request $request)
    {

        //dd($request->all());
        // Validate the incoming request


        // Merge variables into templateParams array in the required order
        $templateParams = [
            "Kiran Kumar Reddy",          // Customer Name
            "Rs 500000",                // Amount
            "Plot No: 244",           // Plot Number
            "468",        // Receipt Number
            "9182306335", // Company Contact Number
            "SLN Developers"          // Company Name
        ];

        // Build the payload
        $payload = [
            'apiKey' => env('API_WA_KEY'),
            'campaignName' => "Customer Invoice Updates",
            'destination' => "+919989036524",
            'userName' => "Kiran Kumar Reddy",
            'source' => "Payments Data" ?? 'SLN DEVEOPERS',
            'media' => [
                'url' => "https://websitesetup.org/wp-content/uploads/2020/09/Javascript-Cheat-Sheet.pdf",
                'filename' => "Invoice",
            ],
            'templateParams' => $templateParams,
            'tags' => ["tag1, tag2"],
            'attributes' => [
                'location' => 'India',
                'subscription' => 'Premium',
            ],
        ];

        // Send the POST request to WhatsApp API
        $response = Http::post(env('API_WA_URL'), $payload);

        if ($response->successful()) {
            return redirect()->back()->with("success", "Message sent successfully!");
        }

        return redirect()->back()->with("error", "Failed to send message.")
            ->with("error_details", $response->json());
    }
}