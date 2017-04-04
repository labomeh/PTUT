/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.contentsCss = [ "{{ asset('bundles/ptutplatform/css/bootstrap.min.css') }}", "{{ asset('bundles/ptutplatform/css/font-awesome.min.css') }}" , "{{ asset('bundles/ptutplatform/css/prettyPhoto.css') }}" , "{{ asset('bundles/ptutplatform/css/animate.css') }}" , "{{ asset('bundles/ptutplatform/css/main.css') }}" ];
};
