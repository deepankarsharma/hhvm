<?php

class pass {
	private static function show() {
		echo "Call show()\n";
	}

	public static function do_show() {
		pass::show();
	}
}

class fail extends pass {
	static function do_show() {
		fail::show();
	}
}

pass::do_show();
fail::do_show();

echo "Done\n"; // shouldn't be displayed
