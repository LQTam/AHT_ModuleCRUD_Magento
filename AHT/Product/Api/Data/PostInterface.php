<?php

namespace AHT\Product\Api\Data;

/**
 * Interface CustomInterface
 * @package AHT\Product\Api\Data
 */
interface PostInterface extends \Magento\Framework\Api\CustomAttributesDataInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    const POST_ID = 'post_id';
    const NAME = 'name';
    const URL_KEY = 'url_key';
    const POST_CONTENT = 'post_content';
    const TAGS = 'tags';
    const STATUS = 'status';
    const FEATURED_IMAGE = 'featured_image';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Get post id
     * @return int|null
     */
    public function getPostId();

    /**
     * Set post id
     * @param $id
     * @return $this
     */
    public function setPostId($id);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Get url key
     * @return string|null
     */
    public function getUrlKey();

    /**
     * Set url key
     * @param string $urlKey
     * @return $this
     */
    public function setUrlKey($urlKey);

    /**
     * Get content
     * @return string|null
     */
    public function getPostContent();

    /**
     * Set content
     * @param string $content
     * @return $this
     */
    public function setPostContent($content);

    /**
     * Get tag
     * @return string|null
     */
    public function getTags();

    /**
     * Set tag
     * @param string $tag
     * @return $this
     */
    public function setTags($tag);

    /**
     * Get status
     * @return int|null
     */
    public function getStatus();

    /**
     * Set status
     * @param int $status
     * @return $this
     */
    public function setStatus($status);

    /**
     * Get feature image
     * @return string|null
     */
    public function getFeaturedImage();

    /**
     * Set feature image
     * @param string $featuredImage
     * @return $this
     */
    public function setFeaturedImage($featuredImage);

    /**
     * Get created at time
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created at time
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated at time
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated at time
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);
}
