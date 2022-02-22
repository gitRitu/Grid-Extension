<?php

/**
 * Grid Grid Collection.
*/

namespace Dotsquares\Grid\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Dotsquares\Grid\Model\Grid',
            'Dotsquares\Grid\Model\ResourceModel\Grid'
        );
    }
}
