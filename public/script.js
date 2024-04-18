//faire apparaitre le menu au click sur le burger
const menuToggle = document.querySelector('.menu-toggle')
const navMobile = document.querySelector('.nav-mobile')

menuToggle.addEventListener('click', () => {
    navMobile.classList.toggle('show')
})

//faire apparaitre le premier menu déroulant
const mobilItems = document.querySelectorAll('.mobile-item')
let previouslyOpenedItem = null

mobilItems.forEach(mobilItem => {
    mobilItem.addEventListener('click', (e) => {
        e.stopPropagation()
        const dropdown = mobilItem.querySelector('.dropdown')
        const isOpen = mobilItem.classList.contains('bold')

        //si un onglet à déjà été ouvert, on le ferme et on enleve la class=bold
        if (previouslyOpenedItem && previouslyOpenedItem !== mobilItem) {
            previouslyOpenedItem.classList.remove('bold');
            previouslyOpenedItem.querySelector('.dropdown').classList.remove('show1')
        }

        // Ouvrir ou fermer l'élément actuel
        mobilItem.classList.toggle('bold');
        dropdown.classList.toggle('show1');

        if (!isOpen) {
            previouslyOpenedItem = mobilItem
        } else {
            previouslyOpenedItem = null
        }
        // Retirer la classe bold des premiers menu-deroulant
        const dropdownItems = mobilItem.querySelectorAll('.dropdown .drop-item');
        dropdownItems.forEach(item => {
            item.classList.remove('bold');
        });        
    })
})

const mobils = document.querySelectorAll('.mobil')

mobils.forEach(mobil => {
    mobil.addEventListener('click', (e) => {
        e.stopPropagation()
        /*mobil.classList.add('bold')
        const sousMenu = mobil.querySelector('.sous-menu')        
        sousMenu.classList.toggle('show1')*/

        const sousMenus = mobil.querySelector('.sous-menu')
        const isOpen = mobil.classList.contains('bold')

        if (previouslyOpenedItem && previouslyOpenedItem !== mobil) {
            previouslyOpenedItem.classList.remove('bold');
            previouslyOpenedItem.querySelector('.sous-menu').classList.remove('show1')
        }

        // Ouvrir ou fermer l'élément actuel
        mobil.classList.toggle('bold');
        sousMenus.classList.toggle('show1');

        if (!isOpen) {
            previouslyOpenedItem = mobil
        } else {
            previouslyOpenedItem = null
        }
        // Retirer la classe bold des sous-menu
        const dropdownItems = mobil.querySelectorAll('.sous-menu .sous-sous-menu');
        dropdownItems.forEach(item => {
            item.classList.remove('bold');
        });

        console.log('ça passe')

    })
})

//faire apparaitre le dernier sous-sous-menu
const sousItems = document.querySelectorAll('.sous-item')

sousItems.forEach(sousItem => {
    sousItem.addEventListener('click', (e) => {
        e.stopPropagation()
        sousItem.classList.toggle('bold')
        const itemFond = sousItem.querySelector('.itemFond')
        itemFond.classList.toggle('show1')
    })
})

//fermer le menu mobile
const retourMenu = document.querySelector('.retour-menu')
retourMenu.addEventListener('click', () => {
    const navMobile = document.querySelector('.nav-mobile')
    navMobile.classList.remove('show')
})



//fonction pour afficher les messages défilants
const messages = document.querySelectorAll(".msg");
const container = document.querySelector(".container");
let index = 0;

function afficherMessage() {
    // Si l'index est supérieur ou égal au nombre total de messages, réinitialiser l'index à 0
    if (index >= messages.length) {
        index = 0;
    }
    container.innerHTML = "";
    const currentMessage = messages[index]
    container.appendChild(currentMessage)
    // Masquer tous les messages
    messages.forEach((msg,i) => {

        if(i === index){
            msg.style.opacity = 1;
            msg.style.transform = 'translateY(0)'; 
            console.log("ca passe!")
        }else{
            msg.style.opacity = 0;
            msg.style.transform = 'translateY(100%)'; 
        }        
    });
    
    // Passer au message suivant après 3 secondes
    index++;
    setTimeout(afficherMessage, 3000);
}
// Démarrer l'affichage des messages
afficherMessage();

