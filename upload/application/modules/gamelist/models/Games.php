<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\Gamelist\Models;

class Games extends \Ilch\Model
{
    /**
     * The id.
     *
     * @var int
     */
    protected $id;

    /**
     * The catid.
     *
     * @var int
     */
    protected $catid;

    /**
     * The title.
     *
     * @var string
     */
    protected $title;

    /**
     * The Videourl.
     *
     * @var string
     */
    protected $videourl;

    /**
     * The image.
     *
     * @var string
     */
    protected $image;

    /**
     * The show status.
     *
     * @var int
     */
    protected $show;

    /**
     * Gets the id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = (int)$id;

        return $this;
    }

    /**
     * Gets the catid.
     *
     * @return int
     */
    public function getCatId()
    {
        return $this->catid;
    }

    /**
     * Sets the catid.
     *
     * @param int $catid
     * @return $this
     */
    public function setCatId($catid)
    {
        $this->catid = (int)$catid;

        return $this;
    }

    /**
     * Gets the title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the videourl.
     *
     * @param string $videourl
     * @return $this
     */
    public function setVideourl($videourl)
    {
        $this->videourl = (string)$videourl;

        return $this;
    }

    /**
     * Gets the videourl.
     *
     * @return string
     */
    public function getVideourl()
    {
        return $this->videourl;
    }

    /**
     * Sets the title.
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = (string)$title;

        return $this;
    }

    /**
     * Gets the image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image.
     *
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Gets the show status.
     *
     * @return int
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * Sets the typ status.
     *
     * @param int $show
     * @return $this
     */
    public function setShow($show)
    {
        $this->show = (int)$show;

        return $this;
    }
}
