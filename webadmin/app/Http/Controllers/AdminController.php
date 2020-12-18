<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Model;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportDe;
use Illuminate\Support\Facades\Redirect;
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
        $tukhoa0 = DB::table('tbl_tukhoa')->where('usetk',0)->get();
        $tukhoa = DB::table('tbl_tukhoa')->get();
        $traloi = DB::table('tbl_phanhoi')->get();
        return view('admin.them_tra_loi')->with('traloi', $traloi)->with('chude', $chude)->with('tukhoa', $tukhoa)->with('tukhoa0', $tukhoa0);
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
        $noidung = $request->noidung;

        $data = array();
        $data['IDChuDe'] = $chude;
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
        $link = $request->link;

        $data = array();
        $data['IDChuDe'] = $chude;
        $data['IDTuKhoa'] = $tukhoa;
        $data['PhanHoi'] = $noidung;
        $data['link'] = $link;
        $d = array();
        $d['usetk'] = 1;
            DB::table('tbl_tukhoa')->where('IDTuKhoa', $tukhoa)->update($d);
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
    public function list_cau_hoi(){
        $cau_hoi = DB::table('tbl_cauhoi')->where('done',1)->get();
        return view('list')->with('cau_hoi', $cau_hoi);
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
    public function dat_cau_hoi(){
        return view('dat_cau_hoi');
    }
    public function dat_cau_hoi_post(Request $request){
        $cau_hoi = $request->cau_hoi;

        $data = array();
        $data['cau_hoi'] = $cau_hoi;
        $data['time'] = time();
        $data['done'] = 0;

        if($cau_hoi != ''){
            DB::table('tbl_cauhoi')->insert($data);
            Session::put('message', 'Thêm Câu hỏi Thành Công');
        }else{
            Session::put('message', 'Vui lòng điền đủ thông tin');

        }
        return redirect('/dat_cau_hoi');

    }
    public function cau_hoi(){
        $cau_hoi = DB::table('tbl_cauhoi')->get();
        return view('admin.cau_hoi')->with('cau_hoi', $cau_hoi);
    }

    public function tl_cau_hoi($id){
        $cau_hoi = DB::table('tbl_cauhoi')->where('id',$id)->first();
        return view('admin.tl_cau_hoi')->with('cau_hoi', $cau_hoi);
    }
    public function sua_cau_hoi($id){
        $cau_hoi = DB::table('tbl_cauhoi')->where('id',$id)->first();
        return view('admin.sua_cau_hoi')->with('cau_hoi', $cau_hoi);
    }
    public function del_cau_hoi($id){
        DB::table('tbl_cauhoi')->where('id', $id)->delete();
        Session::put('message', 'Câu hỏi được xóa thành công');
        return redirect('cau_hoi');
    }
    public function p_sua_cau_hoi(Request $request){
        $id = $request->id;
        $tra_loi = $request->tra_loi;
        $data = array();
        $data['tra_loi'] = $tra_loi;
        $data['done'] = 1;
        $check = DB::table('tbl_cauhoi')->where('id', $id)->first();
        $d = array();
        $d['PhanHoi'] = $tra_loi;
            DB::table('tbl_PhanHoi')->where('PhanHoi', $check->tra_loi)->update($d);
            DB::table('tbl_cauhoi')->where('id', $id)->update($data);
            Session::put('message', 'Câu hỏi được sửa thành công');
        return redirect('cau_hoi');
    }
    public function p_tl_cau_hoi(Request $request){
        $id = $request->id;
        $tra_loi = $request->tra_loi;
        $tu_khoa = $request->tu_khoa;
        $data = array();
        $data['tra_loi'] = $tra_loi;
        $data['done'] = 1;
        if($tu_khoa != ''){
            $c_tk = DB::table('tbl_TuKhoa')->where('TuKhoa', $tu_khoa)->count();
            $idtk = DB::table('tbl_TuKhoa')->where('TuKhoa', $tu_khoa)->first();
            if($c_tk == 0){


            $d = array();
            $d['TuKhoa'] = $tu_khoa;
           $id_tk = DB::table('tbl_TuKhoa')->insertGetId($d);
        }else{

            $id_tk = $idtk->IDTuKhoa;
        }
           $ph = array();
           $ph['IDChuDe'] = 0;
           $ph['IDTuKhoa'] = $id_tk;
           $ph['PhanHoi'] = $tra_loi;
           DB::table('tbl_phanhoi')->insert($ph);
            DB::table('tbl_cauhoi')->where('id', $id)->update($data);
            Session::put('message', 'Câu hỏi được trả lời thành công');
        }else{
            Session::put('message', 'Vui lòng điền đủ thông tin');
        }

        return redirect('cau_hoi');
    }


}
