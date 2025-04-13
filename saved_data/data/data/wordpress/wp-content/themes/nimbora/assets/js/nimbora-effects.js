//Scroll Animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      // console.log(entry);
      if (entry.isIntersecting) {
        entry.target.classList.add('scrollup-show-item');
        observer.unobserve(entry.target);
      } else {
        entry.target.classList.remove('scrollup-show-item');
      }
    });
  });

  const hiddenElements = document.querySelectorAll('.scrollup-hidden-item');
  hiddenElements.forEach((el) => observer.observe(el));

  const observerRight = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('scrollright-show-item');
        observerRight.unobserve(entry.target);
      } else {
        entry.target.classList.remove('scrollright-show-item');
      }
    });
  });
  
  // Seleciona os elementos que devem aparecer da direita para a esquerda
  const rightHiddenElements = document.querySelectorAll('.scrollright-hidden-item');
  rightHiddenElements.forEach((el) => observerRight.observe(el));
  
  const observerLeft = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('scrollleft-show-item');
        observerLeft.unobserve(entry.target);
      } else {
        entry.target.classList.remove('scrollleft-show-item');
      }
    });
  });
  
  // Seleciona os elementos que devem aparecer da esquerda para a direita
  const leftHiddenElements = document.querySelectorAll('.scrollleft-hidden-item');
  leftHiddenElements.forEach((el) => observerLeft.observe(el));
  
 

