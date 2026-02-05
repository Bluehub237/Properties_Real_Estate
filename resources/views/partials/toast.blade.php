@props(['autoHide' => 4000])
<style>
    /* Toast container top-right */
    #toast-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 99999;
        display: flex;
        flex-direction: column;
        gap: 12px;
        pointer-events: none;
    }

    .toast-message {
        min-width: 280px;
        max-width: 420px;
        background: #fff;
        color: #222;
        border-radius: 10px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        padding: 14px 16px;
        display: flex;
        gap: 12px;
        align-items: center;
        pointer-events: auto;
        transform: translateY(-10px) scale(.98);
        opacity: 0;
        transition: all 240ms ease;
    }

    .toast-message.show {
        transform: translateY(0) scale(1);
        opacity: 1;
    }

    .toast-message.success {
        border-left: 6px solid #16a34a;
    }

    .toast-message.error {
        border-left: 6px solid #dc2626;
    }

    .toast-message .content {
        flex: 1;
        font-size: 14px;
    }

    .toast-close {
        background: transparent;
        border: none;
        color: #6b7280;
        font-size: 16px;
        cursor: pointer;
        padding: 6px;
    }

    @media (max-width: 576px) {
        #toast-container { left: 12px; right: 12px; top: 12px; }
        .toast-message { width: auto; }
    }
</style>

<div id="toast-container" aria-live="polite" aria-atomic="true"></div>

<script>
    (function() {
        const container = document.getElementById('toast-container');

        function createToast(message, type = 'success', autoHide = {{ $autoHide }}) {
            const toast = document.createElement('div');
            toast.className = `toast-message ${type}`;

            const html = `
                <div class="content">${message}</div>
                <button class="toast-close" aria-label="Close">&times;</button>
            `;

            toast.innerHTML = html;
            container.prepend(toast);

            // show
            requestAnimationFrame(() => toast.classList.add('show'));

            // close handler
            const closeBtn = toast.querySelector('.toast-close');
            closeBtn.addEventListener('click', () => removeToast(toast));

            // auto hide
            if (autoHide && autoHide > 0) {
                setTimeout(() => removeToast(toast), autoHide);
            }
        }

        function removeToast(toast) {
            toast.classList.remove('show');
            setTimeout(() => {
                try { toast.remove(); } catch(e){}
            }, 220);
        }

        // Expose a small API on window for manual usage
        window.__showToast = createToast;

        // Render server-side session messages
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                createToast(@json(session('success')), 'success', {{ $autoHide }});
            @endif
            @if(session('error'))
                createToast(@json(session('error')), 'error', {{ $autoHide }});
            @endif
            @if($errors->any())
                // display first validation error
                createToast(@json($errors->first()), 'error', {{ $autoHide }});
            @endif
        });
    })();
</script>
