$(document).ready(function () {
    $("#datatable").on("click", "#deleteCategory", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");

        $("#deleteCategoryForm").attr("action", "/category/" + id);
        $("#delete_category").text(name);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#delete-confirmation-modal")
        );
        myModal.show();
    });
    $("#datatable").on("click", "#editCategory", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");
        $("#name").val(name);
        $("#editCategoryForm").attr("action", "/category/" + id);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#edit-modal")
        );
        myModal.show();
    });
});
