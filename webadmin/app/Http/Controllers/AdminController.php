<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Model;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportDe;
use Storage;

session_start();

class AdminController extends Controller
{
    public function checklogin(Request $request){
        $username = $request->username;
        $password = md5($request->password);
        $result = DB::table('tbl_admin')->where('admin_username', $username)->where('admin_password', $password)->first();
        if($result){
            $request->session()->put('admin', $username);
            return redirect('/dashboard');
        }else{
            $request->session()->put('message', 'Sai tên đăng nhập hoặc mật khẩu. Vui lòng nhập lại!');
            return redirect('/login');
        }
        // return view('admin.dashboard');
       
    }
    public function dashboard()
    {
        $admin = Session::get('admin');
        if(isset($admin)){
            $tukhoa = DB::table('tbl_tukhoa')->get();
            $chude = DB::table('tbl_chude')->get();
            $phanhoi = DB::table('tbl_phanhoi')->get();
            $log = DB::table('tbl_log')->get();

            return view('admin.dashboard')->with('chude', $chude)->with('tukhoa', $tukhoa)->with('phanhoi', $phanhoi)->with('log', $log);
        }else{
            return redirect('/login');
        }
        
    }
    public function logout()
    {
        Session::put('admin', null);
        return redirect('/login');
    }
    public function them_tra_loi(){
        $chude = DB::table('tbl_chude')->get();
        $tukhoa = DB::table('tbl_tukhoa')->get();
        $traloi = DB::table('tbl_phanhoi')->get();
        return view('admin.them_tra_loi')->with('traloi', $traloi)->with('chude', $chude)->with('tukhoa', $tukhoa);
    }
    public function sua_tra_loi($id){
        $chude = DB::table('tbl_chude')->get();
        $tukhoa = DB::table('tbl_tukhoa')->get();
        $traloi = DB::table('tbl_phanhoi')->where('IDPhanHoi', $id)->first();

        return view('admin.sua_tra_loi')->with('traloi', $traloi)->with('chude', $chude)->with('tukhoa', $tukhoa);
    }
    public function sua_tra_loi_post(Request $request){
        $idtraloi = $request->idtraloi;
        $chude = $request->chude;
        $tukhoa = $request->tukhoa;
        $noidung = $request->noidung;

        $data = array();
        $data['IDChuDe'] = $chude;
        $data['IDTuKhoa'] = $tukhoa;
        $data['PhanHoi'] = $noidung;

            DB::table('tbl_phanhoi')->where('IDPhanHoi', $idtraloi)->update($data);
            Session::put('message', 'Cập Nhật Câu Trả Lời Thành Công');
        return redirect('/them_tra_loi');
    }
    public function xoa_tra_loi($id){
        DB::table('tbl_phanhoi')->where('IDPhanHoi', $id)->delete();
        Session::put('message', 'Xóa từ khóa thành công');
        return redirect('/them_tra_loi');
    }

    public function them_tra_loi_post(Request $request){
        $chude = $request->chude;
        $tukhoa = $request->tukhoa;
        $noidung = $request->noidung;

        $data = array();
        $data['IDChuDe'] = $chude;
        $data['IDTuKhoa'] = $tukhoa;
        $data['PhanHoi'] = $noidung;

            DB::table('tbl_phanhoi')->insert($data);
            Session::put('message', 'Thêm Câu Trả Lời Thành Công');
        
        return redirect('/them_tra_loi');

    }
    public function them_tu_khoa(){
        $tukhoa = DB::table('tbl_tukhoa')->get();
        return view('admin.them_tu_khoa')->with('tukhoa', $tukhoa);
    }
    public function sua_tu_khoa($id){
        $tukhoa = DB::table('tbl_tukhoa')->where('IDTuKhoa', $id)->first();
        return view('admin.sua_tu_khoa')->with('id', $id)->with('tukhoa', $tukhoa);
    }
    public function sua_tu_khoa_post(Request $request){
        $idtukhoa = $request->idtukhoa;
        $tukhoa = $request->tukhoa;
        $data = array();
        $data['TuKhoa'] = $tukhoa;
            DB::table('tbl_tukhoa')->where('IDTuKhoa', $idtukhoa)->update($data);
            Session::put('message', 'Cập Nhật Từ Khóa Thành Công');
        return redirect('/them_tu_khoa');
    }
    public function xoa_tu_khoa($tukhoa){
        DB::table('tbl_phanhoi')->where('IDTuKhoa', $tukhoa)->delete();
        DB::table('tbl_tukhoa')->where('IDTuKhoa', $tukhoa)->delete();
        Session::put('message', 'Xóa từ khóa thành công');
        return redirect('/them_tu_khoa');
    }

    public function them_tu_khoa_post(Request $request){
        $tukhoa = $request->tukhoa;
        $data = array();
        $data['TuKhoa'] = $tukhoa;
        $check = DB::table('tbl_tukhoa')->where('TuKhoa', $tukhoa)->count();
        if($check == 0){
            DB::table('tbl_tukhoa')->insert($data);
            Session::put('message', 'Thêm Từ Khóa Thành Công');
        }else{  
            Session::put('message', 'Thêm Từ Khóa Thất Bại, Từ khóa đã tồn tại');
            
        }
        return redirect('/them_tu_khoa');

    }
    public function them_chu_de(){
        $chude = DB::table('tbl_chude')->get();
        return view('admin.them_chu_de')->with('chude', $chude);
    }
    public function them_chu_de_post(Request $request){
        $machude = $request->machude;
        $tenchude = $request->tenchude;
        $data = array();
        $data['MaChuDe'] = $machude;
        $data['TenChuDe'] = $tenchude;

        $check = DB::table('tbl_chude')->where('MaChuDe', $machude)->count();
        if($check == 0){
            DB::table('tbl_chude')->insert($data);
            Session::put('message', 'Thêm Chủ Đề Thành Công');
        }else{  
            Session::put('message', 'Thêm Chủ Đề Thất Bại, Chủ Đề đã tồn tại');
            
        }
        return redirect('/them_chu_de');

    }

}
