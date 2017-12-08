function confirmAndDelete() {
    if(confirm("Are you sure you want to delete the selected messages?")) {
        document.getElementById("deleteForm").submit();
    }
}

function selectAll(source) {
  checkboxes = document.getElementsByName('delete_list[]');
  for(var i=0, n=checkboxes.length; i<n; i++) {
    checkboxes[i].checked = source.checked;
  }
}