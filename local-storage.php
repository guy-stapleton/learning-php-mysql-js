
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Local Storage</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <p class="msg"></p>
            <p class="result">0<p>
            <?php
                echo "Hello World!";
            ?>
        </div>
        <!-- <script src="js/index.js"></script> -->
        <script>
            if (typeof localStorage == undefined) {
                console.log(`Unsupported`)
            } else {
                console.log(localStorage)
                localStorage.setItem('region', 'USA')
                let region = localStorage.getItem('region')
                document.querySelector('.msg').textContent = region;
            }

            if (!!window.Worker)
      {
        var worker = new Worker('js/worker.js')

        worker.onmessage = function (event)
        {
          document.querySelector('.result').innerText = event.data;
        }
      }
      else
      {
        alert("Web workers not supported")
      }
        </script>
    </body>
</html>