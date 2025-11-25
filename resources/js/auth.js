// Auth specific functionality
document.addEventListener('DOMContentLoaded', function() {
    // Form validation for auth pages
    const authForms = document.querySelectorAll('.auth-form');
    
    authForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#dc3545';
                } else {
                    field.style.borderColor = '';
                }
            });
            
            // Password confirmation validation for register form
            if (form.action.includes('register')) {
                const password = form.querySelector('#password');
                const confirmPassword = form.querySelector('#password_confirmation');
                
                if (password && confirmPassword && password.value !== confirmPassword.value) {
                    isValid = false;
                    confirmPassword.style.borderColor = '#dc3545';
                    alert('Passwords do not match!');
                }
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    });

    // Real-time password confirmation validation
    const registerForm = document.querySelector('form[action*="register"]');
    if (registerForm) {
        const password = registerForm.querySelector('#password');
        const confirmPassword = registerForm.querySelector('#password_confirmation');
        
        function validatePassword() {
            if (password.value !== confirmPassword.value) {
                confirmPassword.style.borderColor = '#dc3545';
            } else {
                confirmPassword.style.borderColor = '';
            }
        }
        
        if (password && confirmPassword) {
            password.addEventListener('input', validatePassword);
            confirmPassword.addEventListener('input', validatePassword);
        }
    }

    // Auto-hide alerts after 5 seconds
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.opacity = '0';
            alert.style.transition = 'opacity 0.5s';
            setTimeout(() => alert.remove(), 500);
        }, 5000);
    });
});