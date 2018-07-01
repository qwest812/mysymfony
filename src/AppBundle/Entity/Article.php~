<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 * @ORM\Table(name="article")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     *
     */
    private $title;
    /**
     *
     * @ORM\Column(type="text")
     *@Assert\NotBlank()
     */

    private $content;
//    private $created;
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ArticleCategory")
     */
    private $articleCategory;

    /**
     * @return mixed
     */
    public function getArticleCategory()
    {
        return $this->articleCategory;
    }

    /**
     * @param mixed $articleCategory
     */
    public function setArticleCategory($articleCategory)
    {
        $this->articleCategory = $articleCategory;
    }
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
