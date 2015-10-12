$(document).ready(function(){
      var url='../server/php/files'+FB_20140901_16+'.jpg';/* creation variable qui le chemin du fichier sur le serveur )  */
      $.get(url).done(function (data){/* methode ajax  qui recupère le donnée(data) */
        $('.titre-prod-text').html(data); /*on affiche la donnée(data) dans le main*/
      });
    });    
    