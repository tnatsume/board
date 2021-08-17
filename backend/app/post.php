<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Str;
use Carbon\Carbon;
class post extends Model
{
    protected $fillable = [
        'name', 'email', 'profile',
        'block_no', 'title','body',
    ];

    public static function GetPostByPref($id){
        $todayMinusOneWeekAgo = \Carbon\Carbon::today()->subWeek();
        return DB::table('posts')
            ->where('block_no', $id)
            ->where('created_at', '>' , $todayMinusOneWeekAgo)
            ->get();
    }
    public static function RequestSave($request, $block_no){
        // dd($request);
        $now = Carbon::now();
        try{
            DB::insert('insert into `posts` 
                (token, name, email, email_flg, profile, pref_id, block_no, title, body, created_at, updated_at)
                values(?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)',
                [
                    Str::random(32),
                    $request->name,
                    $request->email,
                    $request->email_chk,
                    $request->profile,
                    $request->pref_id,
                    $block_no,
                    $request->pref_name,
                    $request->body,
                    $now,
                    $now,
                ]
            );

        }catch(Exception $e){
            throw new Exception('保存処理に失敗しました。');
        }

    }


}
