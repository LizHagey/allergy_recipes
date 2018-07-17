//Checkbox navigation for mobile devices

/* Set the width of the side navigation when open */
function openNav() {
    document.getElementById("checklist").style.width = "50%";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("checklist").style.width = "0";
}
$(document).ready(function(){
        $(".slide-toggle").click(function(){
            $(".checklisttwo").animate({
                width: "toggle"
            });
        });
    });

//Verify Delete

function confirmDelete()
    {
      var x = confirm("Are you sure you want to delete this recipe?");
      if (x)
          return true;
      else
        return false;
    }


//Search Bar Code

