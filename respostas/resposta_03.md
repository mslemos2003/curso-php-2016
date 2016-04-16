<p>Estou fazendo uma Obra, e comprei o Material, sendo 1 caminh&atilde;o de <strong>Areia</strong> com X m&sup2;, 1 caminh&atilde;o de <strong>pedra</strong> com Y m&sup2; e 1 caminh&atilde;o de <strong>Barro</strong> com Z m&sup2;.&nbsp; Sabendo que s&oacute; tenho 1 carrinho de m&atilde;o, criei 3 compartimentos dentro do carrinho de m&atilde;o. No Primeiro compartimento eu levo 0,3 m&sup2; de areia, no segundo compartimento levo 0,35m&sup2; de pedra e no terceiro consigo colocar 0,5m&sup2; de Barro.</p>
<p>Quantas viagens vou ter que dar para levar para acabar cada material.</p>
<p><span style="color: #ff0000;">OBS: Ser&aacute; permitido somente uma estrutura de repeti&ccedil;&atilde;o, logo que s&oacute; tenho 1 carrinho, e quero os tr&ecirc;s resultados, igual exemplo abaixo:</span></p>
<p>Areia : <strong>xx</strong> viagens</p>
<p>Pedra: <strong>yy</strong> viagens</p>
<p>Barro: <strong>zz</strong> viagens</p>
<hr>
<pre style="background:#eee;padding:10px">
<p>&lt;?php</p>
<p>$areia = 1;<br />$pedra = 10;$barro = 20;</p>
<p>$carrinhoAreia = 0;<br />$carrinhoPedra = 0;<br />$carrinhoBarro = 0;</p>
<p>$numCarrinhoAreia = 0;<br />$numCarrinhoPedra = 0;<br />$numCarrinhoBarro = 0;</p>
<p>while($areia &gt; $carrinhoAreia || $carrinhoPedra &lt; $pedra || $carrinhoBarro &lt; $barro):<br /> <br /> if($areia &gt; $carrinhoAreia){<br /> $carrinhoAreia = $carrinhoAreia + 0.3;<br /> $numCarrinhoAreia++;<br /> }<br /> if($carrinhoPedra &lt; $pedra){<br /> $carrinhoPedra = $carrinhoPedra + 0.3;<br /> $numCarrinhoPedra++;<br /> }<br /> if($carrinhoBarro &lt; $barro){<br /> $carrinhoBarro = $carrinhoBarro + 0.3;<br /> $numCarrinhoBarro++;<br /> }</p>
<p>endwhile;<br />echo $areia;<br />echo '&lt;br&gt;';<br />echo $carrinhoAreia;<br />echo '&lt;br&gt;';<br />echo 'Areia: '.$numCarrinhoAreia;<br />echo '&lt;br&gt;';</p>
<p>echo 'Pedra: '.$numCarrinhoPedra;<br />echo '&lt;br&gt;';</p>
<p>echo 'Barro: '.$numCarrinhoBarro;<br />echo '&lt;br&gt;';<br />?&gt;</p>

</pre>