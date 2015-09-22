<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pseudoprojekt1</title>
</head>
<body>
<h1>Pseudoprojekt</h1>

<button onclick="myFunction()">Tere Maailm!</button>

<script>
    function myFunction() {
        alert("Hello world!");
    }
</script>
<br>
<br>
<a href="http://www.khk.ee" onClick="alert('Hello World!')">Tere Maailm!</a>
<br>
<br>
<a href="#" onclick="alert('jääme siia!')">jääme siia!</a>
<br>
<br>

<img id="myImage" onclick="changeImage()" src="cat.png" width="250" height="250">

<p>Click on cat to see what happens!</p>

<script>
    function changeImage() {
        var image = document.getElementById('myImage');
        if (image.src.match("bulbon")) {
            image.src = "cat.png";
        } else {
            image.src = "dog.png";
        }
    }
</script>

<br>


</body>
</html>