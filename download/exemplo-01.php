<form method="POST" enctype="multipart/form-data">
	<input type="text" name="link" placeholder="Link" required>
	<button name="send">Send</button>
</form>

<?php

if (isset($_POST['send'])) {
	$link = $_POST['link'];

	$content = file_get_contents($link);

	$parse = parse_url($link);

	$novoNome = explode(".", $parse["path"]);

	$basename = basename(md5($parse["path"]).".".$novoNome[1]);

	$file = fopen($basename, "w+");

	fwrite($file, $content);

	fclose($file);

	echo "<img src=".$basename.">";
}

?>