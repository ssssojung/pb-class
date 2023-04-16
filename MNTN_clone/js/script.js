function updateIndicator(entries, observer) {
    const indicator = document.querySelector('#quick');
  
    entries.forEach(entry => {
      const index = entry.target.textContent.replace('#', '');
      const el = indicator.querySelector(`[data-index="${index}"]`);    
      el.classList.toggle('active', entry.isIntersecting);
    });
  }
  
  const io = new IntersectionObserver(updateIndicator);
  
  Array.from(document.querySelectorAll('.block')).forEach(block => {
    io.observe(block);
  });