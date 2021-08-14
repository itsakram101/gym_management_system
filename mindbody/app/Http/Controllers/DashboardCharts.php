<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;
use App\Models\User;
use App\Models\Equipment;
class DashboardCharts extends Controller
{
    public function index(){
        $data = [
            'admins' => $this->getAdminCont(),
            'trainers' => $this->getTrainersCount(),
            'members' => $this->getMemebersCount(),
            'equipments' => $this->getEquipmentsCount(),
            'schedule' => $this->getSchedule()
        ];
        // dd($data['schedule']);
        return view('DashboardCharts.index',$data);
    }

    private function getSchedule(){
        return Schedule::first();
    }

    private function getAdminCont(){
        return User::where('role','ADM')->count();
    }
    private function getTrainersCount(){
        return User::where('role','TRN')->count();
    }
    private function getMemebersCount(){
        return User::where('role','USR')->count();
    }
    private function getEquipmentsCount(){
        return Equipment::count();
    }
}
