<?php

function link_tok($url, $body)
{
	$url = url($url);
	return "<a href='{$url}'>{$body}</a>";
}