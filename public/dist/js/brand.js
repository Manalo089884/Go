$(document).ready(function () {
    $("#datatable").on("click", "#deleteBrand", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");
        $("#deleteBrandForm").attr("action", "/brand/" + id);
        $("#delete_brand").text(name);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#delete-confirmation-modal")
        );
        myModal.show();
    });
    $("#datatable").on("click", "#editBrand", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");
        console.log(name);
        $("#name").val(name);
        $("#editBrandForm").attr("action", "/brand/" + id);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#edit-modal")
        );
        myModal.show();
    });
});
