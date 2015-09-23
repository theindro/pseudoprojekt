<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pseudoprojekt1</title>
    <script src="jquery-2.1.4.min.js"></script>
</head>
<body>
<h1>Pseudoprojekt</h1>

<!--2. Nupp, mis kuvab hello world!-->

<button onclick="myFunction()">Tere Maailm!</button>

<script>
    function myFunction() {
        alert("Hello world!");
    }
</script>
<br>
<br>
<!--3. Nupp, mis kuvab suunab khk.ee!-->

<a href="http://www.khk.ee" onClick="alert('Hello World!')">Tere Maailm!</a>
<br>
<br>

<!--4. Nupp, mis kuvab j22me siia aga ei suuna kuskile!-->

<a href="#" onclick="alert('jääme siia!')">jääme siia!</a>
<br>
<br>

<!--5. kass muutub koeraks!-->

<img id="kasskoeraks" onclick="changeImage()" src="cat.png" width="300" height="250">

<p>Click on cat to see what happens!</p>

<script>
    function changeImage() {
        var image = document.getElementById('kasskoeraks');
        if (image.src.match("dog")) {
            image.src = "cat.png";
        } else {
            image.src = "dog.png";
        }
    }
</script>

<br>


<!--6. kass koeraks jquery!-->



<div class="cat">
    <img src="cat.png"
</div>

<script>
    $("img[src='cat.png']").click(function () {
        $(this).attr("src","dog.png")
    })
</script>


<!--7. jquery tausta muutmine-->
<br>
<button type="button" id="nupp">red</button><br><br>
<button type="button" id="change_background1">green</button><br><br>
<button type="button" id="change_background2">blue</button><br><br>

<script>
    $( "#nupp" ).on( "click", function() {
        $("body").first().css("background-color", $("#nupp").text());
    });
    $( "#change_background1" ).on( "click", function() {
        $("body").first().css("background-color",$("#change_background1").text());
    });
    $( "#change_background2" ).on( "click", function() {
        $("body").first().css("background-color",$("#change_background2").text());
    });

</script>

<!--8.test jquery tausta muutmine-->
<br>
<br>
<!--9. disable right click menu-->
<script>
    $(document).ready(function(){
        $(document).on("contextmenu",function(e){
            if(e.target.nodeName != "INPUT" && e.target.nodeName != "TEXTAREA")
                e.preventDefault();
        });
    });
</script>



</body>
</html>