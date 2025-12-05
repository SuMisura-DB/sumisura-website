// resources/js/dashboard/ckeditor-init.js (adapt path to your setup)

function initCkeditors(root = document) {
    const editors = root.querySelectorAll('textarea.ckeditor:not([data-ckeditor-initialized])');

    editors.forEach((el) => {
        ClassicEditor
            .create(el)
            .then((editor) => {
                // optional: height tweak, like the original file
                editor.ui.view.editable.element.style.height = '200px';

                // mark as initialised so we don't double-init
                el.dataset.ckeditorInitialized = '1';

                // === OPTIONAL: sync to Livewire model ===
                // If the textarea has wire:model / wire:model.defer, keep Livewire updated:
                const modelName =
                    el.getAttribute('wire:model') ||
                    el.getAttribute('wire:model.defer');

                if (modelName) {
                    editor.model.document.on('change:data', () => {
                        const componentEl = el.closest('[wire\\:id]');
                        if (!componentEl) return;

                        const componentId = componentEl.getAttribute('wire:id');
                        if (!componentId) return;

                        const component = window.Livewire?.find(componentId);
                        if (!component) return;

                        component.set(modelName, editor.getData());
                    });
                }
            })
            .catch((error) => {
                console.error('CKEditor init failed:', error);
            });
    });
}

// Run on initial page load
document.addEventListener('DOMContentLoaded', () => {
    initCkeditors();
});

// Re-run after Livewire DOM updates (Livewire v3)
document.addEventListener('livewire:init', () => {
    Livewire.hook('morph.updated', ({ el }) => {
        initCkeditors(el);
    });
});
