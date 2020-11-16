<?php

namespace AHT\Product\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * @var \AHT\Product\Model\PostFactory
     */
    private $postFactory;

    /**
     * InstallData constructor.
     * @param \AHT\Product\Model\PostFactory $postFactory
     */
    public function __construct(\AHT\Product\Model\PostFactory $postFactory)
    {
        $this->postFactory = $postFactory;
    }
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $posts = [
            [
                'name' => 'Name 1',
                'url_key' => 'URL Key 1',
                'post_content' => 'Post Content 1',
                'tags' => 'Tag 1',
                'status' => 1,
                'featured_image' => 'Featured Image 1',
            ],
            [
                'name' => 'Name 2',
                'url_key' => 'URL Key 2',
                'post_content' => 'Post Content 2',
                'tags' => 'Tag 2',
                'status' => 0,
                'featured_image' => 'Featured Image 2',
            ],
            [
                'name' => 'Name 3',
                'url_key' => 'URL Key 3',
                'post_content' => 'Post Content 3',
                'tags' => 'Tag 3',
                'status' => 1,
                'featured_image' => 'Featured Image 3',
            ]
        ];

//        foreach ($posts as $post) {
//            $setup->getConnection()->insertForce($setup->getTable('aht_product_post'), $post);
//        }
        foreach ($posts as $post){
            $p = $this->postFactory->create();
            $p->addData($post)->save();
        }
    }
}
