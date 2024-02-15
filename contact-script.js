// Get DOM elements
const form = document.getElementById('contactForm');
const resultDiv = document.querySelector('.result');

// Form submit handler
form.addEventListener('submit', e => {

  e.preventDefault();

  fetch(form.action, {
    method: 'POST',
    body: new FormData(form)  
  })
  .then(response => response.text())
  .then(data => {
    
    resultDiv.innerHTML = data;

    if(data === 'sent') {
      // Reset form
      form.reset(); 
    }

  });

});

// Helper to reset form
function resetForm(form) {
  form.reset();
  
  // Remove any extra error messages
  const errElements = form.querySelectorAll('.error');
  for(let el of errElements) {
    el.remove(); 
  }
}