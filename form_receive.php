<html>
<head>
</head>
<body>
<big>接收</big><br>
<table width=660 border=1>

<tr>
<td>姓名:</td><td><? echo $_GET["name"]; ?></td>
<td>電子郵件:</td><td><? echo $_GET["e-mail"]; ?></td>
</tr>

<tr>
<td>電話分機:</td><td><? echo $_GET["phone"] ?></td>
<td>行動電話:：</td><td><? echo $_GET["cephone"] ?></td>
</tr>

<tr>
<td>是否補助</td>
<td><? echo $_GET["money_yn"]; ?></td>
<td><? echo $_GET["meal"]; ?></td>
</tr>
<td>眷屬統計</td>
<td>大人<? echo $_GET["adult_num"]; ?>人</td>
<td>小孩<? echo $_GET["child_num"]; ?>人</td>
</tr>

<tr>
<td>備註:</td><td><? echo $_GET["special"]; ?></td>
</tr>

</body>
</html>