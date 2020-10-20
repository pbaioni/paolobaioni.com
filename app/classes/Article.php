<?php

/**
 * Class for article in a blog
 */
class Article 
{
    /**
     * Title of the article
     * Content (texte) of the article
     * Author ID of the article
     * Author of the article
     * Date of the article (aaaa-mm-jj)
     * Category of the article
     */
    public $title;
    public $content;
    public $author_id;
    public $author;
    public $date;
    public $category_id;
    public $category;

    /**
     * Function construct to create an article object.
     * 
     * @param string $_title    Title
     * @param string $_content  Content
     * @param string $_author   Author
     * @param string $_date     Date
     * @param string $_category Category
     */
    public function __construct($_title = null, $_content = null, $_author_id = null, $_author = null, $_date = null, $_category_id=null, $_category = null )
    {
        $this->title = $_title;
        $this->content = $_content;
        $this->author_id = $_author_id;
        $this->author = $_author;
        $this->date = $_date;
        $this->category_id = $_category_id;
        $this->category = $_category;
    }

    /**
     * Function to display date of the article in french format 
     * Ex : 10 avril 2018
     * 
     * @return string   Date in french format (jj mois aaaa)
     */
    public function getDateFr()
    {
        setlocale(LC_TIME, "fr_FR");
        $dateFr = strftime("%d/%m/%Y", strtotime($this->date));
        return $dateFr;
    }

    // TODO - function getResume()
    // To troncate the content of the article to 200 caracters 
    // example : to display an extract in list of articles
}

