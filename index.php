<html>
    <head>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    </head>
<body>

<script>
    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,    
        function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }
    $( document ).ready(function() {
        var x = getUrlVars();
        document.write(parseInt(x.a) + parseInt(x.b));
   });
</script>
</body>
</html> 