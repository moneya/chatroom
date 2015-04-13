<?php

function chatroom_init(){
	$chatroom_url = ossn_site_url().'chatroom';
	$icon = ossn_site_url('components/chatroom/images/chat.png');
    ossn_register_sections_menu('newsfeed', array(
            'text' => 'Chatroom',
            'url' => $chatroom_url,
            'section' => 'links',
            'icon' => $icon
        ));
	
	ossn_register_page('chatroom', 'chatroom_page');
}
function chatroom_page(){
  	$title = 'Chatroom';
    $contents = array('content' => ossn_view('components/chatroom/index'));
    $content = ossn_set_page_layout('newsfeed', $contents);
    echo ossn_view_page($title, $content);	
}
		
ossn_register_callback('ossn', 'init', 'chatroom_init');

?>