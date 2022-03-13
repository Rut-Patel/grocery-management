function setUpdateAction() {
document.frmItems.action = "edit_items.php";
document.frmItems.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmItems.action = "delete_items.php";
document.frmItems.submit();
}
}