<?php

namespace App\Http\Backend\Controllers;


class DashBoardController extends Controller
{
    public function index()
    {
        return view('backend.home.index');
    }
    /**
     * Change locale when access page
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLocale()
    {
        if (app()->getLocale() == 'en') {
            $locale = 'de';
        } else {
            $locale = 'en';
        }

        session()->put('locale', $locale);

        return redirect()->back();
    }
}