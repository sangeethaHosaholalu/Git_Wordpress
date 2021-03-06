<?php
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       2.2.7
 */

if (!class_exists('Kirki_Field_Toggle')) {

    /**
     * Field overrides.
     */
    class Kirki_Field_Toggle extends Kirki_Field_Checkbox
    {

        /**
         * Sets the control type.
         *
         * @access protected
         */
        protected function set_type()
        {

            $this->type = 'kirki-toggle';

        }
    }
}
