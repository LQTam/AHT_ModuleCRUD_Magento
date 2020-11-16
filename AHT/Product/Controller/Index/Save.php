<?php

namespace AHT\Product\Controller\Index;

use AHT\Product\Helper\CacheFlush;
use AHT\Product\Model\ResourceModel\PostRepository;
use Magento\Framework\App\Action\Context;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \AHT\Product\Model\PostFactory
     */
    private $postFactory;
    /**
     * @var PostRepository
     */
    private $postRepository;

    private $cacheFlush;

    /**
     * Save constructor.
     * @param Context $context
     * @param \AHT\Product\Model\PostFactory $postFactory
     * @param CacheFlush $cacheFlush
     * @param PostRepository $postRepository
     */
    public function __construct(Context $context, \AHT\Product\Model\PostFactory $postFactory, CacheFlush $cacheFlush, PostRepository $postRepository)
    {
        $this->postFactory = $postFactory;
        $this->postRepository = $postRepository;
        $this->cacheFlush = $cacheFlush;
        parent::__construct($context);
    }

    public function execute()
    {
        if ($this->getRequest()->isPost()) {
            extract($_POST);

            $post = $this->postFactory->create();
            if (isset($post_id)) {
                $post->setPostId($post_id);
            }
            $post->setName($name);
            $post->setPostContent($post_content);

            $this->postRepository->save($post);
            $this->cacheFlush->flushCache();
            return $this->_redirect('product/index/index');
        }
    }
}
