<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facade as QrCode;

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
     * QR code page
     */
    public function qrCode(Profile $profile)
    {
        return view('pages.qr-code', ['profile' => $profile]);
    }

    /**
     * View
     */
    public function view(Profile $profile)
    {
        return view('pages.view', ['profile' => $profile]);
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
        $profile->slug = SlugController::generateUniqueSlug($profile->name);
        $qrcode = QrCode::format('png')->size(250)->generate(url('profile', ['slug' => $profile->slug]));
        $profile->qr_code = base64_encode($qrcode);

        try {
            $profile->save();
        } catch (Exception $e) {
            return back()->with('error','Error on generate image.');
        }

        return redirect()->route('qr-code', ['profile' => $profile->slug]);
    }
}
