(function($){
	"use strict";

	CherryJsCore.utilites.namespace('admin_theme_script');
	CherryJsCore.admin_theme_script = {
		init: function ( target ) {
			var self = this;
			if( CherryJsCore.status.document_ready ){
				self.render( target );
			}else{
				CherryJsCore.variable.$document.on('ready', self.render( target ) );
			}
		},
		render: function ( target ) {
		}
	}
	CherryJsCore.admin_theme_script.init( $( 'body' ) );
}(jQuery));
