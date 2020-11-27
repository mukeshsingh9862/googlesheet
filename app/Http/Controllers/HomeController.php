<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

    	$data['response'] = json_decode(file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1VMboyodfxigHcrJWfFKn9ggrmxWBAytXpOzfcuRCVF4/values/A1:J37?key=AIzaSyBFQPPNXZT0Eam6GpKi66Kaqh5rmd8Wcdw'));

    	return view('index',$data);
    }

    public function exportCsv(){
    	  $response = json_decode(file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1VMboyodfxigHcrJWfFKn9ggrmxWBAytXpOzfcuRCVF4/values/A1:J37?key=AIzaSyBFQPPNXZT0Eam6GpKi66Kaqh5rmd8Wcdw'));
        
			ob_start();

            $f = fopen('php://output', 'w');
            $header = $response->values[0];
            fputcsv($f, $header, ',');
            unset($response->values[0]);
            foreach ($response->values as $line) {
                
                fputcsv($f, $line, ',');
            }

            header('Content-Type: application/csv');
            header('Content-Disposition: attachment; filename="GoogleSheetRecord.csv";');
            exit;


    }
}
