"use strict";

function scrollToElement(id) {
    const element = document.getElementById(id);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}

let map = L.map('map').setView([44.1606094, 1.5530388], 15);

let modal = document.getElementById('exampleModal');
modal.addEventListener('shown.bs.modal', function () {
    map.invalidateSize();
})

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

let marker = L.marker([44.1606094, 1.5530388]).addTo(map);

function changeMapLocation(lat, lng) {
    map.setView([lat, lng], 15);
}

function changeMarkerLocation(lat, lng, adr) {
    let newLatLng = new L.LatLng(lat, lng);
    marker.setLatLng(newLatLng);
    marker.bindPopup(adr);
}

certif1.onclick = function () {
    let divModal = document.createElement('div');
    divModal.className = 'modal fade';
    divModal.id = 'exampleModal';
    divModal.tabIndex = -1;
    divModal.setAttribute('aria-labelledby', 'exampleModalLabel');
    divModal.setAttribute('aria-hidden', 'true');

    let divModalDialog = document.createElement('div');
    divModalDialog.className = 'modal-dialog modal-lg';

    let divModalContent = document.createElement('div');
    divModalContent.className = 'modal-content';

    let divModalHeader = document.createElement('div');
    divModalHeader.className = 'modal-header';

    let headerModalTitle = document.createElement('h1');
    headerModalTitle.className = 'modal-title fs-5';
    headerModalTitle.id = 'exampleModalLabel';
    headerModalTitle.textContent = 'Diplôme de la formation SecNum Académie';

    let buttonClose = document.createElement('button');
    buttonClose.type = 'button';
    buttonClose.className = 'btn-close';
    buttonClose.setAttribute('data-bs-dismiss', 'modal');
    buttonClose.setAttribute('aria-label', 'Close');

    let divModalBody = document.createElement('div');
    divModalBody.className = 'modal-body';

    let pModalBody = document.createElement('p');
    pModalBody.textContent = 'Diplôme obtenu lors de mon BTS SIO';

    let divImgCertif = document.createElement('div');
    divImgCertif.id = 'imgCertif';

    let imgCertifSecNum = document.createElement('img');
    imgCertifSecNum.className = 'img-fluid';
    imgCertifSecNum.src = 'img/Diplôme SecNum.png';

    document.body.prepend(divModal);
    divModal.append(divModalDialog);
    divModalDialog.append(divModalContent);
    divModalContent.append(divModalHeader);
    divModalContent.append(divModalBody);
    divModalHeader.append(headerModalTitle);
    divModalHeader.append(buttonClose);
    divModalBody.append(pModalBody);
    divModalBody.append(divImgCertif);
    divImgCertif.append(imgCertifSecNum);

    let modalCertif = new bootstrap.Modal(divModal);
    modalCertif.show();

    divModal.addEventListener('hidden.bs.modal', function () {
        divModal.remove();
    });
};

certif2.onclick = function () {
    let divModal = document.createElement('div');
    divModal.className = 'modal fade';
    divModal.id = 'exampleModal';
    divModal.tabIndex = -1;
    divModal.setAttribute('aria-labelledby', 'exampleModalLabel');
    divModal.setAttribute('aria-hidden', 'true');

    let divModalDialog = document.createElement('div');
    divModalDialog.className = 'modal-dialog modal-lg';

    let divModalContent = document.createElement('div');
    divModalContent.className = 'modal-content';

    let divModalHeader = document.createElement('div');
    divModalHeader.className = 'modal-header';

    let headerModalTitle = document.createElement('h1');
    headerModalTitle.className = 'modal-title fs-5';
    headerModalTitle.id = 'exampleModalLabel';
    headerModalTitle.textContent = 'Certification Pix';

    let buttonClose = document.createElement('button');
    buttonClose.type = 'button';
    buttonClose.className = 'btn-close';
    buttonClose.setAttribute('data-bs-dismiss', 'modal');
    buttonClose.setAttribute('aria-label', 'Close');

    let divModalBody = document.createElement('div');
    divModalBody.className = 'modal-body';

    let pModalBody = document.createElement('p');
    pModalBody.textContent = 'Certification obtenue lors de mon BTS SIO';

    let divImgCertif = document.createElement('div');
    divImgCertif.id = 'imgCertif';

    let imgCertifSecNum = document.createElement('img');
    imgCertifSecNum.className = 'img-fluid';
    imgCertifSecNum.src = 'img/Attestation Pix.png';

    document.body.prepend(divModal);
    divModal.append(divModalDialog);
    divModalDialog.append(divModalContent);
    divModalContent.append(divModalHeader);
    divModalContent.append(divModalBody);
    divModalHeader.append(headerModalTitle);
    divModalHeader.append(buttonClose);
    divModalBody.append(pModalBody);
    divModalBody.append(divImgCertif);
    divImgCertif.append(imgCertifSecNum);

    let modalCertif = new bootstrap.Modal(divModal);
    modalCertif.show();

    divModal.addEventListener('hidden.bs.modal', function () {
        divModal.remove();
    });
}

