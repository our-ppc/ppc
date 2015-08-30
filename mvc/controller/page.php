<?php
class PageController {
  public function home() {
    View::render("/page/home.php","home",array());
  }
}