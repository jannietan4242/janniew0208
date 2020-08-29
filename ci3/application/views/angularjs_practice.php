<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angular JS Practice</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <style>
        .mytable th, .mytable td{
            border: 1px solid black;
        }

        input.ng-invalid, textarea.ng-invalid {
            background-color: rgba(255,0,0,0.3);
        }

        input.ng-valid, textarea.ng-valid {
            background-color: rgba(0,255,0,0.3);
        }

        .red{
            color:red;
        }
    </style>
</head>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
    {{test}}</br>
    {{abc}}</br>

    
<form name="registerForm">
    Name: <input type="text" name="name" ng-model="myform.name" required><br/>
    <div class="red" ng-show="registerForm.name.$touched && registerForm.name.$invalid">Please fill in your name</div>
    Email: <input type="email" name="email" ng-model="myform.email" required><br/>
    <div class="red" ng-show="registerForm.email.$touched && registerForm.email.$invalid">Please fill in your email</div>
    Message: <textarea rows="5" cols="10" name="message" ng-model="myform.message" required></textarea><br/>
    <div class="red" ng-show="registerForm.message.$touched && registerForm.message.$invalid">Please fill in your message</div>
    <input type="button" value="Submit" ng-disabled="registerForm.$invalid" ng-click="submitForm()"/>
</form>

    <input type="button" value="Alert" ng-click="alert()"></br>

    <table class="mytable">
        <tr>
            <th>Id</th><th>Product</th><th>Price</th><th>Owner</th>
        </tr>
        <tr>
            <td>1</td><td>iPhone</td><td>2399</td><td>Ali</td>
        </tr>
        <tr>
            <td>2</td><td>Samsung</td><td>2499</td><td>Ah Kau</td>
        </tr>
        <tr>
            <td>3</td><td>Blackberry</td><td>1200</td><td>Muthu</td>
        </tr>
    </table>

    <table class="mytable">
        <tr>
            <th>Id</th><th>Product</th><th>Price</th><th>Owner</th>
        </tr>
        <tr ng-repeat="item in phoneList">
            <td>{{item.Id}}</td>
            <td>{{item.Product}}</td>
            <td>{{item.Price}}</td>
            <td>{{item.Owner}}</td>
        </tr>
       
    </table>

    </div>
    <script>
        var app = angular.module("myApp",[]);
        app
        .controller("myCtrl", function($scope){

            $scope.myform = {};
            if(localStorage.myApp != null){
                var tmp = localStorage.getItem("myApp");
                $scope.myform = JSON.parse(tmp);
            }
            $scope.submitForm = function(){
                // console.log($scope.myform);

                localStorage.setItem("myApp", JSON.stringify($scope.myform));
            };

            $scope.alert = function(){
                alert("Hi");
            };

            $scope.test = "Hello World";
            $scope.abc = "Hello My Name";

            $scope.phoneList = [
            {"Id":1,"Product":"iPhone","Price":2499,"Owner":"Ali"},
            {"Id":2,"Product":"Samsung","Price":2399,"Owner":"Ah Kau"},
            {"Id":3,"Product":"Blackberry","Price":1299,"Owner":"Muthu"}
            ];


        });
        
    </script>
</body>
</html>