"use strict";

// producteurs.items.forEach(function (item) {
//     console.log(item.raisonSociale + ' ' + item.siret);
// });
let mapInstance;
let markerInstance;
let popupInstance;
let genereProducteurs = function (prods) {
    liste.innerHTML = "";
    prods.items.forEach(function (prod) {
        let div = document.createElement('div');
        div.classList.add('producteur');
        div.dataset.siret = prod.siret;
        div.onclick = function () {
            console.log(this.dataset.siret);
            if (this.dataset.siret == "null") {
                alert("Numéro de SIRET inconnu");
            }
            else {
                fetch('https://opendata.agencebio.org/api/gouv/operateurs?siret=' + this.dataset.siret)
                    .then(function (reponseHttp) {
                        return reponseHttp.json();
                    })
                    .then(function (jsonData) {
                        console.log(jsonData);
                        details.innerHTML = "";

                        let pRaisonProd = document.createElement('p');
                        pRaisonProd.textContent = prod.raisonSociale;

                        let pSiretProd = document.createElement('p');
                        pSiretProd.textContent = div.dataset.siret;

                        let pUpdate = document.createElement('p');
                        pUpdate.textContent = prod.dateMaj;

                        let pListeProd = document.createElement('p');
                        let arrayProductions = [];
                        prod.productions.forEach(function (production) {
                            arrayProductions.push(production.nom)

                        });
                        pListeProd.innerHTML = arrayProductions.join('<br/>');

                        if (mapInstance && mapInstance.remove) {
                            mapInstance.off();
                            mapInstance.remove();
                        }
                        mapInstance = L.map('map').setView([prod.adressesOperateurs[0].lat, prod.adressesOperateurs[0].long], 9);
                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                        }).addTo(mapInstance);
                        markerInstance = L.marker([prod.adressesOperateurs[0].lat, prod.adressesOperateurs[0].long]).addTo(mapInstance);
                        popupInstance = L.popup()
                            .setLatLng([prod.adressesOperateurs[0].lat, prod.adressesOperateurs[0].long])
                            .setContent(prod.raisonSociale)
                            .openOn(mapInstance);

                        details.prepend(pRaisonProd);
                        details.append(pSiretProd);
                        details.append(pUpdate);
                        details.append(pListeProd);


                    })
                    .catch(function (erreur) {
                        console.log(erreur);
                    });
            }
        }

        let pRaisonSociale = document.createElement('p');
        pRaisonSociale.textContent = prod.raisonSociale;

        let pCPVille = document.createElement('p');
        pCPVille.textContent = (prod.adressesOperateurs[0].codePostal + ' ' + prod.adressesOperateurs[0].ville);

        let pActivite = document.createElement('p');
        let arrayActivites = [];
        prod.activites.forEach(function (activites) {
            arrayActivites.push(activites.nom);
        });

        pActivite.textContent = arrayActivites.join(', ');

        liste.prepend(div);
        div.append(pRaisonSociale);
        div.append(pCPVille);
        div.append(pActivite);
    });

}

departements.onchange = function () {
    console.log(departements.value);
    attente.style.display = 'block';

    fetch('https://opendata.agencebio.org/api/gouv/operateurs?activite=Production&departements=' + departements.value)
        .then(function (reponseHttp) {
            return reponseHttp.json();
        })
        .then(function (jsonData) {
            if (jsonData.nbTotal == 0) {
                alert('Aucun producteur enregistré dans ce département !');
                attente.style.display = 'none';
            }
            else {
                attente.style.display = 'none';
                genereProducteurs(jsonData);

                // console.log(jsonData);
            }

        })
        .catch(function (erreur) {
            console.log(erreur);
        });
}

