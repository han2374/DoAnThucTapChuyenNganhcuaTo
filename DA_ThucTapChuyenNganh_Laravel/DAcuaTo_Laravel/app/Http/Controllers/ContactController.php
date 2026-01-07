<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactEmail;
use App\Models\Message;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Support two form types:
        // - full contact form (has 'message' field)
        // - quick footer email form (email only)
        if ($request->filled('message')) {
            $data = $request->validate([
                'name' => 'nullable|string|max:255',
                'email' => 'required|email',
                'website' => 'nullable|string|max:255',
                'message' => 'required|string',
            ]);
        } else {
            $data = $request->validate([
                'email' => 'required|email',
                'name' => 'nullable|string|max:255',
            ]);
            // normalize optional fields for mailable
            $data['website'] = null;
            $data['message'] = 'Gửi email nhanh từ footer';
        }

        // Save message to database (so admin can see it in charts)
        Message::create([
            'name' => $data['name'] ?? null,
            'email' => $data['email'],
            'website' => $data['website'] ?? null,
            'message' => $data['message'] ?? null,
        ]);

        $to = env('SHOP_CONTACT_EMAIL', config('mail.from.address'));

        try {
            Mail::to($to)->send(new ContactEmail($data));
        } catch (\Exception $e) {
            // Log the mail error but do not surface it to the end user so
            // the footer quick-send still shows success and admin still
            // receives the saved email in the `messages` table.
            Log::error('Contact email send failed: ' . $e->getMessage());
        }

        // Always return the original success message to the user.
        return back()->with('status', 'Cảm ơn — chúng tôi đã nhận email, shop sẽ liên hệ bạn sớm.');
    }
}
