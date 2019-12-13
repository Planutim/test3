<html>
<head>
  <link rel='stylesheet' href='static/styles.css'>
</head>
<body>
  <table id = 'myTable' border>
    <thead>
      <th>ID</th>
      <th>VALUE</th>
    </thead>
    <tbody>
    </tbody>

    <script>
      document.addEventListener('DOMContentLoaded', function(){
        updateTable()
        setInterval(updateTable,3000)
      });


 

      function updateTable(){

        var xhr = new XMLHttpRequest();

        xhr.open('GET', '/json', true);

        xhr.send();

        xhr.onload = function (){
          var tbody = document.getElementById('myTable').getElementsByTagName('tbody')[0];
          

          var result = JSON.parse(xhr.responseText)

          tbody.innerHTML = ''
          result.forEach(data=>{

            var newRow = tbody.insertRow(-1);

            var newCellId = newRow.insertCell(-1);
            var newCellValue = newRow.insertCell(-1);

            var textId = document.createTextNode(data.id)
            var textValue = document.createTextNode(data.value)

            newCellId.appendChild(textId);
            newCellValue.appendChild(textValue);
          })

        }
        


      }

      function updateTable2(){
        fetch('/json')
        .then(function(response){
          return response.json();
        }).then(function(jsonResponse){
          jsonResponse.forEach(data=>{

            var newRow = tbody.insertRow(-1);

            var newCellId = newRow.insertCell(-1);
            var newCellValue = newRow.insertCell(-1);

            var textId = document.createTextNode(data.id)
            var textValue = document.createTextNode(data.value)

            newCellId.appendChild(textId);
            newCellValue.appendChild(textValue);
})
        })
      }
    </script>
</body>

</html>