<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Home page
     */
    public function home()
    {
        return view('pages.home');
    }
    
    /**
     * Form generate
     */
    public function generate()
    {
        return view('pages.generate');
    }

    /**
     * Store profile
     * 
     * @param Request $reques
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $profile = new Profile();
        $profile->name = (string) $request->name;
        $profile->linkedin_url = (string) $request->linkedin_url;
        $profile->github_url = (string) $request->github_url;
        $profile->about = (string) $request->about;
        $profile->slug = Str::uuid(); // TODO:: generate unique slug
        $profile->qr_code = Str::uuid(); // TODO:: generate qrcode

        try {
            $profile->save();
        } catch (Exception $e) {
            return back()->with('error','Error on generate image.');
        }

        return redirect()->route('qr-code', ['slug' => $profile->slug]);
    }
}
