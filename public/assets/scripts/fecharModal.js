document.addEventListener('DOMContentLoaded', function() {
    var btnsFecharModal = document.querySelectorAll('#fecharModal');
    btnsFecharModal.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var modalId = btn.getAttribute('data-target');
            var modal = document.getElementById(modalId);
            if (modal) {
                modal.close(); 
            }
        });
    });
});