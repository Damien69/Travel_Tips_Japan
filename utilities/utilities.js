'use strict';   // Mode strict du JavaScript

// Transformer un tableau en liste HTML

function displayArrayAsList(tableau) {

  if (Array.isArray(tableau)) {
    document.write('<ul>');
    for (var i = 0; i < tableau.length; i++) {
      document.write('<li>');
      document.write(tableau[i]);
    }
  } else {
    document.write(`<br>Erreur ce n'est pas un tableau`);
  }
}

function getRandomInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function installEventHandler(selector, type, eventHandler) {
  var domObject;

  // Récupération du premier objet DOM correspondant au sélecteur.
  domObject = document.querySelector(selector);

  // Installation d'un gestionnaire d'évènement sur cet objet DOM.
  domObject.addEventListener(type, eventHandler);
}

// Recherche du bouton et du rectangle dans l'arbre DOM.
button    = document.getElementById('toggle-rectangle');
rectangle = document.querySelector('.rectangle');


// Installation d'un gestionnaire d'évènement clic sur le bouton.
button.addEventListener('click', onClickButton);

// Installation de deux gestionnaires d'évènements de survol du rectangle à la souris.
rectangle.addEventListener('mouseout', onMouseOutRectangle);
rectangle.addEventListener('mouseover', onMouseOverRectangle);

// Installation d'un gestionnaire d'évènement double clic sur le rectangle.
rectangle.addEventListener('dblclick', onDoubleClickRectangle);
