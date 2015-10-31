

<style>
  .text-divide {
    background: #fff none repeat scroll 0 0;
    left: -8px;
    line-height: 22px;
    position: absolute;
    top: 55px;
}
.socialspace{
  padding: 0 22px 18px 18px;
  top: 120px;
}
.verticalLine {
    border-right: thin solid #E0E0E0;
    
}
.read-more {
    position: absolute;
    bottom: 0;
    right: 0;
    left:610px;
    
}
.btn-back{
    padding-top: 10px !important;
}
.pull-rights
{
    float: right !important;
    padding-top: 12px;
}

</style>
<section id="content"   style="background: #E0E0E0;">
<div class="container tabpad" >
	<div class="row">
        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container col-lg-offset-1">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center" id="loginRegister">
                  <h4><i class="fa fa-sign-in fa-2x"></i></h4><br/>Log In / Register
                </a>
                <a href="#" class="list-group-item text-center" id="confirmAddress">
                  <h4 class="fa fa-home fa-2x "></h4><br/>Confirm Address
		</a>
                <a href="#" class="list-group-item text-center" id="placeorder">
                  <h4><i class="fa fa-paper-plane fa-2x "></i></h4><br/>Place Order
                </a>
                <a href="#" class="list-group-item text-center" id="confirmorder">
                  <h4><i class="fa fa-check-circle-o fa-2x "></i></i></h4><br/>Conform Order
                </a>
                <!--<a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Credit Card
                </a>-->
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab" ng-controller="registerController">
                <!-- flight section -->
		
		<div class="bhoechie-tab-content active " >
		    <div class="col-md-6 verticalLine" ng-hide="login">
		      <form class="" ng-submit="loginForm()" role="form" method="post">

			<div class="form-group">
			  <h2>Log In</h2>
			</div>
			<div class="form-group">
			 <label for="usr">Email:</label>
			 <input type="text" class="form-control" id="usr" ng-model="userEmail">
			</div>
			<div class="form-group">
			 <label for="pwd">Password:</label>
			 <input type="password" class="form-control" id="pwd" ng-model="userPassword">
			</div>
			<div class="form-group">
			  <button type="submit" class="btn btn-primary">Sign In </button><hr>
			</div>
			<div class="form-group">
			  <span>Don't Have an Account? &nbsp;</span><a href="#" ng-click="toggle1()">Register Now</a>
			</div>
		      </form>
		    </div>
		    <form class="" ng-submit="registerForm()" role="form" method="post">
		    <div class="col-md-6 verticalLine" ng-hide="register">
		      <div class="form-group">
			  <h2>Register Now</h2>
			</div>
			<div class="form-group">
			 <label for="usr">First Name:</label>
			 <input type="text" class="form-control" ng-model="firstName" id="fname">
			</div>
			<div class="form-group">
			 <label for="usr">Last Name:</label>
			 <input type="text" class="form-control" ng-model="lastName" id="lname">
			</div>
			<div class="form-group">
			 <label for="pwd">Password:</label>
			 <input type="password" class="form-control" ng-model="userPassword" id="pwd">
			</div>
			
			<div class="form-group">
			 <label for="usr">Email:</label>
			 <input type="text" class="form-control" ng-model="userEmail" id="usr">
			</div>
			
			<div class="form-group">
			 <label for="usr">Phone Number:</label>
			 <input type="text" class="form-control" ng-model="phoneNumber" id="phoneNumber">
			</div>
			<div class="form-group">
			    <a href="#" ng-click="togglenext()"><button type="button" class="btn btn-primary">Next </button></a>
			    <!--<button type="submit" class="btn btn-primary">Sign In </button><hr>-->
			</div>
			<div class="form-group">
			  <span>I'm already having account! &nbsp;<a href="#" ng-click="toggle()">Log In</a>
			</div>
		      
		    </div>
		    <div class="col-md-6" ng-hide="onetimepass" >
			<div class="form-group">
			    <label for="usr">One Time Password</label>
			    <input type="password" class="form-control" ng-model="otppassword" id="otppassword">
			</div>
			<div class="form-group">
			    <!--<a href="#" ng-click="toggle()"><button type="submit" class="btn btn-primary">Next </button></a>-->
			    
			    <button type="submit" class="btn btn-primary">Sign In </button><hr>
			</div>
		    </div>
		    </form>
		  <div class="col-md-6" >
		      <div class="form-group">
			 <label>&nbsp;</label>
		      </div>
		      <div class="form-group">
			 <label>&nbsp;</label>
		      </div>
		      <div class="form-group">
			 <label>&nbsp;</label>
		      </div>
		      
		      <div class="form-group col-md-4">
			<a href='<?php echo $login_url; ?>' ><img class="img" width="60" height="60" src="<?php echo site_url();?>application/assests/images/fb.png"></a>
		      </div>
		      <div class="col-md-2"><center style="font-weight: bold;margin-top: 20px;">Or</center></div>
		      <div class="form-group col-md-4">
		       <a href="#"><img class="img" width="60" height="60" src="<?php echo site_url();?>application/assests/images/g+.png"></a>
		      </div>
		    </div>
		</div>
		 
                <!-- train section -->
                <!--<div class="bhoechie-tab-content"  ng-controller="addressController">-->
		<div class="bhoechie-tab-content"  >
                    <h4>Confirm Address</h4>
				    <p>We will deliver your order here</p>
				    <form class="" ng-submit="addressForm()" role="form" method="post">
				    
				   
				    <div class="col_half">
					<label for="billing-form-name">Address:</label>
					<input id="register-form-name" ng-model="street_name1" class="required form-control input-block-level" type="text" value="" name="register-form-name">
				    </div>
				    <div class="col_half">
					<label for="billing-form-name">Landmark:</label>
					<input id="register-form-name" ng-model="street_name2" class="required form-control input-block-level" type="text" value="" name="register-form-name">
				    </div>
				    <div class="col_half">
					<label for="billing-form-name">City:</label>
					  <input id="register-form-name" ng-model="city" class="required form-control input-block-level" type="text" value="" name="register-form-name">
      				    </div>

				   
				     <div class="col_half">
					<button type="submit" class="btn btn-primary">Continue</button>
				    </div>
				    </form>
                </div>
		
		
		
		
		
		<!-- PlaceOrder  -->
		<div class="bhoechie-tab-content" >
		    <form class="" ng-submit="placeorderForm()" role="form" method="post">
		    <div class="col-md-12" ng-hide="placeorder">
		      

                           <!--Different type checkbox-->
			   <label>Wash Type :</label><br>
			   
			   <div class="btn-group" ng-init="number=1" role="group" ng-repeat="washtype in type">
			    
			  
			    <input id="{{washtype.name}}" checked ng-model="cleantype" ng-click="savedata(washtype.name,$index);" type="checkbox" value="{{washtype.name}}" ng-checked="selection.indexOf(washtype.name) > -1" ng-click="toggleSelection(washtype.name)" />
			    <label for="{{washtype.name}}">{{washtype.name}}</label>
			   
			   </div>
			<!--Different type checkbox-->
			   <!-- <div class="col_half">
				<label for="billing-form-name">State:</label>
				    <select id="register-form-name" class="required form-control input-block-level" ng-model="pickLocation">
					 
					 <option ng-selected="{{option.id == 293}}" ng-repeat="option in location"  value="{{option.id}}">{{option.location}}    </option>
				    </select>
			    </div>-->
			   <div class="col_full">
			       <label for="shipping-form-message">
				    Description
				   <small>*</small>
			       </label>
			       <textarea id="" class="required form-control" cols="30" rows="6" ng-model="deliveryNotes" style="width: 662px; height: 81px;" placeholder="Enter Your Notes Here "></textarea>
			   </div>
			   
			<div class="col-md-6 verticalLine" style=padding:10px>
			   <!-- <img class="img-responsive" width="100" height="60" src="<?php echo site_url();?>application/assests/images/collection/collection.png">-->
			   <!-- <h4 style="padding-bottom: 10%"><span style="color:#137FCB"><b>Collection</b> </span>Please choose a  date</h4>-->
			    <div class="col_full">
				<label for="billing-form-name">Pick Up Date:</label>
				<input type="text" id="collectiondata" value="{{collectiondateaaaaa}}" ng-blur="addclassfun($event);" class="required form-control input-block-level"    placeholder="DD-MM-YYYY">
				<!--<input type="date" id="date" ng-model="collectiondateaaaaa" value="{{collectiondateaaaaa}}" ng-blur="pickupdate($event)"  class="required form-control datepicker input-block-level"    placeholder="DD-MM-YYYY">-->
			    </div>
			   
			  

				<div class="btn-group btn-pickup" data-toggle="buttons">
				<!--<div  ng-repeat="pickuptime in pickuptimepicker" ></div>--> 
				
				<div class="col-xs-6 col-md-4 col-sm-3"  ng-repeat="pickuptime in pickuptimepicker"  style="padding: 0px;">
				   
				    <label class="btnradio btn btn-primary"  ng-click="setval(pickuptime.name);">
				      <input type="radio" ng-model="pickup"  ng-value="{{pickuptime.name}}" autocomplete="on" > {{pickuptime.name}}
				    </label>
				 
				</div>
			    </div>
			   
			        
			</div>
			<div class="col-md-6" style=padding:10px>
			    <div style="float: right;">
				<!--<img class="img-responsive"  width="100" height="60" src="<?php echo site_url();?>application/assests/images/collection/delivery.png">-->
			    </div>
			    <!--<h4 style="float: inherit;padding-bottom: 10%"><span style="color:#1F761F;"><b>Delivery</b></span> Please choose a date</h4>-->
			    <div class="col_full">
				<label for="billing-form-name">Delivery Date:</label>
				<input  type="text" ng-blur="deldate($event)" ng-model="deliverydate" class="required form-control datepicker input-block-level"   placeholder="DD-MM-YYYY">
			    </div>
			    <div class="btn-group btn-deliver" data-toggle="buttons">
				<div class="col-xs-6 col-md-4 col-sm-3" ng-repeat="deliverytime in deliverytimepicker"  style="padding: 0px;">
				    <label class="btnradio1 btn btn-primary" ng-click="delvalue(deliverytime.name);">
				      <input type="radio" ng-model="deliverytime" name="options" ng-value="{{deliverytime.name}}" id="option1" autocomplete="on">{{deliverytime.name}}
				    </label>
				</div>
			    </div>
			   
			</div>
			<div class="form-group pull-rights">
			  <input type="submit" class="btn btn-primary " value="Continue">
			</div>
			
		   
		    </div>
		  
		    </form>
		</div>
                 <!--Confirm Order Tab-->
                <div class="bhoechie-tab-content">
		   
		    

	<div class="col-md-10">
		<div class="table-responsive clearfix">
			

		<table class="table cart">
			<thead>
				<tr>
					<th class="cart-product-thumbnail">&nbsp;</th>
					<th class="cart-product-name">Order Conformation</th>
					<th class="cart-product-quantity">Quantity</th>
					<th class="cart-product-subtotal"></th>
				</tr>
			</thead>
			<tbody>
				<tr class="cart_item">
					<td class="cart-product-thumbnail">
						<!--<a href="#"><img width="64" height="64" alt="Pink Printed Dress" src="images/shop/thumbs/small/dress-3.jpg"></a>-->
					</td>

					<td class="cart-product-name">
						<a href="#">Delivery Notes:</a>
					</td>

					<td class="cart-product-quantity">
						<div class="quantity clearfix">
							{{deliveryNotes}}
						</div>
					</td>

					<td class="cart-product-subtotal">
						<span class="amount"></span>
					</td>
				</tr>
				<tr class="cart_item" >
					<td class="cart-product-thumbnail">
						<!--<a href="#"><img width="64" height="64" alt="Checked Canvas Shoes" src="images/shop/thumbs/small/shoes-2.jpg"></a>-->
					</td>

					<td class="cart-product-name">
						<a href="#">Wash Type:</a>
					</td>

					<td class="cart-product-quantity" ng-repeat="wash in typeofLondary">
						<div class="quantity clearfix">
							{{wash.value}}<br>
						</div>
					</td>

					<td class="cart-product-subtotal">
						<span class="amount"></span>
					</td>
				</tr>
				<tr class="cart_item">
					<td class="cart-product-thumbnail">
						<!--<a href="#"><img width="64" height="64" alt="Pink Printed Dress" src="images/shop/thumbs/small/tshirt-2.jpg"></a>-->
					</td>

					<td class="cart-product-name">
						<a href="#">Pick Up Date:</a>
					</td>

					<td class="cart-product-quantity">
						<div class="quantity clearfix">
							{{collectionDate}}
						</div>
					</td>

					<td class="cart-product-subtotal">
						<span class="amount"></span>
					</td>
				</tr>
				<tr class="cart_item">
					<td class="cart-product-thumbnail">
						<!--<a href="#"><img width="64" height="64" alt="Pink Printed Dress" src="images/shop/thumbs/small/tshirt-2.jpg"></a>-->
					</td>

					<td class="cart-product-name">
						<a href="#">Delivery Date:</a>
					</td>

					<td class="cart-product-quantity">
						<div class="quantity clearfix">
							{{deldate}}
						</div>
					</td>

					<td class="cart-product-subtotal">
						<span class="amount"></span>
					</td>
				</tr>
				<tr class="cart_item">
					<td class="cart-product-thumbnail">
						<!--<a href="#"><img width="64" height="64" alt="Pink Printed Dress" src="images/shop/thumbs/small/tshirt-2.jpg"></a>-->
					</td>

					<td class="cart-product-name">
						<a href="#">Pick Up Time:</a>
					</td>

					<td class="cart-product-quantity">
						<div class="quantity clearfix">
							{{pickup}}
						</div>
					</td>

					<td class="cart-product-subtotal">
						<span class="amount"></span>
					</td>
				</tr>
				<tr class="cart_item">
					<td class="cart-product-thumbnail">
						<!--<a href="#"><img width="64" height="64" alt="Pink Printed Dress" src="images/shop/thumbs/small/tshirt-2.jpg"></a>-->
					</td>

					<td class="cart-product-name">
						<a href="#">Delivery Time:</a>
					</td>

					<td class="cart-product-quantity">
						<div class="quantity clearfix">
							{{deltime}}
						</div>
					</td>

					<td class="cart-product-subtotal">
						<span class="amount"></span>
					</td>
				</tr>
			</tbody>

		</table>
		<div class="form-group pull-rights">
			  <input type="button" ng-click="orderSave()" class="btn btn-primary" value="Save">
			</div>

		</div>
	</div>

                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>
