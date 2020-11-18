<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Service;
class BookingController extends Controller
{
    //
    public function services(){
        $results =DB::table('services as s')
            ->join('userprofiles as up', 'up.user_id', '=', 's.service_user_id')
            ->join('userprofiles as up1', 'up1.user_id', '=', 's.requested_user_id')
            ->where('s.status', '=', 2)
            ->groupBy('s.requested_user_id')
            ->select('s.id','s.deals','s.requested_time','s.avail_start_time','s.avail_end_time','s.checkin_time','s.payment_time', 'up.user_description as sd','up.user_city as scity','up.user_address as saddr','up.user_name as sname','up.price as sprice' 
            ,'up1.user_description as ud','up1.user_city as ucity','up1.user_address as uaddr','up1.user_name as uname','up1.user_pic as upic')
            ->get();
         return view('booking/services',compact('results'));
        
        
    }
    public function payments(){
        
          $results =DB::table('services as s')
        ->join('userprofiles as up', 'up.user_id', '=', 's.service_user_id')
        ->join('userprofiles as up1', 'up1.user_id', '=', 's.requested_user_id')
        ->where('s.status', '=', 3)
        ->groupBy('s.requested_user_id')
        ->select('s.id','s.deals','s.requested_time','s.avail_start_time','s.avail_end_time','s.checkin_time','s.payment_time', 'up.user_description as sd','up.user_city as scity','up.user_address as saddr','up.user_name as sname','up.price as sprice' 
        ,'up1.user_description as ud','up1.user_city as ucity','up1.user_address as uaddr','up1.user_name as uname','up1.user_pic as upic')
        ->get();
        return view('booking/payments',compact('results'));
        
    }
    public function requests(){
       
        $from = isset($_GET['from']) ? $_GET['from'] : 1;
         $counts = DB::table('services as s')
        ->where('s.status', '=', 1)
        ->selectRaw('count(*) as total')
        ->get();
        $totalcounts=$counts[0]->total;
      
            if(request()->ajax())
            {
                $results =DB::table('services as s')
                ->join('userprofiles as up', 'up.user_id', '=', 's.service_user_id')
                ->join('userprofiles as up1', 'up1.user_id', '=', 's.requested_user_id')
                ->where('s.status', '=', 1)
                ->groupBy('s.requested_user_id')
                ->orderByDesc('s.id')
                ->limit($from)
                ->select('s.id','s.deals','s.requested_time','s.avail_start_time','s.avail_end_time','s.checkin_time','s.payment_time', 'up.user_description as sd','up.user_city as scity','up.user_address as saddr','up.user_name as sname','up.price as sprice' 
                ,'up1.user_description as ud','up1.user_city as ucity','up1.user_address as uaddr','up1.user_name as uname','up1.user_pic as upic')
                ->get(); 
                $aresults = json_encode($results);
                echo $aresults;
               
            }else{
                $results =DB::table('services as s')
                ->join('userprofiles as up', 'up.user_id', '=', 's.service_user_id')
                ->join('userprofiles as up1', 'up1.user_id', '=', 's.requested_user_id')
                ->where('s.status', '=', 1)
                ->groupBy('s.requested_user_id')
                ->orderByDesc('s.id')
                ->limit($from)
                ->select('s.id','s.deals','s.requested_time','s.avail_start_time','s.avail_end_time','s.checkin_time','s.payment_time', 'up.user_description as sd','up.user_city as scity','up.user_address as saddr','up.user_name as sname','up.price as sprice' 
                ,'up1.user_description as ud','up1.user_city as ucity','up1.user_address as uaddr','up1.user_name as uname','up1.user_pic as upic')
                ->get();
                return view('booking/requests',compact('results','totalcounts'));
            }
        
        
    }
    public function request_update(Request $request){
        $service = Service::find($request->input('id'));
        $service->status =  2;
        $service->checkin_time = date('Y-m-d h:m:s');
        $service->save();
    }
    public function service_update(Request $request){
        $service = Service::find($request->input('id'));
        $service->status =  3;
        $service->payment_time = date('Y-m-d h:m:s');
        $service->save();
    }
}
