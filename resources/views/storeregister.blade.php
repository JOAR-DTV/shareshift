<!-- resources/views/storeregister.blade.php -->
@extends('layouts.app')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
        <div class="card-title">
            店舗情報登録
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->


    <div class="your-slide-class">

        <div>
            <h2>プロシフトへようこそ</h2>
            <p>「プロシフト」は現役スタッフが助け合い欠員を埋めるシフト調整アプリです。</p>
        </div>
        
        <!-- 店舗情報登録 -->
        <div>
            <h2>店舗情報を入力してください。</h2>        
            <form action="{{ url('storeregister') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- 店舗名 -->
            <div class="form-group">
            <label for="store_name" class="control-label col-xs-2">店舗名 Store</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" id="store_name" name="store_name" placeholder="ファミリーマート歌舞伎町さくら通り店">
                </div>
            </div>
            <!-- 業種 -->
            <div class="form-group">
            <label for="industry" class="control-label col-xs-2">業種 Industry</label>
                <div class="col-xs-5">
                    <select type="text" class="form-control" id="industry" name="industry">
                        <option value="コンビニ">コンビニ</option>
                        <!--<option value="ファストフード">ファストフード</option>-->
                        <!--<option value="レストラン">レストラン</option>-->
                    </select>
                </div>
            </div>
            <!-- 区分 -->
            <div class="form-group">
            <label for="division" class="control-label col-xs-2">区分 Division</label>
                <div class="col-xs-5">
                    <select type="text" class="form-control" id="division" name="division" placeholder="">
                        <option value="セブン">セブン-イレブン</option>
                        <option value="ファミマ">ファミリーマート</option>
                        <option value="ローソン">ローソン</option>
                    </select>
                </div>
            </div>
            <!-- TEL -->
            <div class="form-group">
            <label for="phone_number" class="control-label col-xs-2">電話番号 Phone number</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="0521234567">
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
            <!-- 店舗地図 -->
            <div class="form-group">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3261.5125960327937!2d136.90611326577275!3d35.16877453031687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1566659077367!5m2!1sja!2sjp" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            </form>
        </div>

        <!-- ヘルプ条件登録 -->
        <div>
            <h2>ヘルプ条件を入力してください。</h2>
            <form action="{{ url('helpregister') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- 時給 -->
            <div class="form-group">
                        <label for="wage" class="control-label col-xs-2">時給 Wage</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" id="wage" name="wage">円
                            <p>ヘルプスタッフへの特別時給となります。</p>
                        </div>
            </div>
            <!-- 交通費 -->
            <div class="form-group">
                        <label for="transpotation_included" class="control-label col-xs-2">交通費 Transpotation</label>
                        <div class="col-xs-5">
                            <input type="radio" class="form-control" id="transpotation_included" name="transpotation_included" value="all">全額
                            <input type="radio" class="form-control" id="transpotation_included" name="transpotation_included" value="partial">一部
                            <input type="radio" class="form-control" id="transpotation_included" name="transpotation_included" value="none">なし
                        </div>
            </div>
            <!-- 残業 -->
            <div class="form-group">
                        <label for="overtime" class="control-label col-xs-2">残業 Overtime</label>
                        <div class="col-xs-5">
                            <input type="radio" class="form-control" id="overtime" name="overtime" value="true">あり
                            <input type="radio" class="form-control" id="overtime" name="overtime" value="false" checked="checked">なし
                        </div>
            </div>
            <!-- 日払い -->
            <div class="form-group">
                        <label for="daily_installment" class="control-label col-xs-2">日払い Daily installment</label>
                        <div class="col-xs-5">
                            <input type="radio" class="form-control" id="daily_installment" name="daily_installment" value="true" checked="checked">可能 OK
                            <input type="radio" class="form-control" id="daily_installment" name="daily_installment" value="false">不可 NG
                        </div>
            </div>
            <!-- 制服 -->
            <div class="form-group">
                        <label for="outfits" class="control-label col-xs-2">制服・用具 Outfits</label>
                        <div class="col-xs-5">
                            <input type="radio" class="form-control" id="outfits" name="outfits" value="true" checked="checked">貸与可能 Lendable
                            <input type="radio" class="form-control" id="outfits" name="outfits" value="false">貸与不可 Not lendable
                        </div>
            </div>
            <!-- 注意点 -->
            <div class="form-group">
                        <label for="remarks" class="control-label col-xs-2">備考 Remarks</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" id="remarks" name="remarks">
                        </div>
            </div>
            <!-- 一言メッセージ -->
            <div class="form-group">
                        <label for="comment" class="control-label col-xs-2">ひとこと Comment</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" id="comment" name="comment">
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
        
        <!-- シフトパターン登録 -->
        <div>
            <h2>ヘルプ条件を入力してください。</h2>
            <form action="{{ url('shiftregister') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- パターン名 -->
            <div class="form-group">
                        <label for="pattern" class="control-label col-xs-2">パターン名 Pattern</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" id="pattern" name="pattern" placeholder="日勤">
                        </div>
            </div>
            <!-- 説明 -->
            <div class="form-group">
                        <label for="option" class="control-label col-xs-2">説明 Option</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" id="option" name="option" placeholder="">
                        </div>
            </div>
            <!-- 時間帯 -->
            <div class="form-group">
                        <label for="shift_time" class="control-label col-xs-2">残業 Overtime</label>
                        <div class="col-xs-5">
                            <input type="time" class="form-control" id="shift_time_start" name="shift_time_start">～<input type="time" class="form-control" id="shift_time_end" name="shift_time_end">
                        </div>
            </div>
            
            
            
            </form>
        </div>
        
        <!-- ヘルプ条件登録 -->
        <div>
            <h2>シフト作成期間を選択してください。</h2>
            <form action="{{ url('zoneregister') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- 時給 -->
            <div class="form-group">
                        <label for="zone" class="control-label col-xs-2"></label>
                        <div class-"form-group">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-info active">
                                <input type="radio" name="zone" id="amonth" autocomplete="off" value="male" checked>1か月 / A month
                            </label>
                            <label class="btn btn-info">
                                <input type="radio" name="zone" id="halfamonth" autocomplete="off" value="female">半月 / Half a month
                            </label>
                            <label class="btn btn-info">
                                <input type="radio" name="zone" id="2weeks" autocomplete="off" value="others">2週間 / 2 weeks
                            </label>
                            <label class="btn btn-info">
                                <input type="radio" name="zone" id="aweek" autocomplete="off" value="others">1週間 / A week
                            </label>
                            </div>
                        </div>
            </div>
            </form>
        </div>
    
    
    </div>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.your-slide-class').slick({
            dots: true,
            infinite: false,
            });
        });
        function close(){
        liff.closeWindow();
        }
    </script>
    
@endsection