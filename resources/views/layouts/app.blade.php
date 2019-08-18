<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
<title>user register</title>
<!-- CSS と JavaScript -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
<script type="text/javascript">
window.onload = function (e) {
    // init で初期化。基本情報を取得。
    // https://developers.line.me/ja/reference/liff/#initialize-liff-app
    liff.init(function (data) {
        getProfile();
    });

    // メッセージの送信
    document.getElementById('submit').addEventListener('click', function () {
        // https://developers.line.me/ja/reference/liff/#liffsendmessages()
        liff.sendMessages([{
            type: 'text',
            text: "テキストメッセージの送信"
        }, {
            type: 'sticker',
            packageId: '2',
            stickerId: '144'
        }]).then(function () {
            window.alert("送信完了");
        }).catch(function (error) {
            window.alert("Error sending message: " + error);
        });
    });
};

// プロファイルの取得と表示
function getProfile(){
    // https://developers.line.me/ja/reference/liff/#liffgetprofile()
    liff.getProfile().then(function (profile) {
        document.getElementById('').textContent = profile.userId;
        document.getElementById('').textContent = profile.displayName;

        var profilePictureDiv = document.getElementById('');
        if (profilePictureDiv.firstElementChild) {
            profilePictureDiv.removeChild(profilePictureDiv.firstElementChild);
        }

        document.getElementById('statusmessagefield').textContent = profile.statusMessage;
    }).catch(function (error) {
        window.alert("Error getting profile: " + error);
    });
}

</script>

</head>
<body>
    @yield('content')
</body>
</html>