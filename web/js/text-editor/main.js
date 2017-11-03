function post(content){
    // On crée un champ input
    var hiddenField = document.createElement("input");
    // On spécifie les attributs du input
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "content");
    hiddenField.setAttribute("value", content);
    // On implante le formulaire dans le corp HTML puis on l'envoie
    document.forms['form_edition_text'].appendChild(hiddenField);
    document.forms['form_edition_text'].submit();
}

$(document).ready(function(){
  // On indique que le main est chargé
  console.log('main.js chargé');
  // Au clic du boutton, on envoie la variable initialisé dans la fonction 'post'
  $('#submit-text-editor').on('click', function(){
    var contenu = $("#text-content").html();
    // var contenu = document.getElementById('text-content');
    console.log(contenu);
    post(contenu);
  })

})
