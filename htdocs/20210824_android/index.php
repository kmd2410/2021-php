<?
    header('Content-Type: text/html; charset=utf-8');
?>
<html>
    <head>
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    </head>
    </head>
    <body>
        <button id="button">토스트</button>
        <!-- <button id="button1">인텐트</button>
        <input type="text" id="textMessageToApp" value="App으로 전송">
        <input type="button" value="Send Message" id="button2">

        <div id="callJavaScriptText"></div> -->
    </body>
    <script>
        $(function(){

            // function sendMessage(msg){
            //     window.BRIDGE.setMessage(msg);
            // }

            $("#button").click(function(){
                BRIDGE.CallAndroid();
            });

            // $("#button1").click(function(){
            //     BRIDGE.CallAndroid1();
            // })

            // $("#button2").click(function goodJob(){
            //     sendMessage = $("#textMessageToApp").val();
            // });

            
        });
    </script>
</html>