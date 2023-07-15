$(function(){
  $(document).on("change",`[name="status_complete"]`,function(){
    let id = $(this).parents("tr").data("id"),
        is_checked = $(this).is(":checked") ? "1" : "0";
    $.ajax({
      url: `/tasks/${id}/update`,
      type: "PUT",
      data: JSON.stringify({is_checked}),
      success: function(d) {
        if(d.code === 200){
          console.log("success", d);
        }
      },
      error: function(d) {
        console.log("error", d);
      },
      complete: function() {
        console.log("complete");
      }
    })
  })
});
