<?php 
class Cms598b0e11cb16c736494712_98009a4951442aafcf50d26091377e59Class extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
