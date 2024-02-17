// Get the updated list
var updated_users = ["name1", "name2", "name3"];
function loadData(){
  var jsonData = [
    {"id": 1, "name": "John Doe", "position": "Developer", "office": "Lodz", "age": 33, "start_date": "2008/11/11", "salary": "$162,150"},
    {"id": 2, "name": "Jane Smith", "position": "Designer", "office": "Lodz", "age": 33, "start_date": "2008/11/11", "salary": "$162,150"},
    {"id": 3, "name": "Mike Johnson", "position": "Manager", "office": "Lodz", "age": 33, "start_date": "2008/11/11", "salary": "$162,150"}
  ];
  
  $.ajax({
    url: "http://localhost:8000/api/data/",
    type: 'GET',
    dataType: 'json',
    success: function(res) {
        update_table(res);
        $("#api-table").DataTable();
    }
  });
}

loadData()