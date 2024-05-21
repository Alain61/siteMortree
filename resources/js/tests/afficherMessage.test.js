// Importation des fonctions et variables nécessaires du fichier messages.js
import { afficherMessage, messages, container } from '../script';
// Importation des extensions Jest pour les tests DOM, fournissant des matchers supplémentaires comme toHaveTextContent
import '@testing-library/jest-dom/extend-expect';

// Utilisation de fake timers de Jest pour contrôler et manipuler le temps
jest.useFakeTimers();

describe('afficherMessage', () => {
    // Avant chaque test, initialiser le DOM pour s'assurer que chaque test commence dans un état propre
    beforeEach(() => {
        // Définir le contenu HTML du document avec une div container et trois messages
        document.body.innerHTML = `
            <div class="container"></div>
            <div class="msg">Message 1</div>
            <div class="msg">Message 2</div>
            <div class="msg">Message 3</div>
        `;

        // Re-initialisation des variables messages et container après la modification du DOM
        const msgs = document.querySelectorAll(".msg");
        const cont = document.querySelector(".container");

        // Simuler l'état initial des messages, tous cachés
        for (let i = 0; i < msgs.length; i++) {
            msgs[i].style.opacity = 0;
            msgs[i].style.transform = 'translateY(100%)';
        }
    });

    // Test pour vérifier que le premier message est affiché initialement
    test('should display the first message initially', () => {
        // Appel de la fonction afficherMessage pour déclencher l'affichage du premier message
        afficherMessage();
        // Vérifier que le container contient le texte du premier message
        expect(container).toHaveTextContent('Message 1');
        // Vérifier que le style du premier message est correct (visible et positionné correctement)
        expect(messages[0].style.opacity).toBe('1');
        expect(messages[0].style.transform).toBe('translateY(0)');
    });

    // Test pour vérifier que les messages défilent correctement
    test('should cycle through messages', () => {
        // Appel de la fonction afficherMessage pour déclencher l'affichage du premier message
        afficherMessage();
        // Avancer le temps de 3000 ms pour passer au deuxième message
        jest.advanceTimersByTime(3000);
        // Vérifier que le container contient le texte du deuxième message
        expect(container).toHaveTextContent('Message 2');
        // Vérifier que le style du deuxième message est correct (visible et positionné correctement)
        expect(messages[1].style.opacity).toBe('1');
        expect(messages[1].style.transform).toBe('translateY(0)');

        // Avancer le temps de 3000 ms pour passer au troisième message
        jest.advanceTimersByTime(3000);
        // Vérifier que le container contient le texte du troisième message
        expect(container).toHaveTextContent('Message 3');
        // Vérifier que le style du troisième message est correct (visible et positionné correctement)
        expect(messages[2].style.opacity).toBe('1');
        expect(messages[2].style.transform).toBe('translateY(0)');

        // Avancer le temps de 3000 ms pour revenir au premier message
        jest.advanceTimersByTime(3000);
        // Vérifier que le container contient de nouveau le texte du premier message
        expect(container).toHaveTextContent('Message 1');
        // Vérifier que le style du premier message est correct (visible et positionné correctement)
        expect(messages[0].style.opacity).toBe('1');
        expect(messages[0].style.transform).toBe('translateY(0)');
    });
});
