<?php namespace RainLab\Blog\Components;

use Response;
use Redirect;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\Post as BlogPost;
use RainLab\Blog\Models\Category as BlogCategory;
use Input;
use Flash;
use DB;
use RainLab\User\Models\User as UserModel;
use RainLab\User\Facades\Auth;
class edit extends ComponentBase
{
   
    
   
    public function componentDetails()
    {
        return [
            'name'        => 'Edytuj',
            'description' => 'Edytuj post'
        ];
    }
      public function onRun()
    {
        

        
        $id = $this->param('slug');
        $post = Db::table('rainlab_blog_posts')->where('id', $id)->first();
        $this->page['content']=$post->content; 
        $this->page['title']=$post->title; 

       
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'rainlab.blog::lang.settings.post_slug',
                'description' => 'rainlab.blog::lang.settings.post_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
            'categoryPage' => [
                'title'       => 'rainlab.blog::lang.settings.post_category',
                'description' => 'rainlab.blog::lang.settings.post_category_description',
                'type'        => 'dropdown',
                'default'     => 'blog/category',
            ],
        ];
    }

     public function onEdit(){

        $id = $this->param('slug');
        $post = Db::table('rainlab_blog_posts')->where('id', $id)->first();
       Db::table('rainlab_blog_posts')
    ->where('id', $id)
    ->update(['title' => Input::get('title')],['content' => Input::get('content')]);
       
     
        
       Flash::success('Wiadomość zmieniona');
       return Redirect::back();

    }
   

   
    
  

  
}
