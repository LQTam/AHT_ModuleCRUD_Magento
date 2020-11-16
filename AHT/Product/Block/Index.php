<?php

namespace AHT\Product\Block;

use AHT\Product\Model\ResourceModel\PostRepository;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $postRepository;

    /**
     * Index constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param PostRepository $postRepository
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        PostRepository $postRepository
    ) {
        $this->postRepository = $postRepository;
        parent::__construct($context);
    }

    public function getAllPosts()
    {
        return $this->postRepository->getList();
    }
}
