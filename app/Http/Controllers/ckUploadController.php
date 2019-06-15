<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ckUploadController extends Controller
{
    public function upload(){
        $this->validate(\request(), [
            'upload' => 'required|mimes:jpeg,png,jpg',
        ]);
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $day = Carbon::now()->day;
        $hour = Carbon::now()->hour;
        $minute = Carbon::now()->minute;

        $imagePath = "/img/pages/{$year}/{$month}/{$day}/{$hour}h{$minute}m/";
//        $imagePath1 = "../../public_html/img/pages/{$year}/{$month}/{$day}/{$hour}h{$minute}m/";
//        $imagePath2 = "/img/pages/{$year}/{$month}/{$day}/{$hour}h{$minute}m/";

        $file = \request()->file('upload');
        $fileName = $file->getclientOriginalName();

        if (file_exists(public_path($imagePath) . $fileName)) {
            $fileName = Carbon::now()->timestamp . $fileName;
        }
        $file->move(public_path($imagePath), $fileName);
        $url = $imagePath . $fileName;
        return "<script>window.parent.CKEDITOR.tools.callFunction(1,'{$url}','')</script>";
    }
}
