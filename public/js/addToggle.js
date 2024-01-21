document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('toggleAdd').addEventListener('click', function() {
            var addDiv = document.getElementById('addDiv');
            addDiv.style.display = (addDiv.style.display === 'none') ? 'inline-block' : 'none';
    });
});