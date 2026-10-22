<!doctype html">
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ＰＨＰ基礎</title>
</head>
<body>
  <?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];
$nickname= htmlspecialchars($nickname);
$email= htmlspecialchars($email);
$goiken= htmlspecialchars($goiken);

if($nickname=='')
  {
print 'ニックネームが入力されていません。<br>';
}
else
{print 'ようこそ';
print $nickname;
print '様';
print '<br>';
}
  ?>
</body>
</html