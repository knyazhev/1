<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Main page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
//Start of JQuery    
    
    </head>
    <body>
        <div class='container'>
            <h1>Zal</h1>
            <div>
                <?php foreach($stat as $a):?>
                <div class = 'stat_box'>
                    <h3 class="stat_name"><?=$a['title']?>:<?=$a['value']?></h3>
                   <em>Information actuality:<?=$a['time']?></em> 
                </div>
            
            </div>
        </div>
    
    </body>
</html?>