function animateNumber(element, target, duration = 2000) {
  const start = 0;
  const increment = target / (duration / 16);
  let current = start;
  
  const timer = setInterval(() => {
    current += increment;
    if (current >= target) {
      current = target;
      clearInterval(timer);
    }
    element.textContent = current.toFixed(1) + '%';
  }, 16);
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
      entry.target.classList.add('animated');
      const targetValue = parseFloat(entry.target.innerText);
      animateNumber(entry.target, targetValue);
    }
  });
}, { threshold: 0.5 });

const numberElements = document.querySelectorAll('.animated-number');
numberElements.forEach(element => observer.observe(element));