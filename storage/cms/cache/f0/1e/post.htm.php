<?php 
use RainLab\Blog\Models\Post;
class Cms599d5e13a5847272657081_528de8f493efa119388d4cffdf1c1822Class extends \Cms\Classes\PageCode
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
public function postdelete()
{
     Db::table('rainlab_blog_posts')->where('id', '=', $this->post->id)->delete();
     }
       
}
