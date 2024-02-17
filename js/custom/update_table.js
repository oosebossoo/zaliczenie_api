// Note: This method will clear any user selections and may cause other problems since the previous list is deleted and recreated.
function update_table(jsonData) {
  $.each(jsonData, function(index, employee){
    var row = $('<tr>');
    row.append($('<td>').text(employee.name));
    row.append($('<td>').text(employee.position));
    row.append($('<td>').text(employee.office));
    row.append($('<td>').text(employee.age));
    row.append($('<td>').text(employee.start_date));
    row.append($('<td>').text(employee.salary));
    $('#api-table tbody').append(row);
  });
}