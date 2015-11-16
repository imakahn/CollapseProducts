<?php
/**
 * Hooks for CollapseProducts extension
 *
 * @file
 * @ingroup Extensions
 */

class CollapseProductsHooks {

    public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ){
        $out->addModules('ext.collapseProducts.foo');
    }
}
