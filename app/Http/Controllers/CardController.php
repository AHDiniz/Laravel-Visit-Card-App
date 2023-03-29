<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CardController extends Controller
{
    public static function store(Request $request)
    {
        if ($request->name == null || $request->name == "")
        {
            return view('welcome', [
                'status' => 'You must fill at least your name.',
                'slug' => null
            ]);
        }

        $card = new Card;
        $card->name = $request->name;
        $name = explode(" ", $request->name);
        $card->slug = "";
        foreach ($name as $n)
            $card->slug .= strtolower($n);
        $card->description = $request->description == null ? "" : $request->description;
        $card->linkedin_link = $request->linkedin == null ? "#" : $request->linkedin;
        $card->github_link = $request->github == null ? "#" : $request->github;
        $card->save();
        
        QrCode::format('png')->generate(url($card->slug), $card->slug . "_qr_code.png");
        
        return view('welcome', [
            'status' => 'Virtual Visit Card successfully created.',
            'slug' => $card->slug
        ]);
    }

    public static function edit(Request $request)
    {
        foreach (Card::all() as $c)
        {
            if ($c->name == $request->name)
            {
                $c->description = $request->description;
                $c->linkedin_link = $request->linkedin;
                $c->github_link = $request->github;
                $c->save();
                
                return view('welcome', [
                    'status' => 'This Visit Card has been updated.',
                    'slug' => $c->slug
                ]);
            }
        }
    }

    public static function find(string $slug)
    {
        foreach (Card::all() as $c)
        {
            if ($c->slug == $slug)
            {
                return $c;
            }
        }
    }
}
