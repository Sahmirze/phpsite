<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <header>
 <p>
     <?php
     for($i=0;$i<count($language);$i++){
         echo '<a href="?lang=' . $language[$i] . '">'. strtoupper( $language[$i]) . ' </a>';
         if($i<count($language)-1) echo ' |';
     }
     ?>
        
        
    </p>
     <div class="logo"><img src="img/download.jfif" alt=""></div>
     <div class="menu">
            <ul>
                <li><a href="?lang=<?=$lang?>&page=main">Turnuva</a> </li>
                <li><a href="?lang=<?=$lang?>&page=rank">Rank</a> </li>
                <li><a href="?lang=<?=$lang?>&page=populerlik">Siralama</a> </li>
                <li><a href="?lang=<?=$lang?>&page=xerite">Xerite</a> </li>
                <li><a href="?lang=<?=$lang?>&page=dostluq">Dostluq maçı</a></li>
            </ul>
 
     </div>
     <div class="qeyd">
         <p><a href="">Sign in</a></p>
     </div>
 </header>
 <main>