document.querySelectorAll('.cardApp').forEach((card, index) => {
    card.addEventListener('click', () => {
        const moreInfo = card.querySelector('.moreInfo');
        const infoText = card.querySelector('#pMoreInfo');
        if (moreInfo.style.display === 'none' || moreInfo.style.display === '') {
            moreInfo.style.display = 'block';
            infoText.textContent = 'Cliquez encore pour réduire';
        } else {
            moreInfo.style.display = 'none';
            infoText.textContent = 'Cliquez pour avoir plus d\'informations';
        }
    });
});

rapportTermButton.onclick = function () {
    let divModal = document.createElement('div');
    divModal.className = 'modal fade';
    divModal.id = 'exampleModal';
    divModal.tabIndex = -1;
    divModal.setAttribute('aria-labelledby', 'exampleModalLabel');
    divModal.setAttribute('aria-hidden', 'true');

    let divModalDialog = document.createElement('div');
    divModalDialog.className = 'modal-dialog modal-lg';

    let divModalContent = document.createElement('div');
    divModalContent.className = 'modal-content';

    let divModalHeader = document.createElement('div');
    divModalHeader.className = 'modal-header';

    let headerModalTitle = document.createElement('h1');
    headerModalTitle.className = 'modal-title fs-5';
    headerModalTitle.id = 'exampleModalLabel';
    headerModalTitle.textContent = 'Rapports de Stage pour de l\'entreprise IF2M';

    let buttonClose = document.createElement('button');
    buttonClose.type = 'button';
    buttonClose.className = 'btn-close';
    buttonClose.setAttribute('data-bs-dismiss', 'modal');
    buttonClose.setAttribute('aria-label', 'Close');

    let divModalBody = document.createElement('div');
    divModalBody.className = 'modal-body';

    let pModalBody = document.createElement('p');
    pModalBody.textContent = 'Voici mes rapports de stage de terminale et de première année de BTS SIO';

    let divButtonsRapport = document.createElement('div');
    divButtonsRapport.className = 'buttonContainer';

    let buttonRapportTerminale = document.createElement('a');
    buttonRapportTerminale.className = 'button';
    buttonRapportTerminale.href = 'pdf/Rapport_de_Stage_Annee_de_2022-2023_-_Mathis_PEROT.pdf';
    buttonRapportTerminale.target = '_blank';
    buttonRapportTerminale.textContent = 'Rapport de stage de terminale';

    let buttonRapportBTS1 = document.createElement('a');
    buttonRapportBTS1.className = 'button';
    buttonRapportBTS1.href = 'pdf/Rapport Stage IF2M BTS1 - Mathis PEROT.pdf';
    buttonRapportBTS1.target = '_blank';
    buttonRapportBTS1.textContent = 'Rapport de stage de première année de BTS SIO';

    document.body.prepend(divModal);
    divModal.append(divModalDialog);
    divModalDialog.append(divModalContent);
    divModalContent.append(divModalHeader);
    divModalContent.append(divModalBody);
    divModalHeader.append(headerModalTitle);
    divModalHeader.append(buttonClose);
    divModalBody.append(pModalBody);
    divModalBody.append(divButtonsRapport);
    divButtonsRapport.append(buttonRapportTerminale);
    divButtonsRapport.append(buttonRapportBTS1);

    let modalCertif = new bootstrap.Modal(divModal);
    modalCertif.show();

    divModal.addEventListener('hidden.bs.modal', function () {
        divModal.remove();
    });
};

