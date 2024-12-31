<div class="mb-3">
    <div class="d-flex justify-content-between align-items-center">
        <h6 class="m-0">Code Snippet</h6>
        <button class="btn btn-sm btn-primary copy-btn">Copy Code</button>
    </div>
    <div class="position-relative border rounded p-3 bg-light mt-2">
        <pre><code class="language-{{ $language }}">{{ $code }}</code></pre>
    </div>
</div>

<script>
    document.querySelectorAll('.copy-btn').forEach(button => {
        button.addEventListener('click', () => {
            const code = button.closest('.mb-3').querySelector('pre').textContent;
            navigator.clipboard.writeText(code).then(() => {
                alert('Code copied to clipboard!');
            });
        });
    });
</script>
