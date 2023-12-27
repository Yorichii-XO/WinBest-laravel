<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
   
    public function index()
    {
        $notifications = auth()->user()->notifications;
        return view('test.index', compact('notifications'));
    }
}
