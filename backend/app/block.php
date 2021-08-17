<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class block extends Model
{
    protected $fillable = [
        'block-id', 'block_name', 
        'pref_id', 'pref_name',
    ];
    public static function GetPrefName($id){
        return DB::table('blocks')
                ->where('pref_id', $id)
                ->first();
    }
    public static function GetBlock($block_id){
        return DB::table('blocks')
                ->where('block_id', $block_id)
                ->get();
    }
}
