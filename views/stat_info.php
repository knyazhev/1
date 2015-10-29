<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Main page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
    
    </head>
    <body>
        <div class='container'>
            <a href="../index.php">Main page</a>
            <h1><?=$a['location']?></h1>
            <h3><?=$a['title']?></h3>
            <table>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Value</th>
                </tr>
                <?php foreach($stat_info as $a):?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['time']?></td>
                    <td><?=$a['value']?></td>
                </tr>
                <?php endforeach?>
            </table>     
        </div>
    </body>
</html?>