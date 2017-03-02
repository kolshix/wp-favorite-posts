<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/wp-favorite-posts>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class WPFavoritePostsAdminPageFramework_Form_View___Attribute_SectionTableBody extends WPFavoritePostsAdminPageFramework_Form_View___Attribute_Base {
    public $sContext = 'section_table_content';
    protected function _getAttributes() {
        $_sCollapsibleType = $this->getElement($this->aArguments, array('collapsible', 'type'), 'box');
        return array('class' => $this->getAOrB($this->aArguments['_is_collapsible'], 'wp-favorite-posts-collapsible-section-content' . ' ' . 'wp-favorite-posts-collapsible-content' . ' ' . 'accordion-section-content' . ' ' . 'wp-favorite-posts-collapsible-content-type-' . $_sCollapsibleType, null),);
    }
}
