$(document).ready(function () {
    $("#datatable").on("click", "#permadeletcategory", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");

        $("#permadeleteForm").attr("action", "/category/archive/" + id);
        $("#delete_category").text(name);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#delete-confirmation-modal")
        );
        myModal.show();
    });
    $("#datatable").on("click", "#restoreCategory", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");
        $("#restore_data").text(name);
        $("#restoreCategoryForm").attr("action", "/category/archive/" + id);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#restore-modal")
        );
        myModal.show();
    });
});
