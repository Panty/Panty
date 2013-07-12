{extends file="$THEME/layout.tpl"}
{block name=title}Achat de points{/block}
{block name=body}
<li class="news-row">
	<h2>Achat de points</h2>
	<div class="news-text">
	<div id="starpass_{$IDD}"></div>
	<script type="text/javascript" src="http://script.starpass.fr/script.php?idd={$IDD}&amp;verif_en_php=1&amp;datas=&amp;">
	</script>
	<noscript>Veuillez activer le Javascript de votre navigateur s'il vous pla&icirc;t.<br />
	<a href="http://www.starpass.fr/">Micro Paiement StarPass</a>
	</noscript>
	</div>
</li>	
{/block}