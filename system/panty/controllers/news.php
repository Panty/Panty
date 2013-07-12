<?php
/**
 * news.php
 *
 * Page concernant les actions dirigé actualités
 * Ex : news :rire:
 * Pour le moment, cette page est quasiment inutile, peut-être qu'elle le sera bientôt moins :)
 *
 * @package        Panty
 * @author        Kirito
 */
class News_Controller extends TinyMVC_Controller
{
    function index()
    {
        $this->load->model('News_Model', 'news');
        $array_news = $this->news->get_news();
        $this->smarty->assign('array_news', $array_news);
        $this->smarty->display(PANTY_THEME . '/news.tpl');
    }
}