<?
    header('Content-Type: text/html; charset=utf-8');
?>

    <head>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    </head>
    <form >
        <div>
            <label for="id">id</label>
            <input type="text" name="id" id="id">
        </div>
        <div>
            <label for="pv">pv</label>
            <input type="password" name="pv" id="pv">
        </div>
        <div>
            <label for="pb">pb</label>
            <input type="password" name="pb" id="pb">
        </div>
        <div>
            <label for="code">code</label>
            <input type="text" name="code" id="code">
        </div>
        <div>
            <label for="email">email</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <input type="button" class="button" value="submit">
        </div>
    </form>

    

    <!-- <script>
        $(function(){
            $(".button").click(function(){
                let id = $("#id").val();
                let pv = $("#pv").val();
                let pb = $("#pb").val();
                let code = $("#code").val();
                let email = $("#email").val();

                $.ajax({
                        type : 'post',
                        url : './insert_update.php',
                        data : {},
                        error : function(){
                            alert('통신실패');
                        },
                        success : function(result){
                            alert(result);
                    }
                });
            });
        });
    </script> -->


    <script>
        $(function(){
            $(".button").click(function(){
                //let values = $("form").serialize();
                let id = $("#id").val();
                let pv = $("#pv").val();
                let pb = $("#pb").val();
                let code = $("#code").val();
                let email = $("#email").val();

                if(id == "" || pv == "" || pb == "" || code == "" || email == ""){
                    alert("빈칸을 모두 채워주세요");
                }else {
                    $.ajax({
                        url: "./insert_update.php",
                        type: "POST",
                        data: {"id" : id, "pv":pv, "pb":pb, "code":code, "email":email},
                        dataType: "json",
                        success: function(data){
                            location.replace("./insert_update.php");
                            // location.href="https://www.naver.com/";
                            alert("성공하였습니다");
                        },
                        error : function(){
                            alert("실패");
                        }
                    });
                }
            });
        });
    </script>

    <!-- <script>
        $(function(){
            $(".button")on("click",function(){
                var jObject = new Object();
                jObject.id = $('#id').val();
                jObject.pv = $('#pv').val();
                jObject.pb = $('#pb').val();
                jObject.code = $('#code').val();
                jObject.email = $('#email').val();

                initInput();

                var data = JSON.stringify(jObject);
                $.ajax({
                    url:'./insert_update.php',
                    type: 'post',
                    data: {'data':data, 'type':'addMember'},
                    success : function(data){
                        callMemberList();
                    }
                });
            });
        });
    </script> -->


    

    
