<?php

namespace MageSuite\ContentConstructorRemoveLayoutValidation\Plugin\Catalog\Model\Attribute\Backend\Customlayoutupdate;

class DisableValidation
{
    public function aroundValidate(\Magento\Catalog\Model\Attribute\Backend\Customlayoutupdate $subject, callable $proceed, $object)
    {
        return true;
    }
}
