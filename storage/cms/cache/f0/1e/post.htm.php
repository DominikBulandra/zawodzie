<?php 
use RainLab\Blog\Models\Post;
class Cms599ad9697fe40021000177_e9d55620a13b7cdde1b5d4640a88cae7Class extends \Cms\Classes\PageCode
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
