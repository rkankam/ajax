function l(arg) {
	console.log(arg);
}

$(document).ready(function () {
	$("#selectEmploye").change(function () {
		// je stocke la value de l'option selectionnées dans une variable
		let id_employe = $(this).val();
		// l(id_employe);
		$.ajax({
			url: "recuperer_detail_employes.php",
			type: "GET",
			dataType: "json",
			data: { monIdEmploye: id_employe },
		}).done(function (data) {
			for (var i in data) {
				document.getElementById(i).innerHTML = data[i];
			}
		});
	});
});
