<html>
    <!-- <head>
        <title>jQuery Tutorial - Login Form</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(function(){
                $("#login").on("click",function(){
                    let email = $("#email").val();
                    let password = $("#password").val();

                    if (email == empty || password == empty){
                        alert("모두 입력해주세요");
                    }

                    $.ajax(
                        {   
                            url: login.php,
                            method:"POST",
                            data:{
                                    login: 1,
                                    emailPHP: email,
                                    passwordPHP: password
                            },
                            success: function(){console.log(response);},
                            dataType: "text"
                        }
                    );
                });
            });
        </script>
    </head> -->
    <body>
        <form action="./t_signup.php" method="POST">
            <div>
                <label for="id">ID</label>
                <input type="text" name="id">
            </div>
            <div>
                <label for="pw">PW</label>
                <input type="password" name="pw">
            </div>
            <div>
                <label for="pwc">PWC</label>
                <input type="password" name="pwc">
            </div>
            <div>
                <label for="name">NAME</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">E-MAIL</label>
                <input type="text" name="email">
            </div>
            <div>
                <input type="submit" value="가입하기">
            </div>
        </form>
    </body>
</html>