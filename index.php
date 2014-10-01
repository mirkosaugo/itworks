<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>localhost</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="__sources/style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
     <!-- <img src="__sources/logo.png" alt="" class="logo"> -->
     <h1>it works!</h1>
     <p class="intro">an easy localhost launcher :)</p>
      <?php
      $path  = $_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);        
      $exclude = array('__sources');
      $desc_null = 'localhost project'; 
      $content = '<div class="list">';
      foreach( glob($_SERVER['DOCUMENT_ROOT'] .'/*', GLOB_ONLYDIR) as $fn) {
        
      $name = basename($fn);
      if(!in_array($name, $exclude)){

        $contj = file_get_contents($fn.'/itworks.json');
        if(!empty($contj)) $json = json_decode($contj, true); else $json = array("desc"=>"localhost project", "thumb"=>"");
       
        if($json['desc']=='') $json['desc'] = $desc_null;
        if($json['url']=='') $json['url'] = $path.$name;
        $content .= '
            <a class="list-group-item" href="http://'.$json['url'].'">
                  <div class="module-icon">
                      <img class="icon" src="__sources/timthumb.php?src=__sources/thumb'.$json['thumb'].'.png&w=56&h=56" alt="">
                  </div>
                  <h4>'.$name.'</h4>
                  <p>'.$json['desc'].'</p>
                  <span class="btn">launch!</span>
            </a>';
        }
      }
      $content .= ' <a class="credits" target="_blank" href="https://twitter.com/wearezaion">@wearezaion</a></div>';
      echo $content;
     ?>

    </body>
</html>
