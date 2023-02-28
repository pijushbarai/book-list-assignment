<!DOCTYPE html>
<html>
	
<head>
	<title>
		How to call PHP function
		on the click of a Button ?
	</title>
</head>

<body style="text-align:center;">
<form action="functioncalling.php">
    <input type="text" name="txt" />
    <input type="submit" name="insert" value="insert" onclick="insert()" />
    <input type="submit" name="select" value="select" onclick="select()" />
</form>

<?php
    function select(){
        // echo "The select function is called.";
    }
    function insert(){
        // echo "The insert function is called.";
    }
?>
</body>

</html>
