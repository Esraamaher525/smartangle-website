<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Activity;
use App\Client;
use App\Customer;
use App\DataDirectory;
use App\Http\Requests\StoreJoiningRequest;
use App\Information;
use App\Marketing;
use App\Media6262;
use App\Service;
use App\Slide;
use App\SocialMedia;
use App\UsingWay;
use App\VisionTarget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    // return index view
    public function index(){
        // needed data for index view
        $slides = Slide::query()->inRandomOrder()->get();
        $aboutUs = AboutUs::query()->first();
        $visionTarget = VisionTarget::query()->get();
        $services = Service::query()->get();
        $activities = Activity::query()->get();
        $customers = Customer::query()->get();
        $info = Information::query()->get();
        $usingSteps = UsingWay::query()->get();
        $numbers = DataDirectory::query()->inRandomOrder()->take(3)->get();
        $marketing = Marketing::query()->take(3)->get();
        $clients = Client::query()->inRandomOrder()->get();
        $media = Media6262::query()->inRandomOrder()->take(3)->get();
        $agent = new Agent();

        $data['slides'] = $slides;
        $data['aboutUs'] = $aboutUs;
        $data['visionTarget'] = $visionTarget;
        $data['services'] = $services;
        $data['activities'] = $activities;
        $data['customers'] = $customers;
        $data['info'] = $info;
        $data['usingSteps'] = $usingSteps;
        $data['numbers'] = $numbers;
        $data['marketing'] = $marketing;
        $data['clients'] = $clients;
        $data['media'] = $media;
        $data['agent'] = $agent;

        return view('index',$data);

    }

    // return iraq in numbers
    public function iraqInNumbersList(){
        $numbers = DataDirectory::query()->get();
        return view('iraq_in_number_list',compact('numbers'));
    }

    // return iraq in number details
    public function iraqInNumbersDetails($id){
        $number = DataDirectory::find($id);
        return view('iraq_in_number_details',compact('number'));
    }

    // download iraq in number file
    public function downloadFile($id){
        $number = DataDirectory::find($id);
        $file = json_decode($number->file)[0]->download_link;
        return redirect()->away(asset('storage/'.$file));
    }

    // store new joining
    public function storeJoining(StoreJoiningRequest $request){

        try {
            DB::beginTransaction();
            $data = $request->validated();
            Customer::create($data);
            DB::commit();
            toastr()->success( __('keywords.admin_will_check_your_data'),__('keywords.success'));
            return redirect('/');
        }catch (\Exception $e){
            DB::rollBack();
            toastr()->success(__('keywords.error'), __('keywords.failed_store'));
            return redirect('/');

        }
    }

    // return media list
    public function mediaList(){
        $media = Media6262::query()->get();
        return view('media_list',compact('media'));
    }

    // return to join form
    public function joinForm(){
        return view('join_form');
    }

}


