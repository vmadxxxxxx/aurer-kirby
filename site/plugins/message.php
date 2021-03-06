<?php

class message {

	public static function set($name, $value, $type='plain') {
		$messages = s::get('messages') ? s::get('messages') : array();
		$message = new stdClass;
		$message->name = $name;
		$message->value = $value;
		$message->type = $type;
		$messages[$name] = $message;
		s::set('messages', $messages);
	}

	public static function all() {
		$messages = s::get('messages');
		s::remove('messages');

		if ( !is_array($messages)) {
			return;
		}

		// Sort messages by type
		usort($messages, function($a, $b){
			return ($a->type < $b->type) ? -1 : 1;
		});

		// Build list HTML
		$out = "<ul class=\"messages\">\n";
		foreach ($messages as $message) {
			$out .= "<li class=\"messages-item messages-item--$message->type\">$message->value</li>\n";
		}
		$out .= "</ul>\n";
		return $out;
	}

	public static function get($name) {
		$messages = s::get('messages');
		foreach ($messages as $key => $message) {
			if ($message->name == $name) {
				return $message->value;
			}
		}
		s::remove('messages');
	}

	function __toString() {
		return $this->value;
	}
}
