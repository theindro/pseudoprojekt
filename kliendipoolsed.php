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
<input type="button" id="change_background" value="Punane taust" /><br><br>
<input type="button" id="change_background1" value="Sinine taust" /><br><br>
<input type="button" id="change_background2" value="Roheline taust" /><br><br>

<script>
    $( "#change_background" ).on( "click", function() {
        $("body").first().css("background-color","red");
    });
    $( "#change_background1" ).on( "click", function() {
        $("body").first().css("background-color","blue");
    });
    $( "#change_background2" ).on( "click", function() {
        $("body").first().css("background-color","green");
    });

</script>



</body>
</html>