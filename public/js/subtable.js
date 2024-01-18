var profile_button = document.getElementById("profile_button");

profile_button.onclick = function () {
    var div = document.getElementById('subtable_content');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'flex';
    }
};
