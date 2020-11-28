<html>
<head>
    <title>Chuck Norrisove Mudrosti</title>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
      #data {
        width: 600px;
        border: 1px dashed black;
        font-size: 20px;
        text-align: center;
        margin: 0 auto;
        margin-top: 50px;
        padding: 20px;
      }

      #logo {
        width: 320px;
        height: 320px;
        margin: 0 auto;
        margin-top: 50px;
        display: block;
      }

  </style>
</head>

<body> 
  <h4 style="text-align:center">Stisnite Chucka za više mudrosti!</h4>
  <img id="logo" src="images/chuck_norris1.png" />

  <div id="data">
    <script type="text/javascript">

        function randomFact() {
     
          var xmlhttp = new XMLHttpRequest();
          var url = "https://api.chucknorris.io/jokes/random";
          xmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
              var json = JSON.parse(this.responseText);
             
              parseJson(json);
            }
          };

          xmlhttp.open("GET", url, true);
          xmlhttp.send();
        }

        function parseJson(json) {
          var fact = "<b>" + json["value"] + "</b>";
          document.getElementById("data").innerHTML = fact;
        }


        document.getElementById("logo").addEventListener("click", function() {
          randomFact();
        });

        randomFact();  

  </script>
</div>
</body>
</html>



