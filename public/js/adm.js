var showEditor = document.getElementById('showeditor');
var textEditor = document.getElementById('textEditor');
textEditor.style.display = 'none';
showEditor.addEventListener('click',
function()
{
    textEditor.style.display = 'block';
    showEditor.style.display = 'none';
});
var title = document.getElementById('editorTitle');

