function toggle() {
    var addDiv = document.getElementById('addDiv');
    addDiv.style.display = (addDiv.style.display === 'none') ? 'inline-block' : 'none';

    var alert = document.getElementById('alert');
    alert.style.display = (alert.style.display === 'none') ? 'flex' : 'none';
}