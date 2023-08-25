<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
class ContactController extends BaseController
{
    public function index()
    {
        $titulo = "Contactanos";
    
            return view('contact-us',compact('titulo'));
        
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $phone = $request->input('phone');
        $message = $request->input('message');
        // $correoDestino = env('MAIL_USERNAME');
        // Mail::to($correoDestino)->send(new ContactFormMail($name, $email, $subject, $phone, $message));
        // Envía el correo electrónico utilizando ContactFormMail
        Mail::to('sacnaypagma@gmail.com')->send(new ContactFormMail($name, $email, $subject, $phone, $message));
        // Redirecciona o muestra un mensaje de éxito, etc.
        return redirect()->back()->with('success', '¡Mensaje enviado correctamente!');
    }
}