function post(content){
    // On set le method à 'post' si il est pas assigné
    method = "post";
    // On crée un formulaire
    var form = document.createElement("form");
    // On attribut les spécificité du formulaire
    form.setAttribute("method", "post");
    // On crée un champ input
    var hiddenField = document.createElement("input");
    // On spécifie les attributs du input
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "content");
    hiddenField.setAttribute("value", content);
    // On implante le formulaire dans le corp HTML puis on l'envoie
    form.appendChild(hiddenField);
    document.body.appendChild(form);
    form.submit();
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
