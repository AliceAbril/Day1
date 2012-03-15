<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> JavaScrip Page </title>
        
        <script type="text/javascript" src="jquery-1.7.1.js"></script>
        
        <script>
            
            function sendIt() {
                
                var param = $("#alias").val();
            
                var url = "api/dispatcher.php";
                
                $.post(url,{service: "welcome.hello", params: {name:param}},
                        function(data){
                            $("#rta").html(data);
                        })
            }
            
        </script>
    </head>
    <body>
        
        Button: <input type="button" value="Send" onclick ="sendIt();"/> 
        <br/><br/>
            
        Text: <input type="text" value=" " id="alias"/>
         <br/><br/>
        
        <div id="rta" class="res"> Respuesta </div>
        
        <script type="text/javascript" src="index.js"></script>
        
    </body>
</html>
