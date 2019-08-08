<form method="POST" enctype="multipart/form-data">
	
<input type="file" name="fileUpload">
<button type="submit">Send</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	$file = $_FILES["fileUpload"];

	if ($file["error"]) {

		throw new Exception("Error : ".$file["error"]);
		
	}// if error

	$dirUploads = "uploads";

	if (!is_dir($dirUploads)) {
		
		mkdir($dirUploads);

	}//if is_dir

	$fileExtension = explode(".", strtolower($file['name']));
	$novoNome = date("dmYHis").".".$fileExtension[1];

	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $novoNome)) {
		
		echo "Upload realizado com sucesso!";
		echo "<br><br>";
		echo "Imagem com novo nome de : ".$novoNome;
		echo "<br><br>";
		echo "<img src=". $dirUploads . DIRECTORY_SEPARATOR . $novoNome ." style='border: 10px solid black;'>";

	}else {

		throw new Exception("Não foi possível realizar o upload.");
		

	}//move_uploaded_file

}//if request_method

?>