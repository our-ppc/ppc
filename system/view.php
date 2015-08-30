<?php
class View {

  public static function render($filePath,$themecheck,$data=array()){
    extract($data);

ob_start();
    require_once("/mvc/view" . $filePath);
    $content = ob_get_clean();



    if($themecheck=="user"||$themecheck=="register"||$themecheck=="message") {
  require_once("/theme/logintheme.php");
}

    else{

      require_once("/theme/default.php");
    }
  }


}