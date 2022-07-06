<?php

namespace MageMastery\Blog\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\MageMastery\Blog\Model\ResourceModel\Post::class);
    }
    
}