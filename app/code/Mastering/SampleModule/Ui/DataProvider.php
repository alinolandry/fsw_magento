<?php


namespace Mastering\SampleModule\Ui;


use Magento\Ui\DataProvider\AbstractDataProvider;
// use Magento\Ui\DataProvider\Modifier\ModifierInterface;
// use Magento\Ui\DataProvider\Modifier\PoolInterface;


class DataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }

    public function getData()
    {
        $result = [];
        foreach ($this->collection->getItems() as $item) {
            $result[$item->getId()]['general'] = $this->getData();
        }
        return $result;
    }
}

