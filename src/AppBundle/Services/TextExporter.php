<?php

namespace AppBundle\Services;

use \AppBundle\Entity\Article;
//use AppBundle\Repository\ArticleRepository;
use Psr\Log\LoggerInterface;

class TextExporter
{
    private $exportDir;
    private $logger;

    function  __construct(LoggerInterface $logger, $exportDir)
    {
        $this->exportDir = $exportDir;
        $this->logger = $logger;
        if (!file_exists($this->exportDir)) {
            dump($this->exportDir);
            mkdir($this->exportDir, 0755);
        }
    }

    public function text_exporter(Article $article)
    {

        file_put_contents($this->exportDir . '/' . $article->getTitle() . '.txt', $article->getContent());
        $this->logger->info('Article exporter');
//        return 'hello';

    }
}