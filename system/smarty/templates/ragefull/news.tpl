{extends file="$THEME/layout.tpl"}
{block name=title}News{/block}
{block name=body}
{foreach from=$array_news item=news}
				<li class="news-row">
					<h2>{$news.title}</h2>
					<div class="news-text">
						{$news.content}
					</div>
				</li>
{/foreach}
{/block}