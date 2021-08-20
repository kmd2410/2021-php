<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(function(){
        $(".button").click(function(){
            $.ajax({
                url: "source_server_test.php",
		    	type: "post",
			    data: $("form").serialize(),
            }).done(function(data){			
			$("#input_data").html(data);
            });
        });
    }); 
</script> -->

    <form action="./insert_update.php" method="POST">
        <div>
            <label for="id">id</label>
            <input type="text" name="id" id="id">
        </div>
        <div>
            <label for="pv">pv</label>
            <input type="text" name="pv" id="pv">
        </div>
        <div>
            <label for="pb">pb</label>
            <input type="text" name="pb" id="pb">
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
            <input type="submit" class="button">
        </div>
    </form>

    

    
