{extends file="$THEME/layout.tpl"}
{block name=title}Staff{/block}
{block name=body}
				{foreach from=$array_staff item=staff}
				<li class="news-row">
					<h2>{$staff.pseudo}	<img alt="Statut" title="Statut" class="icon_li" src="{$URL_ASSETS_GLOBAL}ico/{$staff.logged}.png" style="float: right;"></h2>
					<div class="news-text">
						<b>
							<center>{$staff.rang}</center>
						</b>
						<br />
							<img alt="Mail" style="float: left;" title="Mail" class="icon_li" src="{$URL_ASSETS_GLOBAL}devtool/email.png"> Email : {$staff.mail}
					</div>
				</li>
				{/foreach}
{/block}