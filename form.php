<html>
<head>
</head>
<body>
<form action="form_receive.php" method="get">
<table width=660 border=1>
<tr>
<td colspan=4><center>聯誼旅遊報名表</centere></td>
</tr>

<tr>
<td>姓名:<br><font color="#ff0000">(必填)</font color></td><td><input name="name" type=text size=10></input></td>
<td>電子郵件:</td><td><input name="e-mail" type=text size=30></input></td>
</tr>

<tr>
<td>電話分機:<br><font color="#ff0000">(必填)</font color></td><td><input name="phone" type=text size=10></input></td>
<td>行動電話:：<font color="#ff0000">(必填)</font color></td><td><input name="cephone" type=text size=10></input></td>
</tr>

<tr>
<td>是否補助</td>
<td colspan='2'>本人本次是否使用褔利金幣(補助2000)<input type=radio name=money_yn value=y checked>是<input type=radio name=money_yn value=no>否<td>　
<input type=radio name=meal value=葷食 checked>葷食<input type=radio name=meal value=素食>素食
</tr>

<tr>
<td>眷屬統計</td>
<td>大人 <select name=adult_num><option value=0 selected >0</option><option value=1>1 </option><option value=2>2 </option><option value=3>3 </option><option value=4>4 </option><option value=5>5 </option></select> 人(不含自己)</td>
<td>小孩 <select name=child_num><option value=0 selected >0</option><option value=1>1 </option><option value=2>2 </option><option value=3>3 </option><option value=4>4 </option><option value=5>5 </option></select> 人</td>
</tr>

<tr>
<td>備註:</td><td colspan='3'><input type=text name=special size=70></td>
</tr>


<!--
密碼:<input name="pass" type=password size=15></input><br>
性別:<input name="sex" type=radio value="man">男</input>
<input name="sex" type=radio>女</input><br>

工作:<input name="work" type=radio>學生</input>
<input name="work" type=radio>老師</input>
<input name="work" type=radio>公職</input><br>
<TEXTAREA cols=10 rows=10 name=area></TEXTAREA>
<select name=adult_num>
              <option value=1 selected >1</option>
              <option value=2>2</option>
              <option value=3>3</option>
</select> 人(不含自己)
-->
</form>
<input type=submit value="送出"></input>
</body>
</html>