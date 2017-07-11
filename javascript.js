// Get the modal
//var modal = document.getElementById('upload_image');

// Get the button that opens the modal
//var btn = document.getElementById("uploadImage");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
//btn.onclick = function() {
//    modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
//span.onclick = function() {
//    modal.style.display = "none";
//}

// When the user clicks anywhere outside of the modal, close it
//window.onclick = function(event) {
//    if (event.target == modal) {
//        modal.style.display = "none";
//    }
//}

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

//Delete verification button
//$("form.delete").live("click",function(event){
//   event.stopPropagation();
//   if(confirm("Do you want to delete?")) {
//    this.click;
//       alert("Ok");
//   }
//   
//   event.preventDefault();
//   
//});

$("form. delete").live("click",function(event){
     return confirm("Do you want to delete?");
});

