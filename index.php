<?php
header('Content-Type: text/html; charset=UTF-8');
function removeBOM($text) {
    return preg_replace("/^\xEF\xBB\xBF/", "", $text); // Remove UTF-8 BOM
}

$html = file_get_contents("indexhello.html");
$html = removeBOM($html); // Strip BOM characters

$encodedHtml = base64_encode($html);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Aptech offers various computer courses like Java, Python, Android app development,C, C++, Tally and more">
	<title>Aptech Computer Education - Fatehabad</title>
	</head>
<body>
    <script>
        document.write(atob("<?php echo $encodedHtml; ?>"));
    </script>
</body>
</html>
