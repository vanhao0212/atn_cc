<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="apple-mobile-web-app-title" content="CodePen">
  <title>quản lý user</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
  <style>
    .editb {
      border-radius: 50%;
      padding: 7px 11px 7px 11px;
      outline: none;
      background: lightgreen;
      border: 1px solid darkgreen;
      color: white;
      transition: 0.5s linear;
    }

    .editb:hover {
      background: darkgreen;
    }

    /* delete button*/

    .deleteb {
      background: tomato;
      padding: 7px 15px 7px 15px;
      border-radius: 100px;
      color: #fff;
      border: 1px solid red;
      transition: 0.5s linear;
      outline: none;
    }

    .deleteb:hover {
      background: darkred;
    }

    /* table headers*/

    th {
      color: deepskyblue;
      font-weight: bold;
    }

    tr th {
      font-size: 17px;
      line-height: 20px;
    }

    tr td:hover {
      color: #fa3380;
    }

    .myTable,
    .table th {
      text-align: center;
    }




    h3 span {
      color: #fa3380;
    }

    * {
      margin: 0;
      padding: 0
    }

    .myTable {
      margin-top: 50px;
    }

    .myAlert {
      margin: 50px 0 0
    }

    .alert h4 {
      margin: 0
    }

    /* span {
      color: red
    } */


    /* Add data button*/

    .new-btn {
      background: #fa3380;
      border-radius: 100px;
      border: 1px solid deepskyblue;
      transition: 0.4s linear;
      outline: none;
    }

    .new-btn:hover {
      background: white;
      color: #fa3380;
    }

    .new-btn:visted {
      background: pink;
    }
    .new-btn:active {
      background: deepskyblue;
    }

    /* save close buttons*/

    .saveb {
      background: #fa3380;
      border: 1px solid #fa3380;
      border-radius: 100px;
      transition: 0.4s linear;
    }
    .saveb:hover {
      background: #224;
    }

    .closeb {
      border-radius: 100px;
      border: 1px solid #fa3380;
      transition: 0.4s linear;
    }

    .closeb:hover {
      background-color: #fff;
      border: 1px solid #224;
      color: #fa3380;
    }

    .popup-w {
      background: transparent;
    }

    footer {
      margin-top: -200px;
      padding: 20px;
      background: #fa3380;
      color: #fff;
      width: 100%;
      border-radius: 400px;
    }

    /* edit buttons */
  </style>

  <script>
    window.console = window.console || function(t) {};
  </script>
</head>

<body translate="no">
  
  <html>
    <body ng-app="myApp" ng-controller="myController">
      <div class="container">
        <div class="row">
          <div class="col-md-12" id="bg">
            <h3 class="text-center" style="font-size:45px">Users Management</h3>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <button class="btn btn-info pull-right new-btn" data-toggle="modal" data-target="#addModal">&#10011 Add User</button>
          </div>
            
          <table class="table table-bordered myTable">
            <tr class="text-center">
              <th>ID</th>
              <th>User Name</th>
              <th>Display Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
              
            <tbody>
              @foreach ($users as $user)
                <tr ng-repeat="user in users">
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->display_name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role }}</td>
                  <td>
                    <button class="editb" data-toggle="modal" data-target="#editModal" ng-click="selectUser(user)">&#9783</button>
                  </td>
                  <td>
                    <button class="deleteb" data-toggle="modal" data-target="#deleteModal" ng-click="selectUser(user)">&#x232b</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    
      <!-- Add Modal-->
      <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal">X</button>
              <h4 class="modal-title">Add New User</h4>
            </div>
            
            <div class="modal-body">
              <div class="container">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="Name">
                      UserName:
                    </label>
                    
                    <div class="col-sm-3">
                      <input class="form-control" type="text" placeholder="Enter UserName" ng-model="newUser.name"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="display_name">
                      DisplayName:
                    </label>
                    
                    <div class="col-sm-3">
                      <input class="form-control" type="text" placeholder="Enter DisplayName" ng-model="newUser.name"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">
                      Email:
                    </label>
                    
                    <div class="col-sm-3">
                      <input class="form-control" type="email" placeholder="datamanger@gmail.com" ng-model="newUser.email"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="password">
                      Password:
                    </label>
                    <div class="col-sm-3">
                      <input class="form-control" type="password" placeholder="Enter Password" ng-model="newUser.email"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="Name">
                      Role:
                    </label>

                    <div class="col-sm-3">
                      <input class="form-control" type="text" placeholder="Enter Role" ng-model="newUser.name"/>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="modal-footer">
              <button class="btn btn-success saveb" type="button" ng-click="saveUser()" data-dismiss="modal">Save</button>
              <button class="btn btn-default closeb" type="button" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    
      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
      <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

    </body>
  </html>