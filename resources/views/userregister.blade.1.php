<!-- resources/views/userregister.blade.php -->
@extends('layouts.app')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            ユーザー登録
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 登録フォーム -->
        <form action="{{ url('userregister') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- 氏名 -->
            <div class="form-group">
                <label for="name" class="control-label col-sm-2">お名前 Your Name</label>
                <div class="col-xs-offset-2 col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="渋谷パル子">
                </div>
            </div>
        
            <!-- 店舗名 -->
            <div class="form-group">
                <label for="store_name" class="control-label col-sm-6">店舗名 Store</label>
                <div class="col-xs-offset-2 col-sm-6">
                    <input type="text" class="form-control" id="store_name" name="store_name" placeholder="ファミリーマート歌舞伎町さくら通り店">
                </div>
            </div>
            
            <!-- 性別選択 -->
            <div class="form-group">
            <label for="sex" class="control-label col-sm-6">性別 Sex</label>
            <div class="col-xs-offset-2 btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-info active">
                    <input type="radio" name="sex" id="option1" autocomplete="off" value="male" checked>男性 / Male
                </label>
                <label class="btn btn-info">
                    <input type="radio" name="sex" id="option2" autocomplete="off" value="female">女性 / Female
                </label>
                <label class="btn btn-info">
                    <input type="radio" name="sex" id="option3" autocomplete="off" value="others">その他 / Others
                </label>
            </div>
            </div>

            <!-- 国籍選択 -->
            <div class="form-group">
                <label for="nationality" class="control-label col-sm-6">国籍 Nationality</label>
                <div class="col-xs-offset-2 col-xs-3">
                    <select class="form-control" id="nationality" name="nationality">
                        <option value="JPN">日本</option>
                        <option value="Foreigner">日本以外</option>
                    </select>
                </div>
            </div>

            <!-- 送信ボタン -->
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" class="btn btn-primary">送信 Submit</button>
                </div>
            </div>
        </form>
    </div>



@endsection