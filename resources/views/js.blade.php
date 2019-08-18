<!DOCTYPE html>
<html lang="ja">
<head>
<title>user register</title>
<!-- CSS と JavaScript -->
<script src="https://d.line-scdn.net/liff/1.0/sdk.js" type="text/javascript"></script>

<script type="text/javascript">
window.onload = function (e) {
    liff.init(function(data){
        initializeApp(data);    
    });
    
    liff.sendMessages([{
            type: 'text',
            text: "テキストメッセージの送信"
        }]).then(function () {
            window.alert("送信完了");
        }).catch(function (error) {
            window.alert("Error sending message: " + error);
        });
};

function initializeApp(data) {
    document.getElementById('languagefield').textContent = data.language;
    document.getElementById('viewtypefield').textContent = data.context.viewType;
    document.getElementById('useridfield').textContent = data.context.userId;
    document.getElementById('utouidfield').textContent = data.context.utouId;
    document.getElementById('roomidfield').textContent = data.context.roomId;
    document.getElementById('groupidfield').textContent = data.context.groupId;
};
</script>

</head>
<body>
    hogehoge
    
    
</body>
</html>