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
        <form action="{{ url('staffregister') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- 氏名 -->
            <div class="form-group">
                <label for="name" class="control-label col-xs-2">お名前 Name</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" id="name" name="name" placeholder="渋谷パル子">
                </div>
            </div>
        
            <!-- 住所 -->
            <div class="form-group">
            <label for="adress" class="control-label col-xs-2">住所 Adress</label>
                <div class="col-xs-5">
                    <select name="pref" id="pref" onChange="setMenuAddressItem(0,this[this.selectedIndex].attributes['title'].value)">
                        <option title="0" value="0" selected>----</option>
                        <option title="hokkaido" value="北海道">北海道</option>
                        <option title="aomori" value="青森県">青森県</option>
                        <option title="iwate" value="岩手県">岩手県</option>
                        <option title="miyagi" value="宮城県">宮城県</option>
                        <option title="akita" value="秋田県">秋田県</option>
                        <option title="yamagata" value="山形県">山形県</option>
                        <option title="fukushima" value="福島県">福島県</option>
                        <option title="ibaraki" value="茨城県">茨城県</option>
                        <option title="tochigi" value="栃木県">栃木県</option>
                        <option title="gumma" value="群馬県">群馬県</option>
                        <option title="saitama" value="埼玉県">埼玉県</option>
                        <option title="chiba" value="千葉県">千葉県</option>
                        <option title="tokyo" value="東京都">東京都</option>
                        <option title="kanagawa" value="神奈川県">神奈川県</option>
                        <option title="niigata" value="新潟県">新潟県</option>
                        <option title="toyama" value="富山県">富山県</option>
                        <option title="ishikawa" value="石川県">石川県</option>
                        <option title="fukui" value="福井県">福井県</option>
                        <option title="yamanashi" value="山梨県">山梨県/option>
                        <option title="nagano" value="長野県">長野県</option>
                        <option title="gifu" value="岐阜県">岐阜県</option>
                        <option title="shizuoka" value="静岡県">静岡県</option>
                        <option title="aichi" value="愛知県">愛知県</option>
                        <option title="mie" value="三重県">三重県</option>
                        <option title="shiga" value="滋賀県">滋賀県</option>
                        <option title="kyoto" value="京都府">京都府</option>
                        <option title="osaka" value="大阪府">大阪府</option>
                        <option title="hyogo" value="兵庫県">兵庫県</option>
                        <option title="nara" value="奈良県">奈良県</option>
                        <option title="wakayama" value="和歌山県">和歌山県</option>
                        <option title="tottori" value="鳥取県">鳥取県</option>
                        <option title="shimane" value="島根県">島根県</option>
                        <option title="okayama" value="岡山県">岡山県</option>
                        <option title="hiroshima" value="広島県">広島県</option>
                        <option title="yamaguchi" value="山口県">山口県</option>
                        <option title="tokushima" value="徳島県">徳島県</option>
                        <option title="kagawa" value="香川県">香川県</option>
                        <option title="ehime" value="愛媛県">愛媛県</option>
                        <option title="kochi" value="高知県">高知県</option>
                        <option title="fukuoka" value="福岡県">福岡県</option>
                        <option title="saga" value="佐賀県">佐賀県</option>
                        <option title="nagasaki" value="長崎県">長崎県</option>
                        <option title="kumamoto" value="熊本県">熊本県</option>
                        <option title="oita" value="大分県">大分県</option>
                        <option title="miyazaki" value="宮崎県">宮崎県</option>
                        <option title="kagoshima" value="鹿児島県">鹿児島県</option>
                        <option title="okinawa" value="沖縄県">沖縄県</option>
                    </select>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" id="name" name="name" placeholder="ファミリーマート歌舞伎町さくら通り店">
                    </div>
                </div>
            </div>
            
            <!-- 性別選択 -->
            <div class-"form-group">
            <label for="sex" class="control-label col-xs-2">性別 Sex</label>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
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
                <label for="nationality" class="control-label col-xs-2">国籍 Nationality</label>
                <div class="col-xs-3">
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