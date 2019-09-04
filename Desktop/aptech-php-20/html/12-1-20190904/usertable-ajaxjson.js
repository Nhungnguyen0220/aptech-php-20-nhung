function createTable() {

  var nhung = new XMLHttpRequest();
  nhung.onreadystatechange = function () {
    if (nhung.readyState == 4 && nhung.status == 200) {
      var user = nhung.responseText;
      var data = JSON.parse(user);
      //console.log(data);
      var tableBody = document.getElementById('table-body');
    for (var i = 0; i < data.users.length; i++) {
      var tableRow = document.createElement('tr');
      tableBody.appendChild(tableRow);
      var td1 = document.createElement('td');
      td1.innerHTML = data.users[i].id;
      tableRow.appendChild(td1);
      var td2 = document.createElement('td');
      td2.innerHTML = data.users[i].name;
      tableRow.appendChild(td2);
      var td3 = document.createElement('td');
      td3.innerHTML = data.users[i].email;
      tableRow.appendChild(td3);
      var td4 = document.createElement('td');
      td4.innerHTML = data.users[i].password;
      tableRow.appendChild(td4);
      var td5 = document.createElement('td');
      td5.innerHTML = data.users[i].email;
      tableRow.appendChild(td5);
      var td6 = document.createElement('td');
      td6.innerHTML = data.users[i].password;
      tableRow.appendChild(td6);
    }
    } else {
      console.log('du lieu chua ve dau' + nhung.readyState);
    }
  }
  nhung.open('GET', 'https://namcoi.com/projects/users-crud-laravel/public/api/users');
  nhung.send();
}