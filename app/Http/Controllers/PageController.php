<?php

namespace App\Http\Controllers;

use App\Models\AcousticInner;
use App\Models\SoundEffect;
use Illuminate\Http\Request;
use App\Models\IndexPage;
use App\Models\Swipper;
use App\Models\AboutPage;
use App\Models\AcousticPage;
use App\Models\Advantage;
use App\Models\SoundPage;
use App\Models\SoundInner;
use App\Models\Finish;
use App\Models\Partner;
use App\Models\Project;
use App\Models\SoundFinish;
use App\Models\SoundType;

class PageController extends Controller
{
    public function index(){
        $swippers = Swipper::All();
        $page = IndexPage::firstOrFail();
        return view("index", [
            "page"=>$page,
            "swippers"=>$swippers,
        ]);
    }
    public function about(){
        $advantages = Advantage::All();
        $page = AboutPage::firstOrFail();
        return view("about", [
            "page"=>$page,
            "advantages"=>$advantages,
        ]);
    }
    public function soundproofing(){
        $advantages = SoundInner::All();
        $page = SoundPage::firstOrFail();
        return view("soundproofing", [
            "page"=>$page,
            "advantages"=>$advantages,
        ]);
    }
    public function soundproofing_inner($slug){
        $page = SoundInner::Where("slug", $slug)->first();
        $finishes = Finish::All();
        return view("services-inner", [
            "page"=>$page,
            "finishes"=>$finishes,
            "category"=>"Звукоизоляция",
        ]);
    }
    public function design(){
        $advantages = AcousticInner::All();
        $page = AcousticPage::firstOrFail();
        $effects = SoundEffect::All();
        $types = SoundType::All();
        return view("design", [
            "page"=>$page,
            "advantages"=>$advantages,
            "effects"=>$effects,
            "types"=>$types,
        ]);
    }
    public function acoustic_inner($slug){
        $page = AcousticInner::Where("slug", $slug)->first();
        return view("services-inner", [
            "page"=>$page,
            "category"=>"Акустическое проектирование",
        ]);
    }
    public function partners(){
        $partners = Partner::All();
        return view("partners", [
            "partners"=>$partners,
        ]);
    }
    public function projects(){
        $projects = Project::All();
        return view("projects", [
            "projects"=>$projects,
        ]);
    }
    public function contacts(){
        return view("contacts");
    }
}
