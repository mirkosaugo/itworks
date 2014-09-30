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
      $temp_name = basename($fn);
      $temp_explode = explode('| ', $temp_name);

      if(!in_array($temp_name, $exclude)){
        if($temp_explode[1]=='') $temp_explode[1] = $desc_null;
        $content .= '
            <a class="list-group-item" href="http://'.$path.$temp_explode[0].'">
                  <div class="module-icon">
                      <img class="icon" src="__sources/timthumb.php?src=__sources/thumb'.$temp_explode[2].'.png&w=56&h=56" alt="">
                  </div>
                  <h4>'.$temp_explode[0].'</h4>
                  <p>'.$temp_explode[1].'</p>
                  <span class="btn">launch!</span>
            </a>';
        }
      }
      $content .= ' <a class="credits" target="_blank" href="https://twitter.com/wearezaion">@wearezaion</a></div>';
      echo $content;
     ?>

    </body>
</html>
