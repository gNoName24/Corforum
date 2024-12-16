// script.js
document.addEventListener('DOMContentLoaded', () => {
  const contentSections = document.querySelectorAll('.content');

  const handleScroll = () => {
    const triggerBottom = window.innerHeight * 0.9; // 90% высоты окна

    contentSections.forEach((section, index) => {
      const sectionTop = section.getBoundingClientRect().top;

      if (sectionTop < triggerBottom) {
        // Установить задержку анимации через CSS-переменную
        section.style.setProperty('--delay', `${index * 0.05}s`);
        section.classList.add('visible');
      } else {
        //section.classList.remove('visible'); // Удалить класс, если элемент вышел из области видимости
      }
    });
  };

  window.addEventListener('scroll', handleScroll);

  // Вызвать функцию сразу, чтобы обработать элементы на экране при загрузке
  handleScroll();
});
