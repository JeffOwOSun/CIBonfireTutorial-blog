<ul class="nav nav-pills">
    <li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
        <a href="<?php echo site_url(SITE_AREA .'/content/blog') ?>">Posts</a>
    </li>
    <li <?php echo $this->uri->segment(4)== 'create' ? 'class="active"' : '' ?>>
        <a href="<?php echo site_url(SITE_AREA .'/content/blog/create') ?>">New Post</a>
    </li>
    <li <?php echo $this->uri->segment(4)== 'edit_post' ? 'class="active"' : '' ?>>
        <a href="<?php echo site_url(SITE_AREA .'/content/blog/edit_post') ?>">Edit Post</a>
    </li>
</ul>
