<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public $data = [];
    public function index(){
        $this->data['welcome'] = 'Hoc lap trinh tai <b>Unicode </b>';
        $this->data['content'] = '<h3>Chuong 1: Nhap mon Laravel</h3>
        <p>Kien thuc 1</p>
        <p>Kien thuc 2</p>
        <p>Kien thuc 3</p>
        ';
        $this->data['index'] = 1;
        $this->data['dataArr'] = [
            'item1',
            'item2',
            'item3'
        ];
        $this->data['number'] = 1;
        $this->data['message'] = "thanh cong";
        $this->data['title'] = 'Dao tao lap trinh';
        return view('Clients.home', $this -> data);
    }
    public function products(){
        $this->data['title'] = 'san pham';
        return view('products', $this -> data);
    }
}
