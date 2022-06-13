$(document).ready(function () {
  $("#changeText").click(function () {
    // Recuperer le texte dans le fichier txt, ajax = recuperation, done = action a faire
    $.ajax({
      // J'appelle l'url sur laquelle je veux récuperer une info :
      url: "ajax_info.txt",
      // Je précise le type de requete :
      type: "GET",
      // Je précise le type de données :
      dataType: "text"
    }).done(function (data) {
      //   document.getElementsByTagName("h1")[0].innerHTML = data;
      $("h1").text(data);
    });
  });
});
