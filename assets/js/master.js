$(function() {
  $(document).on("change", `[name="status_complete"]`, function() {
    let id = $(this).parents("tr").data("id"),
      is_checked = $(this).is(":checked") ? "1" : "0";
    $.ajax({
      url: `/tasks/${id}/update`,
      type: "PUT",
      data: JSON.stringify({
        is_checked
      }),
      success: function(d) {
        if (d.code === 200) {
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
  $(document).on("click", `[data-role="add-info"]`, function() {
    let data = {
      title: $(`[name="title"]`).val(),
      description: $(`[name="description"]`).val()
    };
    $.ajax({
      url: `/add-info`,
      type: "POST",
      data,
      success: function(d) {
        if (d.code === 200) {
          console.log("success", d);
          getContent();
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

  const trComponent = (v, i) => {
    return `<tr data-id="${v.id}">
              <td>${i}</td>
              <td>${v.title}</td>
              <td>${v.description}</td>
              <td>${v.created_at}</td>

              <td>
              ${v.is_checked === "1" ?
              `Completed`
              :
              `<input class="form-check-input" type="checkbox" name="status_complete">
              Complete`
            }


              </td>
              <td>
                <a href="/edit/${v.id}" class="btn btn-warning">Update</a>
                <a href="/deleteItem/${v.id}" class="btn btn-danger">Delete</a>
              </td>
            </tr>`;
  }


  const getContent = () => {
    let html = "";
    $.get({
      url: `/tasks/list-live`,
      success: function(d) {
        if (d.code === 200) {
          let content_data = d.data ? d.data : [];

          html = content_data.map((v, i) => trComponent(v, ++i)).join("");
        }
        $(`[data-role="list-info"]`).html(html);
      },
      error: function(d) {
        console.log("error", d);
      },
      complete: function() {
        console.log("complete");
      }
    })
  }


  $(`[data-role="number1"], [data-role="number2"]`).on("keyup", function() {
    var num1 = parseFloat($('[name="num1"]').val());
    var num2 = parseFloat($('[name="num2"]').val());
    let addition = "",
        subtraction = "",
        multiplication = "",
        division = "";
    if(!Number.isNaN(num1) && !Number.isNaN(num2)){
      addition = num1 + num2;
      subtraction = num1 - num2;
      multiplication = num1 * num2;
      if(num2 == 0){
        $(`[data-role="division_result"]`).text("Error");
      }
      else {
        division = num1 / num2;
        $(`[data-role="division_result"]`).text(division);
      }
    }

    $(`[data-role="addition_result"]`).text(addition);
    $(`[data-role="subtraction_result"]`).text(subtraction);
    $(`[data-role="multiplication_result"]`).text(multiplication);


  });


  getContent();
});
