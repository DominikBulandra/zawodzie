<?php 
class Cms598c31cba577a816761627_fa663dbe5f601fb64c78b3c13f1c3576Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
