<?php /*a:1:{s:69:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/default/demo\\ws.html";i:1591067483;}*/ ?>
<!DOCTYPE html>
<html xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>ThinkCMF WebSocket Demo</title>
    <script src="/themes/default/demo/public/assets/js/vue.js"></script>
    <script src="/themes/default/demo/public/assets/js/websocketClient.js"></script>
</head>
<body>

<div id="app">
    <ol>
        <li v-for="message in messages">
            {{message }}
        </li>
    </ol>
    <input v-model="message">
    <button v-on:click="sentMessage">发送</button>
</div>
<?php 
    $_request=request();
 ?>
<script>
    var client = null;

    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello ThinkCMF!',
            messages: []
        },
        methods: {
            sentMessage: function () {
                client.emit('demo/ws/index', {
                    "event": 'demo/ws/index',
                    "url": 'demo/ws/index',
                    "arguments": { //客户端投递数据
                        "post": {'message': this.message},//post数据
                        "get": {'test_get': 'test'},//get数据
                        "cookie": [],//cookie数据
                    }
                });

                this.message = '';
            }
        }
    });


    client = WsClient({host: "<?php echo $_request->host(true); ?>", port: 9501, endpoint: ''});
    client.connect();

    client.on('demo/ws/index', function (data) {
        console.log(data);

        app.messages.push(data.message);
    });

    // client.emit('portal/ws/index', "data");

</script>
</body>
</html>