//validation du formulaire

//recuperation du formulaire
const form = document.getElementById('form')

//mise en place du focus sur le 1er input
const nom = document.getElementById('nom')
if (nom) {
    nom.focus()
}

const prenom = document.getElementById('prenom')
const email = document.getElementById('email')
const obj = document.getElementById('obj')
const msg = document.getElementById('msg')

//fonction validation des champs textuels
function validateFieldText(champId, messageErreur){
    const champ = document.getElementById(champId)
    if (champ.value.trim()==='') {
        document.getElementById(messageErreur).innerText = messageErreur
        return false
    } else {
        document.getElementById(messageErreur).innerText = ''
        return true
    }
}

//fonction validation de l'email avec le bon format
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email)
}

//fonction validation
function validerFormulaire() {
    //si le formulaire est valide
    let formulaireValide = true

    const erreurNomSpan = document.getElementById('erreurNom')
    const defaultMessageErreurNom ="Veuillez rentrer votre nom"

    if(!validateFieldText('nom', 'erreurNom')) {
        formulaireValide = false
        erreurNomSpan.innerText = defaultMessageErreurNom
    }
    const erreurPrenomSpan = document.getElementById('erreurPrenom')
    const defaultMessageErreurPrenom ="Veuillez rentrer votre prénom"
    if(!validateFieldText('prenom', 'erreurPrenom')) {
        formulaireValide = false
        erreurPrenomSpan.innerText = defaultMessageErreurPrenom
    }
    const erreurObjSpan = document.getElementById('erreurObj')
    const defaultMessageErreurObj ="Veuillez rentrer la raison de votre message"
    if (!validateFieldText('obj', 'erreurObj')) {
        formulaireValide = false
        erreurObjSpan.innerText = defaultMessageErreurObj
    }
    const erreurMsgSpan = document.getElementById('erreurMsg')
    const defaultMessageErreurMsg ="Veuillez rentrer votre message"
    if (!validateFieldText('msg', 'erreurMsg')) {
        formulaireValide = false
        erreurMsgSpan.innerText = defaultMessageErreurMsg
    }

    const erreurEmailSpan = document.getElementById('erreurEmail')
    const defaultMessageErreurEmail ="Veuillez rentrer votre adresse email"
    const defaultMessageErreurEmailValide = "Veuillez rentrer une adresse email valide"


    if (!validateFieldText('email', 'erreurEmail')) {
        formulaireValide = false
        erreurEmailSpan.innerText = defaultMessageErreurEmail
    } else if (!validateEmail(email.value.trim())) {
        formulaireValide = false
        erreurEmailSpan.innerText = defaultMessageErreurEmailValide
    } else {
        erreurEmailSpan.innerText = ""
    }
        
    const tel = document.getElementById('tel')
    //verifie qu'un tel est bien rentré
    if (tel.value.trim() === '') {
        document.getElementById('erreurTel').innerText = "Veuillez rentrer votre numéro de téléphone"
        formulaireValide = false
    } else {
        document.getElementById('erreurTel').innerText = ''
    }
    return formulaireValide   
}

//mise en place d'un ecouteur pour la soumission du formulaire
form.addEventListener('submit', (e) => {
    e.preventDefault()
    if (validerFormulaire()) {
        console.log('Le formulaire est valide. Envoi des données...');
        form.submit(); // Soumettre le formulaire
    } else {
        // Le formulaire n'est pas valide, ne pas soumettre
        console.log('Le formulaire est invalide. Veuillez corriger les erreurs.')
    }
})


    

