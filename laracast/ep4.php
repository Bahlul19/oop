 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
    header
    {
       background: #e3e3e3;
       padding:2em;
       text-align: center;
    }
</style>
</head>
<body>
    
    <header>
        
        <h1>
            
        <?= "ip address is " .htmlspecialchars($_GET['ip_address']); ?>
            
        </h1>
        
    </header>

</body>
</html> 