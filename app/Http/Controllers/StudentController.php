<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{


public function detail($nama, $kelas = 'rpl') {
        return "nama saya adalah $nama <br> kelas saya $kelas";
    }

public function student(){
    return "Halaman Student";
}
public function Name($nama){
    return "Nama Siswa:$nama";
}
}
