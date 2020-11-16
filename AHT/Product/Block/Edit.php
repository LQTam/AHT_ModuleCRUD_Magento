<?php

namespace AHT\Product\Block;

use AHT\Product\Model\ResourceModel\PostRepository;
use Magento\Framework\View\Result\PageFactory;

class Edit extends \Magento\Framework\View\Element\Template
{
    protected $postRepository;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        PostRepository $postRepository
    ) {
        $this->postRepository = $postRepository;
        return parent::__construct($context);
    }

    public function getPost()
    {
        $postId = (int)$this->getRequest()->getParam('post_id');
        return $this->postRepository->find($postId);
    }
}
