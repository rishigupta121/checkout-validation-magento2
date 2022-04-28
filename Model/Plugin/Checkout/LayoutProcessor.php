<?php
namespace RG\CustomCheckoutField\Model\Plugin\Checkout;
class LayoutProcessor
{
    /**
     * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {

        // $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children']['custom_field'] = [
        //     'component' => 'Magento_Ui/js/form/element/abstract',
        //     'config' => [
        //         'customScope' => 'shippingAddress.custom_attributes',
        //         'template' => 'ui/form/field',
        //         'elementTmpl' => 'ui/form/element/input',
        //         'options' => [],
        //         'id' => 'street-no'
        //     ],
        //     'dataScope' => 'shippingAddress.custom_attributes.custom_field',
        //     'label' => 'Street No',
        //     'provider' => 'checkoutProvider',
        //     'visible' => true,
        //     'validation' => [
        //         'validate-country' => true,
        //     ],
        //     'sortOrder' => 50,
        //     'id' => 'street-no'
        // ];
        // $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children']['postcode']['validation']['required-entry'] = true;
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children']['street']['children'][0]['validation']['validate-country'] = true;
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children']['postcode']['validation']['validate-postcode'] = true;
        // $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        // ['shippingAddress']['children']['shipping-address-fieldset']['children']['custom_field']['validation']['required-entry'] = true;

        return $jsLayout;
    }
    
}