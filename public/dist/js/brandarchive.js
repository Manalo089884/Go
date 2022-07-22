$(document).ready(function () {
    $("#datatable").on("click", "#permadeletemodal", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");

        $("#permadeleteForm").attr("action", "/brand/archive/" + id);
        $("#delete_brand").text(name);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#delete-confirmation-modal")
        );
        myModal.show();
    });

    $("#datatable").on("click", "#restoreBrand", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");
        console.log(name);
        $("#restore_data").text(name);
        $("#restoreBrandForm").attr("action", "/brand/archive/" + id);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#restore-modal")
        );
        myModal.show();
    });
});
