$(document).ready(function(){
	$('#affiche').hide();

    $('#importation a').click(function(event) {/* on attache 1 fct a levenement clic de tous les liens dans CAT*/
	
      event.preventDefault();   /* empecher le comportement par defaut du navigateur */
      var import_choix=$(this).attr('href');/* creation variable qui pointe sur l'element actuel (this) on recupère l attribut(attr) de cet elmt(href)  */
      var url='data_htm/' + import_choix + '.html';/* creation variable qui le chemin du fichier sur le serveur )  */
      $.get(url).done(function (data){/* methode ajax  qui recupère le donnée(data) */
        $('#affiche').html(data); /*on affiche la donnée(data) dans le main*/
      });
    });    
    
});