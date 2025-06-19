import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();






import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

document.addEventListener('DOMContentLoaded', function() {
    const textarea = document.querySelector('#description');
    if (textarea) {
        ClassicEditor
            .create(textarea, {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo'],
                placeholder: 'Enter article description'
            })
            .then(editor => console.log('CKEditor initialized successfully'))
            .catch(error => console.error('CKEditor initialization failed:', error));
    } else {
        console.error('Textarea with id="description" not found');
    }

    // Form submission feedback
    const newsForm = document.querySelector('#create-news-form');
    const newsFeedback = document.querySelector('#news-feedback');
    if (newsForm && newsFeedback) {
        newsForm.addEventListener('submit', function(event) {
            newsFeedback.classList.remove('hidden');
            newsFeedback.innerHTML = `
                <div class="flex items-center justify-center gap-2 text-gray-600">
                    <i class="fas fa-spinner fa-spin text-lg"></i>
                    <span>Submitting...</span>
                </div>
            `;
        });
    } else {
        console.warn('Form or feedback element not found');
    }
});

