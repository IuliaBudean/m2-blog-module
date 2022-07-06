<?php

namespace MageMastery\Blog\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Blog posts collection
 */
class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\MageMastery\Blog\Model\Post::class, \MageMastery\Blog\Model\ResourceModel\Post::class);
        $this->_map['fields']['post_id'] = 'main_table.post_id';
    }
}

