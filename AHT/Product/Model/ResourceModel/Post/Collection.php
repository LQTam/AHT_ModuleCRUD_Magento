<?php

namespace AHT\Product\Model\ResourceModel\Post;

use AHT\Product\Model\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'aht_product_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Post::class, \AHT\Product\Model\ResourceModel\Post::class);
    }
}
