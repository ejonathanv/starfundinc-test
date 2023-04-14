<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $user = auth()->user();
        $role = $user->role;
        $route = $this->getRouteBasedOnRole($role);
        return redirect($route);
    }

    private function getRouteBasedOnRole($role){
        switch ($role) {
            case 'admin':
                return route('admin.dashboard');
            case 'user':
                return route('user.dashboard');
        }
    }
}
