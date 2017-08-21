<?php

use RainLab\Blog\Models\Post;
Route::get('hello',function(){
	return Post::orderBy('id','asc')->paginate(5);
})

?>