<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PayQR Generated</title>
</head>

<body>
<form id="form1" name="form1" method="GET" target="qr" action="generate.php">

  <p>
  <label for="textfield">Enter QR information </label>
  <input type="text" name="info" id="info">
  <input type="submit" name="button" id="button" value="Generate QR">
  </p>
</form>
	<iframe name="qr" id="qr" width="500px" height="500px" src="" frameborder="0"></iframe>
</body>
</html>
