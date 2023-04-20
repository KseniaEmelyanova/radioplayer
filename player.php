<?php
include "./api/api.php";
?>
<!DOCTYPE html>
<head>
    <title>PlayerTest</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="card">
        <div class="lines"></div>
        <div class="imgBx">
            <img src="<?php echo $djpic; ?>">
        </div>
        <div class="imgBx1">
            <img src="<?php echo $titlepic; ?>">
        </div>
        <div class="content">
            <div class="details">
                <h2><span>OnAir: <?php echo $onairdj; ?></span><br><?php echo $titleonair; ?></h2>
                <div class="data">
                    <a href="<?php echo $asxlink1; ?>">
                    <img src=<?php echo "https://".$lclink.":".$lcport."/media/static/images/listener/mplayer.png" ?> title="WindowsMedia 128 kpbs mp3"></a>

                    <a href="<?php echo $m3ulink1; ?>">
                    <img src=<?php echo "https://".$lclink.":".$lcport."/media/static/images/listener/winamp.png" ?> title="Winamp 128 kpbs mp3"></a>

                    <a href="<?php echo $m3ulink1; ?>">
                    <img src=<?php echo "https://".$lclink.":".$lcport."/media/static/images/listener/itunes.png" ?> title="iTunes 128 kpbs mp3"></a>
                    
                    <a href="<?php echo $asxlink1; ?>">
                    <img src=<?php echo "https://".$lclink.":".$lcport."/media/static/images/listener/realplayer.png"; ?> title="RealPlayer 128 kpbs mp3"></a>

                    <a href="<?php echo $weblink1; ?>" target="_blank">
                    <img src=<?php echo "https://".$lclink.":".$lcport."/media/static/images/listener/web.png" ?> title="WebPlayer 128 kpbs mp3"></a>
                    
                </div>
                <div class="actionBtn">
                    <button>Tracks request</button>
                    <button>Danate</button>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
