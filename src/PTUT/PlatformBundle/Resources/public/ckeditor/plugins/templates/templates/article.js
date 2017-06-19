CKEDITOR.addTemplates( 'default',
{
	imagesPath : CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'templates' ) + 'templates/images/' ),

	templates :
		[
			{
				title: 'Article par défaut',
				image: 'article1.gif',
				description: 'Article de base à modifier.',
				html:
                                '<div class="blog">'+
                                    
                                                '<div class="blog-item">'+
                                                    '<img class="img-responsive img-blog" src=" " alt="Image à remplacer" />'+
                                                        '<div class="blog-content">'+
                                                            '<h3>Titre de l\'article</h3>'+
                                                            '<p>Paragraphe</p>'+
                                                        '</div>'+
                                                '</div>'+

                                '</div>'
			}
		]
});