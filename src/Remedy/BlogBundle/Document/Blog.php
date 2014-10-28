<?php


namespace Remedy\BlogBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Blog
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $title;

    /**
     * @MongoDB\String
     */
    protected $author;

    /**
     * @MongoDB\String
     */
    protected $blog;

    /**
     * @MongoDB\File
     */
    protected $image;

    /**
     * @MongoDB\String
     */
    protected $tags;

    /**
     * @MongoDB\Date
     */
    protected $created;

    /**
     * @MongoDB\Date
     */
    protected $updated;

    


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Get author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set blog
     *
     * @param string $blog
     * @return self
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;
        return $this;
    }

    /**
     * Get blog
     *
     * @return string $blog
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set image
     *
     * @param file $image
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return file $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * Get tags
     *
     * @return string $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set created
     *
     * @param date $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return date $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param date $updated
     * @return self
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * Get updated
     *
     * @return date $updated
     */
    public function getUpdated()
    {
        return $this->updated;
    }
//
//    /** @ReferenceMany(targetDocument="Comment", mappedBy="blog") */
//    private $comments;



//    protected $comments = array();
//
//    public function addComment(Comment $comment)
//    {
//        $this->comments[] = $comment;
//    }
//
//    public function getComments()
//    {
//        return $this->comments;
//    }




}
