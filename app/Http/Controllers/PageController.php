<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function index(): View|string
    {
        try{
            $title = 'Home';
            return view('web.pages.index',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function history(): View|string
    {
        try{
            $title = 'History';
            return view('web.pages.history',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function mission(): View|string
    {
        try{
            $title = 'Mission';
            return view('web.pages.mission',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function vision(): View|string
    {
        try{
            $title = 'Vision';
            return view('web.pages.vision',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function managementOrganogram(): View|string
    {
        try{
            $title = 'Management Organogram';
            return view('web.pages.organogram',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function whatWeDo(): View|string
    {
        try{
            $title = 'What We Do';
            return view('web.pages.what_we_do',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function legalStatus(): View|string
    {
        try{
            $title = 'Legal Status';
            return view('web.pages.legal_status',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function career(): View|string
    {
        try{
            $title = 'Career';
            return view('web.pages.career',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function careerDetails($id): View|string
    {
        try{
            $title = 'Career Details';
            return view('web.pages.career_details',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function gallery(): View|string
    {
        try{
            $title = 'Gallery';
            return view('web.pages.gallery',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function contactUs(): View|string
    {
        try{
            $title = 'Contact Us';
            return view('web.pages.contact_us',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function chairmanSpeech(): View|string
    {
        try{
            $title = 'Chairman Speech';
            return view('web.pages.chairman_speech',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function executiveDirector(): View|string
    {
        try{
            $title = 'Executive Director';
            return view('web.pages.executive_director',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function welcomeNote(): View|string
    {
        try{
            $title = 'Welcome Note';
            return view('web.pages.welcome_note',compact('title'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }


}
