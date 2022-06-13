function l (arg) {
    console.log(arg);
}


$(document).ready(function() {
    $("#selectEmploye").change(function() {
        // je stocke la value de l'option selectionnées dans une variable
        let id_employe = $(this).val();
        // l(id_employe);
        $.ajax({
            url: "recuperer_detail_employes.php",
            type: "GET",
            dataType: "json",
            data: {monIdEmploye: id_employe}
        }).done(function(data) {
            
            $("#id_employes").html(data.id_employes);
            $("#prenom").html(data.prenom);
            $("#nom").html(data.nom);
            $("#sexe").html(data.sexe);
            $("#service").html(data.service);
            $("#date_embauche").html(data.date_embauche);
            $("#salaire").html(data.salaire);

            for (var i in data) {
                l(data[i]);
                $("")
            }

            
        });
    })
})

