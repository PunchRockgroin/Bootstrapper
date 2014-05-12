<?php namespace Cornford\Bootstrapper\Contracts;

interface FormableInterface {

	/**
	 * Generate a hidden field with the current CSRF token.
	 */
	public function token();

	/**
	 * Create a form text field.
	 *
	 * @param string  $name
	 * @param string  $label
	 * @param boolean $errors
	 * @param array   $options
	 */
	public function text($name, $label = null, $errors = false, array $options = array());

	/**
	 * Create a form password field.
	 *
	 * @param string  $name
	 * @param string  $label
	 * @param boolean $errors
	 * @param array   $options
	 */
	public function password($name, $label = null, $errors = false, array $options = array());

	/**
	 * Create a form email field.
	 *
	 * @param string  $name
	 * @param string  $label
	 * @param boolean $errors
	 * @param array   $options
	 */
	public function email($name, $label = null, $errors = false, array $options = array());

	/**
	 * Create a form file field.
	 *
	 * @param string  $name
	 * @param string  $label
	 * @param boolean $errors
	 * @param array   $options
	 */
	public function file($name, $label = null, $errors = false, array $options = array());

	/**
	 * Create a form textarea field.
	 *
	 * @param string  $name
	 * @param string  $label
	 * @param boolean $errors
	 * @param array   $options
	 */
	public function textarea($name, $label = null, $errors = false, array $options = array());

	/**
	 * Create a form select field.
	 *
	 * @param string $name
	 * @param string $label
	 * @param array  $list
	 * @param string $selected
	 * @param array  $options
	 */
	public function select($name, $label = null, array $list = array(), $selected = null, array $options = array());

	/**
	 * Create a form checkbox field.
	 *
	 * @param string $name
	 * @param string $label
	 * @param string $value
	 * @param string $checked
	 * @param array  $options
	 */
	public function checkbox($name, $label = null, $value = 1, $checked = null, array $options = array());

	/**
	 * Create a form radio field.
	 *
	 * @param string $name
	 * @param string $label
	 * @param string $value
	 * @param string $checked
	 * @param array  $options
	 */
	public function radio($name, $label = null, $value = null, $checked = null, array $options = array());

	/**
	 * Create a form submit button.
	 *
	 * @param string $value
	 * @param array  $attributes
	 */
	public function submit($value, array $attributes = array());

	/**
	 * Create a form button.
	 *
	 * @param string $value
	 * @param array  $attributes
	 */
	public function button($value, array $attributes = array());

	/**
	 * Create a form reset button.
	 *
	 * @param string $value
	 * @param array  $attributes
	 */
	public function reset($value, array $attributes = array());

}