<?php

namespace App\Http\Controllers;

use App\Mail\ContactAiMail;
use App\Mail\JobOfferRequest;
use App\Mail\ParticularServices;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Cornford\Googlmapper\Models\Map;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    public function index()
    {
        // Mapper::map(49.3072731, 2.7214514, 
        // ['zoom' => 19, 
        // 'markers' => ['title' => 'Association Intermédiaire de Verberie', 'animation' => 'DROP'],
        // ]);

        return view('contact');
    }

    public function contact_association(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:10'],
            'object' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
            'validation_form' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('contact')->withErrors($validator)->withInput();
        }

        $contact = [
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'object' => $request['object'],
            'message' => $request['message'],
        ];

        Mail::to('contact@aiverberie.fr')->send(new ContactAiMail($contact));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }

    public function jobView()
    {
        return view('job');
    }

    public function send_joboffer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:10'],
            'attachment' => ['required'],
            'job' => ['required'],
            'message' => ['required', 'string', 'max:255'],
            'validation_form' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('/offres-emploi')->withErrors($validator)->withInput();
        }

        $files = [];

        for ($i = 0; $i < count($request->file('attachment')); $i++) {
            $path = public_path('uploads');
            $attachment = $request->file('attachment')[$i];

            $name = time() . '.' . $attachment->getClientOriginalExtension();

            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }

            $attachment->move($path, $name);
            $filename = $path . '/' . $name;

            $files[] = $filename;
        }

        $info = [
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'jobs' => $request['job'],
            'message' => $request['message'],
        ];

        Mail::to('aiverberie@gmail.com')->send(new JobOfferRequest($files, $info));

        return redirect()->back()->with('success', 'Votre demande d\'emploi a été envoyer avec succès !');
    }

    public function particularView()
    {
        return view('particulars');
    }

    public function sendParticularService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:10'],
            'service' => ['required'],
            'message' => ['required', 'string', 'max:255'],
            'validation_form' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('/particulier')->withErrors($validator)->withInput();
        }

        $info = [
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'services' => $request['service'],
            'message' => $request['message'],
        ];


        Mail::to('contact@aiverberie.fr')->send(new ParticularServices($info));

        return back()->with('success', 'Votre demande de service a été envoyé avec succès !');
    }
}
