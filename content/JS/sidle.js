function left() {
    var img = document.getElementById("sidle");
    var child = img.children[0];
    img.removeChild(child);
    img.appendChild(child);
}
function right() {
    var img = document.getElementById("sidle");
    var child = img.children[0];
    img.removeChild(child);
    img.appendChild(child);
}