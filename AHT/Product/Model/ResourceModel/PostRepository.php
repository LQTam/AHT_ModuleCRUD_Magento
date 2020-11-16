<?php

namespace AHT\Product\Model\ResourceModel;

use AHT\Product\Api\Data\PostInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;

class PostRepository implements \AHT\Product\Api\PostRepositoryInterface
{
    protected $postResource;
    protected $postCollection;
    protected $postFactory;

    /**
     * PostRepository constructor.
     * @param Post $postResource
     * @param Post\Collection $postCollection
     * @param \AHT\Product\Model\PostFactory $postFactory
     */
    public function __construct(
        \AHT\Product\Model\ResourceModel\Post $postResource,
        \AHT\Product\Model\ResourceModel\Post\Collection $postCollection,
        \AHT\Product\Model\PostFactory $postFactory
    ) {
        $this->postCollection = $postCollection;
        $this->postFactory = $postFactory;
        $this->postResource = $postResource;
    }

    /**
     * Create or update a post
     *
     * @param PostInterface $post
     * @throws CouldNotSaveException
     */
    public function save(PostInterface $post)
    {
        try {
            $this->postResource->save($post);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(
                __('Could not save the Post: %1', $exception->getMessage()),
                $exception
            );
        }
    }

    /**
     * Get a post by post id.
     *
     * @param int $postId
     * @return PostInterface|void
     */
    public function find($postId)
    {
        $post = $this->postFactory->create()->load($postId);
        return $post;
    }

    /**
     * Get a list of post.
     *
     * @return PostInterface[]|void
     */
    public function getList()
    {
        return $this->postCollection;
    }

    /**
     * Delete a post.
     *
     * @param PostInterface $post
     * @return bool|void
     * @throws CouldNotDeleteException
     */
    public function delete(PostInterface $post)
    {
        try {
            $this->postResource->delete($post);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(
                __("Could not delete Post:%1", $e->getMessage()),
                $e
            );
        }
    }

    /**
     * Delete a post by post id
     *
     * @param int $postId
     * @return bool|void
     * @throws CouldNotDeleteException
     */
    public function deleteByPostId($postId)
    {
        $post = $this->postFactory->create();
        $post->setId($postId);
        try {
            $this->delete($post);
        } catch (CouldNotDeleteException $e) {
            throw new CouldNotDeleteException(
                __("Could not delete Post:%1", $e->getMessage()),
                $e
            );
        }
    }
}
