function click() {
    alert("Clicked!");
}

function changeColor() {
    var textbox_id = "txtColor";
    var textbox = document.getElementById(textbox_id);

    var div_Id = "one";
    var div = document.getElementById(div_Id);

    // We should verify values here before we use them...
    var color = textbox.value;
    div.style.backgroundColor = color;

}