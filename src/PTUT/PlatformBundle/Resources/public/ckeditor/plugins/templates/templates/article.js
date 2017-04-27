CKEDITOR.addTemplates( 'default',
{
	imagesPath : CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'templates' ) + 'templates/images/' ),

	templates :
		[
			{
				title: 'Article 1',
				image: 'article1.gif',
				description: 'Article de base en deux parties.',
				html:
					'<section id="article">'+
				        '<div class="row">'+
                            '<div class="container-fluid col-sm-offset-1 col-md-offset-1 col-lg-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-8">'+
                                '<h1>TITRE DE L\'ARTICLE</h1>'+
                                '<h2>SOUS-TITRE 1</h2>'+
                                '<p>Texte de l\'article 1</p>'+
                                '<h2>SOUS-TITRE 2</h2>'+
                                '<p>Texte de l\'article 2</p>'+
                            '</div>'+
                        '</div>'+
                    '</section>'
			},
			{
				title: 'Article 2',
				image: 'article2.gif',
				description: 'Article de base en trois parties.',
				html:
					'<section id="article">'+
				        '<div class="row">'+
                            '<div class="container-fluid col-sm-offset-1 col-md-offset-1 col-lg-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-8">'+
                                '<h1>TITRE DE L\'ARTICLE</h1>'+
                                '<h2>SOUS-TITRE 1</h2>'+
                                '<p>Texte de l\'article 1</p>'+
                                '<h2>SOUS-TITRE 2</h2>'+
                                '<p>Texte de l\'article 2</p>'+
                                '<h2>SOUS-TITRE 3</h2>'+
                                '<p>Texte de l\'article 3</p>'+
                            '</div>'+
                        '</div>'+
                    '</section>'
			}
		]
});