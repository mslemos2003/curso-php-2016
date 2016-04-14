<p>1_ Construir um algoritmo que leia 2 n&uacute;meros e efetue a adi&ccedil;&atilde;o. Caso o valor somado seja maior que 20, este dever&aacute; ser apresentando somando-se a ele mais 8.Caso o valor somado seja menor ou igual a 20,&nbsp;este dever&aacute; ser apresentado subtraindo-se 5.</p>
<p>Obs: N&atilde;o ser&aacute; adminitido valor negativo</p>
<hr>
<pre style="background:#eee;padding:10px">
<p><br />&lt;?php<br />header('Content-type: text/html; charset=utf-8');</p>
<p>$n1 = 22;<br />$n2 = 03;<br />$soma = $n1 + $n2;</p>
<p><br />if ($soma &gt; 20):<br /> $soma = $soma + 8;<br /> echo $soma;<br />else:<br /> $soma = $soma - 5;<br /> if ($soma &lt; 0):<br /> echo 'Soma negativa. Resultado inv&aacute;lido!';<br /> else:<br /> echo "resultado &eacute;: ".$soma;<br /> endif;<br />endif;</p>
</pre>