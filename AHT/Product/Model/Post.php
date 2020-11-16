<?php

namespace AHT\Product\Model;

use AHT\Product\Api\Data\PostInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, PostInterface
{
    const CACHE_TAG = 'aht_product_post';
    protected $_cacheTag = 'aht_product_post';
    protected $_eventPrefix = 'aht_product_post';

    protected function _construct()
    {
        $this->_init(\AHT\Product\Model\ResourceModel\Post::class);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }

    public function getPostId()
    {
        return $this->getData(self::POST_ID);
    }

    public function setPostId($id)
    {
        $this->setData(self::POST_ID, $id);
    }

    public function getName()
    {
        return $this->getData(self::NAME);
    }

    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }

    public function getUrlKey()
    {
        return $this->getData(self::URL_KEY);
    }

    public function setUrlKey($urlKey)
    {
        $this->setData(self::URL_KEY, $urlKey);
    }

    public function getPostContent()
    {
        return $this->getData(self::POST_CONTENT);
    }

    public function setPostContent($content)
    {
        $this->setData(self::POST_CONTENT, $content);
    }

    public function getTags()
    {
        return $this->getData(self::TAGS);
    }

    public function setTags($tag)
    {
        $this->setData(self::TAGS, $tag);
    }

    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    public function setStatus($status)
    {
        $this->setData(self::STATUS, $status);
    }

    public function getFeaturedImage()
    {
        return $this->getData(self::FEATURED_IMAGE);
    }

    public function setFeaturedImage($featuredImage)
    {
        $this->setData(self::FEATURED_IMAGE, $featuredImage);
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt($createdAt)
    {
        $this->setData(self::CREATED_AT);
    }

    public function getUpdatedAt()
    {

        return $this->getData(self::UPDATED_AT);
    }

    public function setUpdatedAt($updatedAt)
    {

        return $this->setData(self::UPDATED_AT);
    }

    public function getCustomAttribute($attributeCode)
    {
        // TODO: Implement getCustomAttribute() method.
    }

    public function setCustomAttribute($attributeCode, $attributeValue)
    {
        // TODO: Implement setCustomAttribute() method.
    }

    public function getCustomAttributes()
    {
        // TODO: Implement getCustomAttributes() method.
    }

    public function setCustomAttributes(array $attributes)
    {
        // TODO: Implement setCustomAttributes() method.
    }
}
