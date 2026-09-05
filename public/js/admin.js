document.addEventListener("DOMContentLoaded", function () {
    var searchInput = document.getElementById("searchInput");
    if (searchInput) {
        searchInput.addEventListener("input", function () {
            var filter = searchInput.value.toUpperCase();
            var table = document.getElementById("tableBody");
            if (!table) return;
            var tr = table.querySelectorAll("tr");

            for (var i = 0; i < tr.length; i++) {
                var found = false;
                tr[i].querySelectorAll("td:not(:last-child)").forEach(function (cell) {
                    var txtValue = cell.textContent || cell.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                });

                tr[i].style.display = found ? "" : "none";
            }
        });
    }
});

let formToSubmit = null;

function confirmDelete(event) {
    event.preventDefault();
    formToSubmit = event.target;
    var modal = document.getElementById('deleteModal');
    if (modal) {
        modal.style.display = 'block';
    } else if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        formToSubmit.submit();
    }
}

function confirmDeleteAction() {
    if (formToSubmit) {
        formToSubmit.submit();
    }
}

function cancelDeleteAction() {
    var modal = document.getElementById('deleteModal');
    if (modal) {
        modal.style.display = 'none';
    }
    formToSubmit = null;
}

window.onclick = function (event) {
    var modal = document.getElementById('deleteModal');
    if (modal && event.target == modal) {
        modal.style.display = 'none';
    }
};

function goBack() {
    window.history.back();
}