ap4proj.onclick = function () {
    let divModal = document.createElement('div');
    divModal.className = 'modal fade';
    divModal.id = 'exampleModal';
    divModal.tabIndex = -1;
    divModal.setAttribute('aria-labelledby', 'exampleModalLabel');
    divModal.setAttribute('aria-hidden', 'true');

    let divModalDialog = document.createElement('div');
    divModalDialog.className = 'modal-dialog modal-lg';

    let divModalContent = document.createElement('div');
    divModalContent.className = 'modal-content';

    let divModalHeader = document.createElement('div');
    divModalHeader.className = 'modal-header';

    let headerModalTitle = document.createElement('h1');
    headerModalTitle.className = 'modal-title fs-5';
    headerModalTitle.id = 'exampleModalLabel';
    headerModalTitle.textContent = 'AP 4 - Client lourd de gestion d\'utilisateurs en utilisant les opérations du CRUD et la bibliothèque Swing.';

    let divModalBody = document.createElement('div');
    divModalBody.className = 'modal-body';

    let headerSelect = document.createElement('h2');
    headerSelect.className = 'modal-title fs-5';
    headerSelect.textContent = 'Liste des utilisateurs (Select) : ';

    let imgSelect = document.createElement('img');
    imgSelect.className = 'img-fluid';
    imgSelect.src = 'img/AP 4/select.png';

    let headerAdd = document.createElement('h2');
    headerAdd.className = 'modal-title fs-5';
    headerAdd.textContent = 'Ajout d\'un utilisateur (Insert) : ';

    let imgAdd = document.createElement('img');
    imgAdd.className = 'img-fluid';
    imgAdd.src = 'img/AP 4/ajout.gif';

    let headerUpdate = document.createElement('h2');
    headerUpdate.className = 'modal-title fs-5';
    headerUpdate.textContent = 'Modification d\'un utilisateur sélectionné (Update) : ';

    let imgUpdate = document.createElement('img');
    imgUpdate.className = 'img-fluid';
    imgUpdate.src = 'img/AP 4/update.gif';

    let headerDelete = document.createElement('h2');
    headerDelete.className = 'modal-title fs-5';
    headerDelete.textContent = 'Suppression de l\'utilisateur sélectionné (Delete) : ';

    let imgDelete = document.createElement('img');
    imgDelete.className = 'img-fluid';
    imgDelete.src = 'img/AP 4/delete.gif';

    document.body.prepend(divModal);
    divModal.append(divModalDialog);
    divModalDialog.append(divModalContent);
    divModalContent.append(divModalHeader);
    divModalContent.append(divModalBody);
    divModalHeader.append(headerModalTitle);
    divModalBody.append(headerSelect);
    divModalBody.append(imgSelect);
    divModalBody.append(headerAdd);
    divModalBody.append(imgAdd);
    divModalBody.append(headerUpdate);
    divModalBody.append(imgUpdate);
    divModalBody.append(headerDelete);
    divModalBody.append(imgDelete);

    let modalCertif = new bootstrap.Modal(divModal);
    modalCertif.show();

    divModal.addEventListener('hidden.bs.modal', function () {
        divModal.remove();
    });
}

/* Event listener permettant que le menu d'oeuvres marche
*/

document.addEventListener('DOMContentLoaded', function () {
    // Sélection de tous les liens du menu
    const links = document.querySelectorAll('.linkProjet');

    links.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien

            // Récupère la classe spécifique de la catégorie (la deuxième classe du lien)
            const categorie = this.classList[1];

            // Parcours tous les éléments avec la classe 'content'
            document.querySelectorAll('.content').forEach(item => {
                if (categorie === 'allProjects') {
                    // Si le bouton "Tout mes projets" est cliqué, on affiche tous les éléments
                    item.style.display = 'block';
                } else {
                    // Affiche l'élément s'il appartient à la catégorie sélectionnée, sinon le cache
                    if (item.classList.contains(categorie)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
        });
    });
});

/* Event listener permettant d'éviter que le modal s'ouvre
*  quand on clique sur le bouton pour voir la doc.
*/
document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const btn     = document.getElementById('toggle-sidebar');
    const main    = document.querySelector('.main');
  
    btn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
      // Change l’icône
      btn.textContent = sidebar.classList.contains('collapsed') ? '☰' : '×';
    });
  });

document.addEventListener('DOMContentLoaded', function () {

    let links = document.querySelectorAll('.buttonLink'); // Récupère tout les éléments dans le DOM ayant la classe buttonLink.

    links.forEach(link => {
        link.addEventListener('click', function (event) {
            event.stopPropagation(); // Stoppe la propagation de l'événement.
        });
    });
});
