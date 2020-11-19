let slideIndex = 0;                                                    //declare var est la met  = 0 
showSlides();                                   //apelle la fonction qu'on apelle juste après 

function showSlides() {                           //cree la fonctions apeller juste en haut 
  let i;                                         //declare un variable i 
  let slides = document.getElementsByClassName("rotateShoes");             // apelle la class dans les html 
  for (i = 0; i < slides.length; i++) {                                //on initialise la boucle 
  slides[i]. style.display = "none";                                   //affiche la slide i et cache les autres       
  }
  slideIndex++;                                                     //chaque tour le slide initialiser en haut prend +1
  if (slideIndex > slides.length) {slideIndex = 1}                 //si slideindex > que la grandeurs du tableau remet au debut à slideIndex = 1 
  slides[slideIndex -1].style.display = "block";                  //slides -1 pour revenir index=0 , affiche l'immage = à l'index 
  setTimeout(showSlides, 120);                       /* vitesse du slide 1000 = 1 seconde */ 
}

