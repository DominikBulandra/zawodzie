<?php 
class Cms599d508adb1a8719084716_bcb0cf9642df9e204fae283f892ea483Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this["titles"] = $this->param('slug');
     $slug=Input::get('var');
}
}
