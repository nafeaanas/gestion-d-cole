<html>
  <script src="https://d3js.org/d3.v4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css"/>
  <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css"/> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>
  
  <style>
    body {
      text-align: center;
      color: green;
    }
  </style>

  <body>
    <div id="classe"></div>
    <script>
      var chart = bb.generate({
        data: {
          columns: [
            ["classe 1", 2],
            ["classe 2", 4],
            ["classe 3", 3],
          ],
          type: "donut",
        //   onclick: function (d, i) {
        //     console.log("onclick", d, i);
        //   },
        //   onover: function (d, i) {
        //     console.log("onover", d, i);
        //   },
        //   onout: function (d, i) {
        //     console.log("onout", d, i);
        //   },
        },
        donut: {
          title: "Les classes",
        },
        // bindto: "#classe",
      });
    </script>
  </body>
</html>