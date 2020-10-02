<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerQuickOrderWidget\Widget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;

class SprykerQuickOrderWidget extends AbstractWidget
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'SprykerQuickOrderWidget';
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@SprykerQuickOrderWidget/views/spryker-quick-order-widget/spryker-quick-order-widget.twig';
    }
}
