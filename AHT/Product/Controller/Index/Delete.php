<?php

namespace AHT\Product\Controller\Index;

use AHT\Product\Helper\CacheFlush;
use AHT\Product\Model\ResourceModel\PostRepository;
use Magento\Framework\App\Action\Context;

class Delete extends \Magento\Framework\App\Action\Action
{
    protected $cacheFlush;
    protected $postRepository;

    public function __construct(Context $context, PostRepository $postRepository, CacheFlush $cacheFlush)
    {
        $this->postRepository = $postRepository;
        $this->cacheFlush = $cacheFlush;
        parent::__construct($context);
    }

    public function execute()
    {
        $postId = (int) $this->getRequest()->getParam('post_id');
        $this->postRepository->deleteByPostId($postId);
        $this->cacheFlush->flushCache();
        return $this->_redirect('product/index/index');
    }
}
