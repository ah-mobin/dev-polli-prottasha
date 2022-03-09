<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\ChairmanSpeech;
use App\Models\DocumentaryYtLink;
use App\Models\ExecutiveDirector;
use App\Models\HomeSectionOne;
use App\Models\HomeSectionThree;
use App\Models\LegalStatus;
use App\Models\Organogram;
use App\Models\PageAbout;
use App\Models\Slider;
use App\Models\SuccessStory;
use App\Models\WelcomeNote;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function index(): View|string
    {
        try{
            $title = 'Home';
            $stories = SuccessStory::select('image')->get();
            $threes = HomeSectionThree::all();
            $videos = DocumentaryYtLink::all();
            $sliders = Slider::all();
            $secOne = HomeSectionOne::firstOrFail();
            return view('web.pages.index',compact('title','stories','threes','videos','sliders','secOne'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function history(): View|string
    {
        try{
            $title = 'History';
            $history = PageAbout::select('history')->firstOrFail();
            return view('web.pages.history',compact('title','history'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function mission(): View|string
    {
        try{
            $title = 'Mission';
            $mission = PageAbout::select('mission')->firstOrFail();
            return view('web.pages.mission',compact('title','mission'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function vision(): View|string
    {
        try{
            $title = 'Vision';
            $vision = PageAbout::select('vision')->firstOrFail();
            return view('web.pages.vision',compact('title','vision'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function managementOrganogram(): View|string
    {
        try{
            $title = 'Management Organogram';
            $orgImg = Organogram::latest()->firstOrFail()->image;
            return view('web.pages.organogram',compact('title','orgImg'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function whatWeDo(): View|string
    {
        try{
            $title = 'What We Do';
            $wwds = WhatWeDo::all();
            return view('web.pages.what_we_do',compact('title','wwds'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function legalStatus(): View|string
    {
        try{
            $title = 'Legal Status';
            $statuses = LegalStatus::all();
            return view('web.pages.legal_status',compact('title','statuses'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function career(): View|string
    {
        try{
            $title = 'Career';
            $careers = Career::all();
            return view('web.pages.career',compact('title','careers'));
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
            $chr = ChairmanSpeech::firstOrFail();
            return view('web.pages.chairman_speech',compact('title','chr'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function executiveDirector(): View|string
    {
        try{
            $title = 'Executive Director';
            $ed = ExecutiveDirector::firstOrFail();
            return view('web.pages.executive_director',compact('title','ed'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }

    public function welcomeNote(): View|string
    {
        try{
            $title = 'Welcome Note';
            $wn = WelcomeNote::firstOrFail();
            return view('web.pages.welcome_note',compact('title','wn'));
        }catch(\Exception | \Throwable $e){
            Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }


}
