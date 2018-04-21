<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use HRS\About;
use HRS\Banner;
use HRS\Academics;
use HRS\AdminGallery;
use HRS\AdminHome;
use HRS\newsEvents;
use HRS\Gallery;
use HRS\Alumni;
use HRS\Contact;
use HRS\digitaLirary;
use HRS\Curricular;
use HRS\Infrastructure;
use HRS\blog;

class viewController extends Controller
{
    public function indexPageView() {
        $banner = Banner::get()->where('visibility_status', 'on');
        $home_welcome = AdminHome::where('id', '7')->limit(1)->get();
        $home_news = newsEvents::find(1)->get();
        $gallery = AdminGallery::get();
        $library = digitaLirary::limit(4)->get();
        return view('main/index', ['banner' => $banner, 'home_welcome' => $home_welcome, 'home_news' => $home_news, 'gallery' => $gallery, 'library' => $library]); 
     }
     
     public function aboutPageView() {
         $overview_main = new About;
         return view('main/about_overview', [ 'overview_main' => $overview_main ]);
     }
     
     public function managementPageView() {
         $management = new About;
         return view('main/management', [ 'management' => $management ]);
     }
     
     public function ptsaPageView() {
         $ptsa = new About;
         return view('main/ptsa', [ 'ptsa' => $ptsa ]);
     }
     
     public function msgPrinciPageView() {
         $msg_by_princi = new About;
         return view('main/message_principal', [ 'msg_by_princi' => $msg_by_princi ]);
     }
     
     public function academicsPageView() {
         $academics = new Academics;
         return view('main/academics', [ 'academics' => $academics ]);
     }
     
     public function infrastructurePageView() {
         $infrastructure = new Infrastructure;
         return view('main/infrastructure', [ 'infrastructure' => $infrastructure ]);
     }
     
     public function galleryPageView() {
         $gallery = new Gallery;
         return view('main/events', [ 'gallery' => $gallery ]);
     }
     
     public function curricularPageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_activities', [ 'curricular' => $curricular ]);
     }
     
     public function curricularAssetsPageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_assets', [ 'curricular' => $curricular ]);
     }
     
     public function curricularHousesPageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_houses', [ 'curricular' => $curricular ]);
     }
     
     public function curricularClubPageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_h3club', [ 'curricular' => $curricular ]);
     }
     
     public function curricularSportPageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_sports', [ 'curricular' => $curricular ]);
     }
     
     public function curricularMusicPageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_music', [ 'curricular' => $curricular ]);
     }
     
     public function curricularDancePageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_dance', [ 'curricular' => $curricular ]);
     }
     
     public function curricularYogaPageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_yoga', [ 'curricular' => $curricular ]);
     }
     
     public function curricularArtsPageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_artsdepart', [ 'curricular' => $curricular ]);
     }
     
     public function curricularScoutPageView() {
         $curricular = new Curricular;
         return view('main/cocurricular_scouts', [ 'curricular' => $curricular ]);
     }
     
     public function alumniPageView() {
         $alumni = new Alumni;
         return view('main/alumni_overview', [ 'alumni' => $alumni ]);
     }
     
     public function contactPageView() {
         $contact = new Contact;
         return view('main.contact', [ 'contact' => $contact ]);
     }
     
     public function digitalLibraryPageView() {
         $digilib = new digitaLirary;
         return view('main.digital_library', [ 'digilib' => $digilib ]);
     }
     
     public function blogPageView() {
         $blog = new blog;
         return view('main.blog', [ 'blog' => $blog ]);
     }
}