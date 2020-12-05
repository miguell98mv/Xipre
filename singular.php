<?php

get_header();

get_template_part("content-post"); //forma2
get_sidebar();
if( is_single() ){
comments_template();}
get_footer();