</section>

<script>
$(document).ready(function() {
  $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
    e.preventDefault();
    $(this).siblings('a.active').removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
  });
  
  
});
app.controller('registerController', function($scope) {
  // Pick Up date Starts
  $scope.pickuptimepicker=[{name:'09.00-10.00'},
	       {name:'10.00-11.00'},
	       {name:'11.00-12.00'},
	       {name:'12.00-13.00'},
	       {name:'13.00-14.00'},
	       {name:'14.00-15.00'},
	       {name:'15.00-16.00'},
	       {name:'16.00-17.00'},
	       {name:'17.00-18.00'},
	       {name:'18.00-19.00'},
	       {name:'19.00-20.00'},
	       {name:'20.00-21.00'},];
  $scope.selection=[];
  // toggle selection for a given employee by name
  $scope.toggleSelection = function toggleSelection() {
    var idx = $scope.selection.indexOf();
    // is currently selected
    if (idx > -1)
    {
	$scope.selection.splice(idx, 1);
    }
    // is newly selected
    else
    {
    $scope.selection.push();
    }
  }

  $scope.addclassfun=function(event)
  {
    $scope.collectionDate=$(event.target).val();
  }
  //pick up date Ends
  //Delivery time starts
  $scope.deliverytimepicker=[{name:'09.00-10.00'},{name:'10.00-11.00'},{name:'11.00-12.00'},{name:'12.00-13.00'},{name:'13.00-14.00'},{name:'14.00-15.00'},{name:'15.00-16.00'},{name:'16.00-17.00'},{name:'17.00-18.00'},{name:'18.00-19.00'},{name:'19.00-20.00'},{name:'20.00-21.00'}];
  $scope.selection=[];
  // toggle selection for a given employee by name
  $scope.toggleSelection = function toggleSelection() {
  var idx = $scope.selection.indexOf();
  // is currently selected
  if (idx > -1)
  {
    $scope.selection.splice(idx, 1);
  }
  // is newly selected
  else {
  $scope.selection.push();
  }
  };
  //Delivery time Ends
  
  <?php if(count($user_profile)>0){ ?>
    $("#confirmAddress").siblings('a.active').removeClass("active");
    $("#confirmAddress").addClass("active");
    var index = $("#confirmAddress").index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    
    $("#loginRegister").removeAttr("disabled",true);
    document.getElementById('loginRegister').style.pointerEvents = 'none';
    document.getElementById("loginRegister").style.backgroundColor = "#ccc";
  <?php }?>
    
  $scope.login = false;
  $scope.register = true;
  $scope.onetimepass=true;
  $scope.street_name1="";
  $scope.street_name2="";
  $scope.city="";
  
  $scope.toggle1 = function()
  {
    $scope.login = !$scope.login;
    $scope.register = !$scope.register;
  }
  
  $scope.togglenext = function()
  {
    $scope.login = true;
    $scope.register = true;
    $scope.onetimepass=false;
  }
  $scope.loginForm = function ()
  {
    var userEmail=$scope.userEmail;
    var userPassword=$scope.userPassword;
    $.ajax({
      url: "<?php echo site_url();?>WashBox/loginUser",
      type: "post",
      data: {userEmail:userEmail,userPassword:userPassword},
      dataType:"json",
      success:function(result){
	if (result.message=="yes")
	{
	  callUser(result.data);
	  var id = localStorage.setItem("address",result.address);
	  localStorage.setItem("street_name1",result.address.street_name1);
	  localStorage.setItem("street_name2",result.address.street_name2);
	  localStorage.setItem("city",result.address.city);
	  $scope.street_name1=result.address.street_name1;
	  $scope.street_name2=result.address.street_name2;
	  $scope.city=result.address.city;
	  $scope.$apply();
	}
	else
	{
	  alert("Check User Name or Password");
	}
      }
    });
  }
  
  $scope.street_name1=localStorage.getItem("street_name1");
  $scope.street_name2=localStorage.getItem("street_name2");
  $scope.city=localStorage.getItem("city");
  $scope.$apply();
    
  $scope.registerForm = function ()
  {
    var firstName=$scope.firstName;
    var lastName=$scope.lastName;
    var userEmail=$scope.userEmail;
    var userPassword=$scope.userPassword;
    var phoneNumber=$scope.phoneNumber;
    $.ajax({
      url: "<?php echo site_url();?>WashBox/registerUser",
      type: "post",
      data: {firstName:firstName,lastName:lastName,phoneNumber:phoneNumber,userEmail:userEmail,userPassword:userPassword},
      dataType:"json",
      success:function(result){
	callUser(result);
      }
    });
  }
  function callUser(result)
  {
    $("#confirmAddress").siblings('a.active').removeClass("active");
    $("#confirmAddress").addClass("active");
    var index = $("#confirmAddress").index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    
    var scope = angular.element('[ng-controller=userController]').scope();
    scope.$apply(function(){
    scope.userName=result.first_name;
    console.log(scope.userName);
    angular.element('[ng-controller=userController]').scope();
    });
    
    $("#loginRegister").removeAttr("disabled",true);
    document.getElementById('loginRegister').style.pointerEvents = 'none';
    document.getElementById("loginRegister").style.backgroundColor = "#ccc";
  }
  function placeorderTab()
  {
    $("#placeorder").siblings('a.active').removeClass("active");
    $("#placeorder").addClass("active");
     var index = $("#placeorder").index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
  }

  $scope.addressForm = function ()
  {
    var street_name1=$scope.street_name1;
    var street_name2=$scope.street_name2;
    var city=$scope.city;
    
    $.ajax({
      url: "<?php echo site_url();?>wash_BoxCntrl/userAddress",
      type: "post",
      data: {street_name1:street_name1,street_name2:street_name2,city:city},
      dataType:"json",
      success:function(result){
       placeorderTab();
      }
    });
    
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var Month = ["gobi","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
    var output=(day<10 ? '0' : '') + day + "-"+ Month[month] + '-' +  d.getFullYear() ;
    
    $scope.collectiondateaaaaa=output;
    $scope.collectionDate=output;
    $("#collectiondata").addClass("datepicker");
    $('.datepicker').datetimepicker({ format: 'DD-MMM-YYYY' });
    
  }
    
  $scope.addclassfun=function(event)
  {
    $scope.collectionDate=$(event.target).val();
  }

  $scope.type=[{name:'Wash & Iron'},{name:'Drycleaning'},{name:'Iron'},];
  $scope.selection=[];
  
  // toggle selection for a given employee by name
  $scope.toggleSelection = function toggleSelection() {
    var idx = $scope.selection.indexOf();
    // is currently selected
    if (idx > -1)
    {
      $scope.selection.splice(idx, 1);
    }
    // is newly selected
    else
    {
      $scope.selection.push();
    }
  };
  //wash type end
  
  $scope.placeorder = false;
  $scope.orderdetails = true;
  $scope.toggle = function() {
    $scope.placeorder = !$scope.placeorder;
    $scope.orderdetails = !$scope.orderdetails;
   }
   $scope.typeofLondary=[];
   $scope.savedata=function(data,index)
   {
     var found = $.inArray(data, $scope.typeofLondary);
     alert
    if(found ==-1)
    {
      $scope.typeofLondary.push({value:data});
    }
    else
    {
      $scope.typeofLondary.splice(index,1);
    }
   }
   
  $scope.location=<?php echo json_encode($data);?>;
 
  $scope.collection= function ($attr)
  {
    console.log($attr);
  }
  $scope.setval=function(evnt)
  {
    $scope.pickup=evnt
  }
  //deliverytime picker value starts
   $scope.delvalue=function(evnt)
  {
    $scope.deltime=evnt
  }
  //deliverytime picker value ends
  
  //deliveryDate value starts
  $scope.dDate= function ($attr)
  {
  }
  $scope.deldate=function(evnt)
  {
    $scope.deldate=($(evnt.target).val());
  }
  $scope.pickupdate=function(evnt)
  {
    $scope.collectiondateaaaaa=($(evnt.target).val());
    $scope.$apply();
  }
  $scope.placeorderForm = function ()
  {
    $("#confirmorder").siblings('a.active').removeClass("active");
    $("#confirmorder").addClass("active");
    var index = $("#confirmorder").index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    $scope.$apply();
  }
    
  
  $scope.orderSave=function()
  {
    var tyopwash=[];
    var deliveryNotes=$scope.deliveryNotes;
    var cleantype=$scope.typeofLondary;
    for(var i=0;i<cleantype.length;i++)
    {
	tyopwash.push({"value":cleantype[i].value});
    }
    console.log(tyopwash);
    var collectiondate=$scope.collectiondateaaaaa;
    var deliverydate=$scope.deldate;
    var pickuptime=$scope.pickup;
    var deliverytime=$scope.deltime;
    $.ajax({
      url: "<?php echo site_url();?>WashBox/placeOrder",
      type: "post",
      data: {deliveryNotes:deliveryNotes,collectiondate:collectiondate,deliverydate:deliverydate,cleantype:tyopwash,pickuptime:pickuptime,deliverytime:deliverytime},
      dataType:"json",
      success:function(result){
	  
      },
      error:function()
      {
	  alert("error");
      }
    });
  }

})

//NON DRAGGABLE IMAGE
$(".img").mousedown(function(){    return false;   });
$('.datepicker').datetimepicker({   format: 'DD-MMM-YYYY'   });
document.getElementById("date").value = output;
</script>
<script>
    
</script> 