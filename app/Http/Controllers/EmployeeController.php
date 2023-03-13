<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployeeController;


class EmployeeController extends Controller
{
    public function index()
    {
        //untuk menampilakan semua adata di route pegawai
        $data = Employee::all();
        return view('datapegawai',compact('data'));
    }

    public function tambahpegawai() 
    {
        //untuk menampilkan halaman tambahdata
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {
        //fungsi untuk menambahkan data
        $data =Employee::create($request -> all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data-> foto = $request -> file('foto')->getClientOriginalName();
            $data->save();
        }
        return  redirect()->route('pegawai');
    }

    public function editdata($id)
    {
        //untuk menampilkan halaman edit data
        $data = Employee::find($id);
        return view('editdata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        //ini fungsi untuk mengedit data
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect('/pegawai'); 
    }

    public function deletdata($id)
    {
        $data = Employee::find($id);
        $data->delete($id);
        return redirect('/pegawai');
    }
}
