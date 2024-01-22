function toggle() {
    var addDiv = document.getElementById('addDiv');
    addDiv.style.display = (addDiv.style.display === 'none') ? 'inline-block' : 'none';

    var btn = document.getElementById('toggleAdd');
    btn.value = (btn.value == 'Cancel Add') ? 'Add ToDo' : 'Cancel Add';

    var alert = document.getElementById('alert');
    if (alert) {
        alert.style.display = (alert.style.display === 'none') ? 'flex' : 'none';
    }
}