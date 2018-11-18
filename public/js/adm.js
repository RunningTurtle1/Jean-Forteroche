var showEditor = document.getElementById('showeditor');
var editor = document.getElementById('editor');
editor.style.display = 'none';
showEditor.addEventListener('click',
function()
{
    editor.style.display = 'block';
    showEditor.style.display = 'none';
});

