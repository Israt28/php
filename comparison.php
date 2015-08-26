!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>comparison operators</title>
<link rel="stylesheet" type="text/css" href="css/basic.css"/>
</head>
<body>
<h3>comparison operators</h3>
<?php
$firstname=$_POST['firstname'];
$birthyear=$_POST['birthyear'];
if($firstname=='Mishu')
{
print "<p>you are instructor</p>";
}
else
{
if($firstname>"M")
{
print "<p>you are $firstname,which comes after L  in the alphabet</p>";
}else{
print "<p>you are $firstname,which comes before M in the alphabet</p>";
}
}
if($birthyear<1960)
{
print "<p>u were born before 1960</p>";
}
elseif($birthyear== 1960)
{
print "<p> u were born in 1960</p>";
}
else{
print "<p>u were born after 1960</p>";
}
print "<p>-end-</p>";
?>
</body>
</html>
