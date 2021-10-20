<html>
<head>
<title>Dengan Editor TinyMCE</title>
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
   tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
   }); 
</script>
</head>
<body>

<form method="post" action="">
  Isi Berita:<br />
  <textarea name="isi" cols="30" rows="10"></textarea>
  <input type="submit" value="Simpan" />
</form>
</body>
</html>
