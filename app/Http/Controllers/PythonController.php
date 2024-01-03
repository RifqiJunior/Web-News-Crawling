<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Symfony\Component\Process\Process;

class PythonController extends Controller
{
    public function run(Request $request)
    {
        // $process = new Process(['C:\Users\rifqi\AppData\Local\Programs\Python\Python310\python ', base_path() . 'C:\xampp\htdocs\detikKP\laravel\public\Python\main.py']);
        // $process->run();
        // dd($process->getOutput());
        // return view('list', ['process' => $process]);

        $search = $request->search;
        $result = shell_exec('C:\Users\dzikr\AppData\Local\Programs\Python\Python310\python C:\laravel\public\Python\main.py');
        $record = json_decode($result);
        $results = [];

        // Iterate through the array and search for the search term in the titles
        foreach ($record as $item) {
            if (stripos($item[1], $search) !== false) {
                $results[] = $item;
            }
        }
        $data = [
            'list' => $results
        ];
        // $main_array = array();

        // $first_array = array("name" => "first", "url" => "http://test.com/");
        // $second_array = array("name" => "second", "url" => "http://otherwebsite.com/");
        // $third_array = array("name" => "third", "url" => "http://anotherwebsite.com/");

        // $main_array[] = $first_array;
        // $main_array[] = $second_array;
        // $main_array[] = $third_array;
        // dd($main_array);

        // $collection = collect(json_decode($result));
        // dd($collection);
        // $filteredItems = $collection->where(1, 'Polisi');
        // dd($filteredItems);

        return view('dashboard.scrap', $data);
    }
}
