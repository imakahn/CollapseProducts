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

    public static function addJSVariables( &$vars ){
        global $wgCollapseProductsSections;

        $vars['wgCollapseProductsSections'] = $wgCollapseProductsSections;

        return true;
    }

}
