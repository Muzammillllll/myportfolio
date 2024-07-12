document.querySelector('form').addEventListener('submit', function(event) {
    var input = document.getElementById('name').value;
    
    // Check if input contains non-alphabet characters
    if (/[^a-zA-Z]/.test(input)) {
        alert('Please fill in this field');
        event.preventDefault(); // Prevent form submission
    }

    
});

document.querySelector('form').addEventListener('submit', function(event) {
    var input = document.getElementById('email').value;
    
    // Check if input contains non-alphabet characters
    if (/[^a-zA-Z]/.test(input)) {
        alert('Please fill in this field');
        event.preventDefault(); // Prevent form submission
    }

    
});

document.querySelector('form').addEventListener('submit', function(event) {
    var input = document.getElementById('message').value;
    
    // Check if input contains non-alphabet characters
    if (/[^a-zA-Z]/.test(input)) {
        alert('Please fill in this field');
        event.preventDefault(); // Prevent form submission
    }

    
});

