<p>2_ Fa&ccedil;a um loop com X numeros imprimindo os numero pares acima de 10 e menor que 60, e ao final do loop quero a soma dos numero pares e impares.</p>
<p>Obs: Para saber se &eacute; par use a seguinte formula:</p>
<p><br /><strong> $numero % 2 == 0</strong></p>
<hr>
<pre style="background:#eee;padding:10px">
<p>&lt;?php</p>
<p>$loopX = 500;</p>
<p>$minimo = 10;<br />$maximo = 60;<br />$pares = 0;<br />$impares = 0;</p>
<p>for ($i = 0; $i &lt; $loopX; $i++) {<br /> if($i % 2 == 0){<br /> $pares = $pares + $i;<br /> }else{<br /> $impares = $impares + $i;<br /> } <br /> // imprimindo numero pares<br /> if($i &gt; $minimo &amp;&amp; $i &lt; $maximo):<br /> if($i % 2 == 0){<br /> echo $i.'&lt;br&gt;';<br /> };<br /> <br /> endif;<br />}<br />echo "&lt;hr&gt;";<br />echo "Os numero pares s&atilde;o: ".$pares;<br />echo "&lt;br&gt;";<br />echo "Os numero impares s&atilde;o: ".$impares;</p>
</pre>