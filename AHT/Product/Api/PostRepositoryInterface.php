<?php

namespace AHT\Product\Api;

use AHT\Product\Model\Post;

/**
 * Interface PostRepositoryInterface
 * @package AHT\Product\Model\ResourceModel
 */
interface PostRepositoryInterface
{
    /**
     * Create or update a post.
     *
     * @param \AHT\Product\Api\Data\PostInterface $post
     * @return Post
     */
    public function save(\AHT\Product\Api\Data\PostInterface $post);

    /**
     * Get post by Post ID.
     *
     * @param int $postId
     * @return \AHT\Product\Api\Data\PostInterface
     */
    public function find($postId);

    /**
     * @return \AHT\Product\Api\Data\PostInterface[]
     */
    public function getList();
    /**
     * Delete post.
     *
     * @param \AHT\Product\Api\Data\PostInterface $post
     * @return bool true on success
     */
    public function delete(\AHT\Product\Api\Data\PostInterface $post);

    /**
     * Delete post by Post ID
     *
     * @param int $postId
     * @return bool true on success
     */
    public function deleteByPostId($postId);
}
