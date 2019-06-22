
<!--//   http://localhost/AWD/Class2/-->

<html>
<head>
    <title>Class 2 Assignment</title>
</head>

<body>
<div class="row">
    <div class="horizontal" >
        <form action="class2Task.php" method="post" id="divId">
           <h3><label class="control-label">How many names you want to add?</label>
            <input class="from-control" name="NameField" type="number" id="NameFieldId">
            <input type="button" onclick="AddFields()" value="Add"></h3>
        </form>
    </div>


</div>

<script>
    function AddFields(){
        var count= document.getElementById('NameFieldId').value;
        var divs= document.getElementById('divId');
        var top=45;
        var left=90;
        var button = document.createElement("input");
        button.setAttribute("type", "submit");

        for(var i=0; i<count;i++)
        {
            var textbox = document.createElement("input");
            var label = document.createElement("Label");
            label.innerHTML = "Name : "
            textbox.setAttribute("type", "text");
            textbox.setAttribute("value", "");
            textbox.setAttribute("name", "Name"+i);
            textbox.setAttribute("style", "width:200px");
            textbox.setAttribute("id", "NameId"+i);
            textbox.style.position="absolute";
            textbox.style.left=left+"px";
            textbox.style.top=top+"px";
            label.setAttribute("style", "font-weight:normal");
            label.style.position="absolute";
            label.style.left=20+"px";
            label.style.top=top+"px";
            divs.appendChild(label);
            divs.appendChild(textbox);
            top+=50;
        }
        button.style.position="absolute";
        button.style.left=left+"px";
        button.style.top=top+"px";
        divs.appendChild(button);
    };


</script>
</body>
</html>
