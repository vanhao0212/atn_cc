<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<body>


  @include('layout.sidebar')
 
  <body ng-app="myApp" ng-controller="myController">
    <div class="container">
      <div class="row">
        <div class="col-md-12" id="bg">
          <h3 class="text-center">Users Management</h3>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <button class="btn btn-info pull-right new-btn" data-toggle="modal" data-target="#addModal">&#10011 Add User</button>
          <!-- <div class="alert alert-warning fade in myAlert" ng-if="alertMassege"><a class="close" href="#" data-dismiss="alert" ng-click="clickedAlert()">X</a>
            <h4></h4> -->
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
    </div>
    <div class="container footer">
      <div class="row">
        <div class="col-md-12 text-center">
					<footer> <p>&#169; Music Shop @2023</p></footer>
         
        </div>
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
                  <label class="control-label col-sm-2" for="Name">UserName :</label>
                  <div class="col-sm-3">
                    <input class="form-control" type="text" placeholder="Enter UserName" ng-model="newUser.name"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="Name">DisplayName :</label>
                  <div class="col-sm-3">
                    <input class="form-control" type="text" placeholder="Enter DisplayName" ng-model="newUser.name"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email :</label>
                  <div class="col-sm-3">
                    <input class="form-control" type="email" placeholder="datamanger@gmail.com" ng-model="newUser.email"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="Name">Role :</label>
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
  

  
</body>
</html>