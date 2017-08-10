<?php namespace RainLab\Blog\Components;

use Response;
use Redirect;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\Post as BlogPost;
use RainLab\Blog\Models\Category as BlogCategory;
use Input;
use Flash;
use RainLab\User\Models\User as UserModel;
use RainLab\User\Facades\Auth;
class Create extends ComponentBase
{
   
    
   
    public function componentDetails()
    {
        return [
            'name'        => 'rainlab.blog::lang.settings.create_title',
            'description' => 'rainlab.blog::lang.settings.create_description'
        ];
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

     public function onSave(){

       $user = Auth::getUser();
        $post = new BlogPost;
        $post->title = Input::get('title');
        $post->slug = Input::get('slug');
        $post->content = Input::get('content');
        $post->user_id=$user->id;

        $post->save();
        
      
       Flash::success('Post added');
       return Redirect::back();

    }

   
    
  

  
}
