<?php

require_once 'SocialMedia.php';
require_once 'WhatsApp.php';
require_once 'Instagram.php';
require_once 'PostMediaManager.php';

$socialMedia = new WhatsApp();
$postMediaManager = new PostMediaManager($socialMedia);
$postMediaManager->publishPost();

$socialMedia = new Instagram();
$postMediaManager = new PostMediaManager($socialMedia);
$postMediaManager->publishPost();
