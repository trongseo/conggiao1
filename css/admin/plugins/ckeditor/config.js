/**
 * @license Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For the complete reference:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ] },
		{ name: 'styles' },
		{ name: 'colors' }
		//{ name: 'about' }
	];

	// Remove some buttons, provided by the standard plugins, which we don't
	// need to have in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';
        config.filebrowserBrowseUrl = 'http://demo.congtythietkewebsites.com/site-demo/ckeditor/ckfinder/ckfinder.html';
        config.filebrowserImageBrowseUrl = 'http://demo.congtythietkewebsites.com/site-demo/ckeditor/ckfinder/ckfinder.html?type=Images';
        config.filebrowserFlashBrowseUrl = 'http://demo.congtythietkewebsites.com/site-demo/ckeditor/ckfinder/ckfinder.html?type=Flash';
        config.filebrowserUploadUrl = 'http://demo.congtythietkewebsites.com/site-demo/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
        config.filebrowserImageUploadUrl = 'http://demo.congtythietkewebsites.com/site-demo/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
        config.filebrowserFlashUploadUrl = 'http://demo.congtythietkewebsites.com/site-demo/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};