document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('inputPesquisa');
    var itemsList = document.getElementsByClassName('cards_jogadores');
    searchInput.addEventListener('input', function() {
        var searchText = this.value.toLowerCase();
        Array.prototype.forEach.call(itemsList, function(item) {
            var itemText = item.textContent.toLowerCase();
            if (itemText.includes(searchText)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});   