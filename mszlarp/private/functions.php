<?php
	function startsWith( $haystack, $needle ) {
		$length = strlen( $needle );
		return substr( $haystack, 0, $length ) === $needle;
	}
	function useText($path) {
		$admin_path = 'doppler/data/pages/';
		$file = file_get_contents($admin_path . $path . '.txt');
		$rows = explode("\n", $file);
		$pattern = array();
		$pattern[0] = '/======/';
		$pattern[1] = '/=====/';
		$pattern[2] = '/====/';
		$pattern[3] = '/===/';
		$pattern[4] = '/==/';
		$replacement = ' ';
		foreach($rows as $row) {
			if ($row!='') {
				if (startsWith($row, '======') ) {
					echo "<h1>". preg_replace($pattern, $replacement, $row) . "</h1>";
				} elseif (startsWith($row, '=====') ) {
					echo "<h2>". preg_replace($pattern, $replacement, $row) . "</h2>";
				} elseif (startsWith($row, '====') ) {
					echo "<h3>". preg_replace($pattern, $replacement, $row) . "</h3>";
				} elseif (startsWith($row, '===') ) {
					echo "<h4>". preg_replace($pattern, $replacement, $row) . "</h4>";
				} elseif (startsWith($row, '==') ) {
					echo "<h5>". preg_replace($pattern, $replacement, $row) . "</h5>";
				} elseif (startsWith($row, '*') ) {
					echo "<li>". preg_replace($pattern, $replacement, $row) . "</li>";
				} else {
					echo "<p>" . $row . "</p>";
				}
			}
		}
	}
?>