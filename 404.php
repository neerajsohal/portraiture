<?php get_header(); ?>
<div class="container">
	<div class="span-18">
    <h1>Error 404. Page not found!</h1>
	<hr class="space" />
	<hr class="space" />
    <blockquote><big><big>oops! I have looked for it everywhere, couldn't find it anywhere.<br />
Please don't tell my site owner that I failed you. I am still working on it.</big></big></blockquote>
    <p>If this problem persists, kindly contact <a href="mailto:<?php bloginfo('admin_email'); ?>">Administrator</a>! Trust me, He's a good guy and will help you.</p>
	<hr class="space" />
	<hr class="space" />
    <h2>You can also try going to other sections of this website</h2>
   	<ul class="menu">
			<?php $args = array(
            'depth'        => 1,
            'show_date'    => '',
            'date_format'  => get_option('date_format'),
            'child_of'     => 0,
            'exclude'      => '',
            'include'      => '',
            'title_li'     => '',
            'echo'         => 1,
            'authors'      => '',
            'sort_column'  => 'menu_order, post_title',
            'link_before'  => '',
            'link_after'   => '' ,
            'exclude_tree' => '' ); ?> 
			<?php wp_list_pages($args); ?> 
	</ul>
	<h2>Otherwise, Try searching our archives</h2>
    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>" >
       	<input type="text" name="s" id="s" /> <input type="submit" value="Search" id="searchsubmit" class="btn" />
    </form>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>