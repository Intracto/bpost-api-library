<?php

namespace Bpost\BpostApiClient\Bpost\Order\Box\Option;

use Bpost\BpostApiClient\Bpost;
use Bpost\BpostApiClient\Common\XmlHelper;
use DOMDocument;
use DomElement;
use DOMException;

/**
 * bPost SaturdayDelivery class
 *
 * @author    Tijs Verkoyen <php-bpost@verkoyen.eu>
 *
 * @version   3.0.0
 *
 * @copyright Copyright (c), Tijs Verkoyen. All rights reserved.
 * @license   BSD License
 */
class SaturdayDelivery extends Option
{
    /**
     * Return the object as an array for usage in the XML
     *
     * @param DomDocument $document
     * @param string      $namespace
     *
     * @return DomElement
     * @throws DOMException
     */
    public function toXML(DOMDocument $document, $namespace = Bpost::XMLNS_V5_COMMON)
    {
        return $document->createElementNS($namespace, 'saturdayDelivery');
    }
}
