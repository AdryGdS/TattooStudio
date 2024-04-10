/*==================== MENU ====================*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

  // VALIDANDO AS VARIÁVEIS
  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      // Adiciona a classe mostra-menu a tag da div com a classe nav__menu
      nav.classList.toggle('show-menu')
    })
  }
}
showMenu('nav-toggle', 'nav-menu')

/*==================== REMOVER MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction() {
  const navMenu = document.getElementById('nav-menu')
  // Quando há click no nav__link, remove a classe show-menu
  navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== SCROLLAR SEÇÕES COM ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive() {
  const scrollY = window.pageYOffset

  sections.forEach(current => {
    const sectionHeight = current.offsetHeight
    const sectionTop = current.offsetTop - 50
    sectionId = current.getAttribute('id')

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector('.nav__menu a[href*=' + sectionId + ']')
        .classList.add('active-link')
    } else {
      document
        .querySelector('.nav__menu a[href*=' + sectionId + ']')
        .classList.remove('active-link')
    }
  })
}
window.addEventListener('scroll', scrollActive)

/*==================== MUDANÇA DE BACKGROUND NA HEADER ====================*/
function scrollHeader() {
  const nav = document.getElementById('header')
  // Quando o scroll fica maior que 200 de height, adiciona a classe scroll-header à tag header
  if (this.scrollY >= 200) nav.classList.add('scroll-header')
  else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*==================== MOSTRAR SCROLL TOPO ====================*/
function scrollTop() {
  const scrollTop = document.getElementById('scroll-top')
  // Quando o scroll fica maior que 560 height, adiciona a classe show-scroll à tag com a classe scroll-top
  if (this.scrollY >= 560) scrollTop.classList.add('show-scroll')
  else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)

/*==================== TEMA ESCURO ====================*/
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

// Tópico selecionado anteriormente (se selecionado pelo usuário)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// Obtenção do tema atual da interface (validando a classe tema escuro)
const getCurrentTheme = () =>
  document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () =>
  themeButton.classList.contains(iconTheme) ? 'bx-moon' : 'bx-sun'

// Validação - se o usuário escolheu um tópico anteriormente
if (selectedTheme) {
  // Se a validação foi preenchida, pergunta qual foi o problema pra saber se ativa ou desativa tema escuro
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](
    darkTheme
  )
  themeButton.classList[selectedIcon === 'bx-moon' ? 'add' : 'remove'](
    iconTheme
  )
}

// Ativa ou desativa manualmente com o botão
themeButton.addEventListener('click', () => {
  // Add or remove the dark / icon theme
  document.body.classList.toggle(darkTheme)
  themeButton.classList.toggle(iconTheme)
  // We save the theme and the current icon that the user chose
  localStorage.setItem('selected-theme', getCurrentTheme())
  localStorage.setItem('selected-icon', getCurrentIcon())
})

/*==================== REVELAÇÃO ANIMADA DO SCROLL ====================*/
const sr = ScrollReveal({
  origin: 'top',
  distance: '30px',
  duration: 2000,
  reset: true
})

sr.reveal(
  `.home__data, .home__img,
            .about__data, .about__img,
            .port__content,
            .contact__data, .contact__button,
            .footer__content`,
  {
    interval: 200
  }
)

    function AgendaOK() {
        alert("Agendamento realizado com sucesso!");
    }

    function AgendaErro() {
      alert("Erro em seu agendamento.");
  }