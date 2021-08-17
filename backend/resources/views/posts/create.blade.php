@extends('layouts.app') {{-- テンプレート（CSSカスタマイズ版）読み込み --}}
@section('title', 'Laravel CRUD APP チュートリアル') {{-- サイトタイトル定義 --}}
@section('content')
<div class="container-fluid container">
    <div class="row">
        <form action="/post/create"method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="pref_id"value={{$id}}>
            <div class="col-xs-12 ">
                <label for="name">名前</label>
                <div>
                    <input type="text"name="name"autofocus placeholder="山田太郎">
                    @if($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span> @endif
                </div>
            </div>
            <div class="col-xs-12">
                <label for="name">メールアドレス</label>
                <div>
                    <input type="email"name="email"placeholder="tarou.yamada@example.com">
                    @if($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span> @endif
                </div>
                <div>
                    <select name="email_chk" id="">
                        <option value="0">匿メール</option>
                        <option value="1">直接メール</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 ">
                <label for="name">プロフィール</label>
                <div>
                    <input type="text"name="profile"placeholder="170*65*23">
                    @if($errors->has('profile'))<span class="text-danger">{{ $errors->first('profile') }}</span> @endif
                </div>
            </div>
            <div class="col-xs-12">
                <label for="pref">都道府県</label>
                <select name="pref_name" id=""class="col-xs-12">
                    @foreach($prefs as $pref)
                        <option name="pref_name"value="{{$pref->pref_id}}"@if($pref->pref_id == $id) selected @endif>{{$pref->pref_name}}</option>
                    @endforeach
                    @if($errors->has('pref_name'))<span class="text-danger">{{ $errors->first('pref_name') }}</span> @endif
                </select>
            </div>
            <div class="col-xs-12 ">
                <label for="name">書込み</label>
                <div>
                    <textarea name="body" id="" cols="30" rows="10">書込みを書いてください</textarea>
                    @if($errors->has('body'))<span class="text-danger">{{ $errors->first('body') }}</span> @endif
                </div>
            </div>
            <div class="col-xs-12">
                <button class="btn btn-success">送信</button>
            </div>
        </form>
    </div>
</div>




@endsection