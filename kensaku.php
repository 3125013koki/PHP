<!DOCTYPE html> 

<html lang="ja"> 

<head> 

<meta charset="utf-8"> 

<title>ＰＨＰ基礎</title> 

</head> 

<body> 

<?php 

$id=$_POST['id']; 

$dbh=new PDO('sqlite:phpkiso.db'); 

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$dbh->exec('CREATE TABLE IF NOT EXISTS anketo(id INTEGER PRIMARY KEY,nickname TEXT,email TEXT,goiken TEXT)'); 

$sql='SELECT * FROM anketo WHERE id=?'; 

$stmt=$dbh->prepare($sql); 

$data[]=$id; 

$stmt->execute($data); 

 
 while(1) 

{ 

$rec=$stmt->fetch(PDO::FETCH_ASSOC); 

if($rec==false) 

{ 

break; 

} 

print $rec['id']; 

print ' '; 

print $rec['name']; 

print ' '; 

print $rec['email']; 

print ' '; 

print $rec['address']; 

print '<br><br>'; 

} 

$dbh=null; 

?> 

<br/> 

<a href="member_select.html">検索画面に戻る</a> 

</body> 

</html> 

 