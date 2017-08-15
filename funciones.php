<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 4.3.3.2 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2017-07-31T15:44:54.176959958"/>
	<style type="text/css">
		pre.cjk { font-family: "Nimbus Mono L", monospace }
	</style>
</head>
<body lang="es-VE" dir="ltr" style="background: transparent">
<pre class="western" style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal"><font color="#333333"><font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt">&lt;?php</font></font></font>
<font color="#333333"><font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt">function media($valores) {</font></font></font>
<font color="#333333"> <font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="font-weight: normal">$cantidad = count($valores);</span></span></font></font></font>
<font color="#333333"> <font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="font-weight: normal">$suma = 0;</span></span></font></font></font>
<font color="#333333"> <font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="font-weight: normal">for ($i = 0 ; $i &lt; $cantidad ; $i++) {</span></span></font></font></font>
<font color="#333333"> <font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="font-weight: normal">$suma += $valores[$i];</span></span></font></font></font>
<font color="#333333"> <font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="font-weight: normal">}</span></span></font></font></font>
<font color="#333333"> <font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="font-weight: normal">$media = $suma / $cantidad;</span></span></font></font></font>
<a name="yui_3_17_2_1_1501530153242_63"></a><font color="#333333"> <font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="font-weight: normal">return $media;</span></span></font></font></font>
<font color="#333333"><font face="Monaco, Menlo, Consolas, Courier New, monospace"><font size="2" style="font-size: 9pt">}</font></font></font></pre><p>
<br/>
<br/>

</p>
</body>
</html>