<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    // view da página inicial do dashboard
    public function dashboardHome(){
        $data['month'] = date('n');
        $data['year'] = date('Y');
        return view('/pages/dashboard-home', $data);
    }

    // CRUD pacientes
    public function dashboardPatient(){
        $data['month'] = date('n');
        $data['year'] = date('Y');
        return view('/pages/dashboard-patient', $data);
    }

    public function dashboardModern()
    {
        return view('/pages/dashboard-modern');
    }

    public function dashboardEcommerce()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/dashboard-ecommerce', ['pageConfigs' => $pageConfigs]);
    }

    public function dashboardAnalytics()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/dashboard-analytics', ['pageConfigs' => $pageConfigs]);
    }
}
