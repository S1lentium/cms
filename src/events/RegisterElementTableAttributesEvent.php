<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\events;

use yii\base\Event;

/**
 * RegisterElementTableAttributesEvent class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class RegisterElementTableAttributesEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var array List of registered table attributes for the element type.
     */
    public $tableAttributes = [];
}
