document.addEventListener('DOMContentLoaded', function() {
const scrollTopBtn = document.createElement('div');
scrollTopBtn.id = 'scrollTopBtn';
scrollTopBtn.innerHTML = '↑';
document.body.appendChild(scrollTopBtn);

const style = document.createElement('style');
style.textContent = `
  #scrollTopBtn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background-color: var(--wp--preset--color--contrast);
    color: var(--wp--preset--color--base);
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s, visibility 0.3s;
    z-index: 999;
  }
  #scrollTopBtn.show {
    opacity: 1;
    visibility: visible;
  }
  @media only screen and (max-width: 769px) {
    #scrollTopBtn {
      display: none;
    }
  }
`;
document.head.appendChild(style);

window.addEventListener("scroll", function() {
  if (window.scrollY > 200) {
    scrollTopBtn.classList.add("show");
  } else {
    scrollTopBtn.classList.remove("show");
  }
});

scrollTopBtn.addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
});