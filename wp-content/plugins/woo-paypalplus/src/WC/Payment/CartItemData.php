<?php

namespace WCPayPalPlus\WC\Payment;

/**
 * Class CartItemData
 *
 * @package WCPayPalPlus\WC\Payment
 */
/**
 * Class CartItemData
 *
 * @package WCPayPalPlus\WC\Payment
 */
class CartItemData implements OrderItemDataProvider {

	use OrderDataProcessor;

	/**
	 * Item data.
	 *
	 * @var array
	 */
	private $data;

	/**
	 * CartItemData constructor.
	 *
	 * @param array $data Item data.
	 *
	 * @throws \Exception
	 */
	public function __construct( array $data ) {

		if ( ! isset( $data['product_id'] ) ) {
			throw new \Exception( 'Missing Data' );
		}
		$this->data             = $data;
		$this->data['subtotal'] = $this->data['line_subtotal'];

	}

	/**
	 * Returns the item price.
	 *
	 * @return float
	 */
	public function get_price() {

		return $this->format( $this->data['line_subtotal'] / $this->get_quantity() );
	}

	/**
	 * Returns the item quantity.
	 *
	 * @return int
	 */
	public function get_quantity() {

		return intval( $this->data['quantity'] );
	}

	/**
	 * Returns the item name.
	 *
	 * @return string
	 */
	public function get_name() {

		$product = $this->get_product();

		return $product->get_title();
	}

	/**
	 * Returns the WC_Product associated with the item.
	 *
	 * @return \WC_Product
	 */
	protected function get_product() {

		return wc_get_product( $this->data['product_id'] );
	}

	/**
	 * Returns the Product SKU.
	 *
	 * @return string|null
	 */
	public function get_sku() {

		$product = $this->get_product();
		$sku     = $product->get_sku();
		if ( $product instanceof \WC_Product_Variation ) {
			$sku = $product->parent->get_sku();
		}

		return $sku;
	}
}
