<?php
/**
 * news_model.php
 *
 * Page intégrant les requêtes niveau news
 *
 * @package		Panty
 * @author		Kirito
 */
class News_Model extends TinyMVC_Model
{
	function get_news()
	{
		$this->db->query('select * from panty_news ORDER BY id DESC LIMIT 0,5');
		$array_news = array();
		$i          = 1;
		while ($row = $this->db->next())
		{
			$array_news[$i]['id']      = $row['id'];
			$array_news[$i]['title']   = htmlentities($row['title'], ENT_QUOTES, "UTF-8");
			$array_news[$i]['content'] = htmlentities($row['content'], ENT_QUOTES, "UTF-8");
			$array_news[$i]['author']  = htmlentities($row['author'], ENT_QUOTES, "UTF-8");
			$array_news[$i]['type']    = $row['type'];
			$i++;
		} //$row = $this->db->next()
		return $array_news;
	}
}