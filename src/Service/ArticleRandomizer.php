<?php


namespace Acme\Bundle\TestBundle\Service;


use Acme\Bundle\TestBundle\Entity\Article;

class ArticleRandomizer
{
    public function randomizeContent(Article $article)
    {
        try {
            $randomString = bin2hex(random_bytes(64));
        } catch(\Exception $e) {
            $randomString = "LoremIpsum";
        }

        $article->setContent($randomString);
    }
}