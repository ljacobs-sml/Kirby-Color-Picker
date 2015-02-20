<?php

class ColorField extends InputField{

  static public $assets = array(
    'js' => array(
      'spectrum.js',
    ),
    'css' => array(
      'spectrum.css',
    )
  );

  public function input() {

    $color = new Brick('input');
    $color->addClass('colorpicker');
    $color->attr(array(
      'name'  => $this->name(),
      'id'    => $this->id(),
      'type'  => "text",
      'value' => $this->value(),
    ));

    $wrapper = new Brick('div');
    $wrapper->addClass('input color-wrapper');
    $wrapper->append($color);

    return $color;

  }

}