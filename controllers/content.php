<?php

class Content extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('post_model');

        Template::set('toolbar_title', 'Manage Your Blog');
        Template::set_block('sub_nav', 'content/sub_nav');
    }

    //------------------------------------------------------------------
    
    public function index()
    { 
        $posts = $this->post_model->where('deleted', 0)->find_all();

        Template::set('posts', $posts);

        Template::render();
    }

    //----------------------------------------------------------------
    
    public function create()
    {
        Template::set('toolbar_title', 'Create New Post');
        Template::set_view('content/post_form');
        Template::render();
    }
}

?>
