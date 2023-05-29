<?php
include __DIR__.'/api/api.php'; 

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
            <img src="<?= $djpic; ?>">
        </div>
        <div class="imgBx1">
            <img src="<?= $titlepic; ?>">
        </div>
        <div class="content">
            <div class="details">
                <h2><span>OnAir: <?= $onairdj; ?></span><br><?= $titleonair; ?></h2>
                <div class="data">
                    <a href="<?= $asxlink1; ?>">
                    <img src="<?= lclp; ?>/media/static/images/listener/mplayer.png" title="WindowsMedia 128 kpbs mp3"></a>

                    <a href="<?= $m3ulink1; ?>">
                    <img src=<?= lclp; ?>/media/static/images/listener/winamp.png" title="Winamp 128 kpbs mp3"></a>

                    <a href="<?= $m3ulink1; ?>">
                    <img src="<?= lclp; ?>/media/static/images/listener/itunes.png" title="iTunes 128 kpbs mp3"></a>
                    
                    <a href="<?= $asxlink1; ?>">
                    <img src="<?= lclp; ?>/media/static/images/listener/realplayer.png"; title="RealPlayer 128 kpbs mp3"></a>

                    <a href="<?= $weblink1; ?>" target="_blank">
                    <img src="<?= lclp; ?>/media/static/images/listener/web.png" title="WebPlayer 128 kpbs mp3"></a>
                    
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
