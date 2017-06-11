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
                    '<h3>'+
					'<div class="blog-item">'+
                    '<img class="img-responsive img-blog" src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg" alt="Image" />'+
                    'Type the title here' +
                    '</h3>' +  
                    '<p>' +
                    'Type the text here' +
                    '</p>'+
                    '</div>'
			}
		]
});