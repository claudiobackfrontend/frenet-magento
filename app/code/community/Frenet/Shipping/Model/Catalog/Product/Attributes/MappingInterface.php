<?php

/**
 * Interface Frenet_Shipping_Model_Catalog_Product_Attributes_MappingInterface
 */
interface Frenet_Shipping_Model_Catalog_Product_Attributes_MappingInterface
{
    /**
     * @var string
     */
    const DEFAULT_ATTRIBUTE_WEIGHT = 'weight';

    /**
     * @var string
     */
    const DEFAULT_ATTRIBUTE_HEIGHT = 'volume_height';

    /**
     * @var string
     */
    const DEFAULT_ATTRIBUTE_WIDTH = 'volume_width';

    /**
     * @var string
     */
    const DEFAULT_ATTRIBUTE_LENGTH = 'volume_length';

    /**
     * @var string
     */
    const DEFAULT_ATTRIBUTE_LEAD_TIME = 'lead_time';

    /**
     * @var string
     */
    const DEFAULT_ATTRIBUTE_FRAGILE = 'fragile';

    /**
     * @return string
     */
    public function getWeightAttributeCode();

    /**
     * @return string
     */
    public function getHeightAttributeCode();

    /**
     * @return string
     */
    public function getLengthAttributeCode();

    /**
     * @return string
     */
    public function getWidthAttributeCode();

    /**
     * @return string
     */
    public function getLeadTimeAttributeCode();

    /**
     * @return string
     */
    public function getFragileAttributeCode();
}
