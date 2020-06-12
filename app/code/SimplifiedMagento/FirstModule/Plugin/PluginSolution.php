<?php


namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution
{
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        return "Before plugins ".$name;
    }
}