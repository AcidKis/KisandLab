document.addEventListener('DOMContentLoaded', function() {
    // Анимация кнопок
    const buttons = document.querySelectorAll('.btn-details, .btn');
    
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.classList.contains('btn-details')) {
                e.preventDefault();
                this.textContent = 'Переход...';
                this.style.backgroundColor = '#4a0000';
                
                setTimeout(() => {
                    this.textContent = 'Подробнее';
                    this.style.backgroundColor = '';
                    // Здесь будет переход на страницу темы
                    window.location.href = '/topic';
                }, 1000);
            }
        });
    });
    
    // Анимация при загрузке
    const cards = document.querySelectorAll('.topic-card, .card, .header-card');
    
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 200 * index);
    });
    
    // Обработка форм
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const submitButton = this.querySelector('button[type="submit"]');
            
            if (submitButton) {
                const originalText = submitButton.textContent;
                submitButton.textContent = 'Обработка...';
                submitButton.disabled = true;
                
                // Симуляция отправки данных
                setTimeout(() => {
                    submitButton.textContent = originalText;
                    submitButton.disabled = false;
                    alert('Форма успешно отправлена!');
                }, 1500);
            }
        });
    });
    
    // Переключение активной ссылки в навигации
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
});