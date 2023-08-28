<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <div class="progress" style="width: 700px; margin: 10px;">
    <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
      <span id="current-progress"></span>
    </div>
  </div>

  <script>
    // Update the progress bar every 100 milliseconds
    var current_progress = 0;
    var interval = setInterval(function() {
      current_progress += 10;
      document.getElementById("dynamic").style.width = current_progress + "%";
      document.getElementById("dynamic").setAttribute("aria-valuenow", current_progress);
      document.getElementById("current-progress").innerHTML = current_progress + "% Complete";
      if (current_progress >= 100) {
        clearInterval(interval);
      }
    }, 100);
  </script>
</body>
</html>
