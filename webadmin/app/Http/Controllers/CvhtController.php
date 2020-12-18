<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\Models\tukhoa;
use  DB;
class CvhtController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequest()
    {
        return view('chat');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function test($test){
        // echo $test;
        //$tra_loi = json_decode(Curl::to('https://api.wit.ai/message?v=20201106&q='.urlencode ($test))->withHeader('Authorization: Bearer 5AMPXCG7MY6FLS35ID3XN4GAPYYYIXQS')->get(),true);
        // $bieumau = $tra_loi['entities']['Bieu_Mau:Bieu_Mau'][0]['body'];

        // echo $tra_loi['text'];
        // echo '<br/>';
        // echo $tra_loi['intents'][0]['name'];
        // echo '<br/><pre>';
        // $loai = array_keys($tra_loi['entities'])[0];
        // echo $tra_loi['entities'][$loai][0]['body'];
        // dd($tra_loi);
        // echo explode(':', array_keys($tra_loi['entities'])[0])[0];
        // var_dump(array_keys($tra_loi['entities']));

        // echo $tra_loi['entities'];

        $tra_loi = json_decode(Curl::to('https://api.wit.ai/message?v=20201106&q='.urlencode ($test))->withHeader('Authorization: Bearer 5AMPXCG7MY6FLS35ID3XN4GAPYYYIXQS')->get(),true);
        // $loai = array_keys($tra_loi['entities'])[1];
        // $tl = $tra_loi['entities'][$loai][0]['body'];



            $bieumau = $tra_loi['entities']['Bieu_Mau:Bieu_Mau'][0]['body'];
            //$sql =DB::table('tbl_phanhoi')->select('PhanHoi')->join('tbl_tukhoa', 'tbl_tukhoa.IDTuKhoa', '=', 'tbl_phanhoi.IDTuKhoa')->where('tbl_tukhoa.TuKhoa', 'LIKE', "%{$bieumau}%")->first();
            $sqlx = DB::table('tbl_tukhoa')->whereRaw("MATCH(TuKhoa) AGAINST('$bieumau')")->get();
            // if(){
                //$phanhoi = $sqlx;
                // $phanhoi = $phanhoi->PhanHoi;
               // $phanhoi = $phanhoi->TuKhoa;
               $n = tukhoa::search($bieumau)->first();
               dd($n);
               // echo $n->TuKhoa;


            // }



    }

    public function ajaxRequestPost(Request $request)
    {
        $noidung = $request->noidung;
        $tra_loi = json_decode(Curl::to('https://api.wit.ai/message?v=20201218&q='.urlencode ($noidung))->withHeader('Authorization: Bearer 5AMPXCG7MY6FLS35ID3XN4GAPYYYIXQS')->get(),true);
        // $loai = array_keys($tra_loi['entities'])[1];
        // $tl = $tra_loi['entities'][$loai][0]['body'];


        if(isset($tra_loi['entities']['Bieu_Mau:Bieu_Mau'][0]['body'])){
            $bieumau = $tra_loi['entities']['Bieu_Mau:Bieu_Mau'][0]['body'];
            $n = tukhoa::search($bieumau)->first();
            if($n){
                $tukhoa = $n->TuKhoa;
                $sql =DB::table('tbl_phanhoi')->select('PhanHoi', 'link')->join('tbl_tukhoa', 'tbl_tukhoa.IDTuKhoa', '=', 'tbl_phanhoi.IDTuKhoa')->where('tbl_tukhoa.TuKhoa', $tukhoa)->first();
                // $phanhoi = $phanhoi->PhanHoi;
                if($sql->link){
                    $phanhoi = 'Bạn có thể tải về '.$sql->PhanHoi.' theo link bên dưới !!<br/> <a href="'.$sql->link.'" target="_blank" class="btn-xs btn-primary" rel="noopener noreferrer">Tải '.$sql->PhanHoi.' </a>';
                }else{
                    $phanhoi = $sql->PhanHoi;
                }


            }

            // $phanhoi= $bieumau;
        }else{
            foreach(DB::table('tbl_tukhoa')->get() as $tk){
                if(preg_match('|'.$tk->TuKhoa.'|', $noidung)) {
                    $n = tukhoa::search($tk->TuKhoa)->first();
                    $phanhoi = DB::table('tbl_phanhoi')->select('PhanHoi')->join('tbl_tukhoa', 'tbl_tukhoa.IDTuKhoa', '=', 'tbl_phanhoi.IDTuKhoa')->where('tbl_tukhoa.TuKhoa', $n->TuKhoa)->first();
                    if($phanhoi->link){
                        $phanhoi = 'Bạn có thể tải về <b>'.$phanhoi->PhanHoi.'</b> theo link bên dưới !!<br/> <a href="'.$phanhoi->link.'" target="_blank" class="btn-xs btn-primary" rel="noopener noreferrer">Tải '.$phanhoi->PhanHoi.' </a>';
                    }else{
                        $phanhoi = $phanhoi->PhanHoi;
                    }
                    // $phanhoi = $noidung;
                }
            }

        }
        if(empty($phanhoi)){
            $phanhoi = "Từ khóa này chưa được dạy";
        }

        return response()->json([
        'success'=>'Gửi Thành Công',
        'message'=> $noidung,
        'messagecvht' => ''.$phanhoi.''
        ]);
    }
}
