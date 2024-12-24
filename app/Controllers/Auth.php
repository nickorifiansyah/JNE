<?php

namespace App\Controllers;

use Symfony\Component\Process\Exception\ProcessFailedException;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }
    
    public function forgot()
    {
        return view('forgot');
    }
    
    public function home(){
        return view ('home');
    }

    public function  profile(){
        return view ('profile');
    }
    
    public function  favorite(){
        return view ('favorite');
    }

    public function  self(){
        return view ('self');
    }
    
    
    public function  personaldata(){
        return view ('personaldata');
    }

    public function  employee(){
        return view ('employee');
    }

    public function  pnc(){
        return view ('pnc');
    }
    public function  chart(){
        return view ('chart');
    }
    public function  ETH(){
        return view ('ETH');
    }

    public function  people(){
        return view ('people');
    }

    public function  compensation(){
        return view ('compensation');
    }

    public function  history(){
        return view ('history');
    }

    public function  personal(){
        return view ('personal');
    }
   
    public function leaveAbsence()
    {
        // Logic untuk menampilkan halaman Leave & Absence
        return view('leave_absence');
    }
    public function attendanceOvertime()
    {
        // Logic untuk menampilkan halaman Attendance & Overtime
        return view('attendance_overtime');
    }

    
    public function  LAIP(){
        return view ('LAIP');
    }
    public function  LH(){
        return view ('LH');
    }
    public function  long_leave(){
        return view ('long_leave');
    }
    public function  izin_upah_bayar(){
        return view ('izin_upah_bayar');
    }
    public function  LA(){
        return view ('LA');
    }
    
    public function  absence_app(){
        return view ('absence_app');
    }
    public function  attendance_overtime(){
        return view ('attendance_overtime');
    }
    public function  overtime(){
        return view ('overtime');
    }
    public function  summary(){
        return view ('summary');
    }
    public function  roster(){
        return view ('roster');
    }
    public function  core_system_manager(){
        return view ('core_system_manager');
    }
    public function  personal_manager(){
        return view ('personal_manager');
    }
    public function  display_personel_data(){
        return view ('display_personel_data');
    }
    public function  recruitment(){
        return view ('recruitment');
    }
    public function  candidate_data_center(){
        return view ('candidate_data_center');
    }
    public function  data_center(){
        return view ('data_center');
    }
    public function  request_list(){
        return view ('request_list');
    }
    public function  request_detail(){
        return view ('request_detail');
    }
    public function  approval_tracking(){
        return view ('approval_tracking');
    }
    public function  selection_list(){
        return view ('selection_list');
    }
    public function  selection_detail(){
        return view ('selection_detail');
    }
    public function  seletion_candidate(){
        return view ('seletion_candidate');
    }
    public function  user_group(){
        return view ('user_group');
    }
}