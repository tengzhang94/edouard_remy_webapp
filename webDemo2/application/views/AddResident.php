<div class="container-fluid">
    <form class="form-horizontal" method="post" action="addResidentConfirm">
    <div class="row">
        <div class="col-sm-6 col-xs-12" >
             <button class="btn-photo">Photo upload</button>   
             <div class="row">
             <div class="form-group"style="height:55px;">
                <div class="col-sm-4 col-xs-12 ">
                    <input type="submit" class="btn-confirm" name="submit1" value="Submit">
                </div>
                <div class="col-sm-4 col-sm-offset-1 col-xs-12">
                    <input type="submit" class="btn-confirm" name="return1" value="Return"> 
                </div>
            </div>
             </div>
        </div>
        
            <div class="col-sm-6 col-xs-12">
                <div class="form-group" style="margin-top: 70px;">
                    <label class="control-label col-sm-4" for="firstname"><p class="residentInfoStyle">Firstname:</p></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="firstname" placeholder="first name" name="firstName">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="lastname"><p class="residentInfoStyle">Lastname:</p></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lastname" placeholder="last name " name="lastName">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="birthdate"><p class="residentInfoStyle">Birthdate:</p></label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="birthdate" placeholder="dd-mm-jj" name="birthDate" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="sector"><p class="residentInfoStyle">Sector:</p></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="sector" placeholder="sector number "  name="sector">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="room"><p class="residentInfoStyle">Room:</p></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="room" placeholder="room number " name="room">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender"><p class="residentInfoStyle">Gender:</p></label>
                    <div class="col-sm-8">
                    <div class="radio-inline">
                            <input type="radio"  name="gender" value="Male" checked>Male
                    </div>
                    <div class="radio-inline">
                            <input type="radio" name="gender" value="Female">Female
                    </div>
                    </div>   
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="married"><p class="residentInfoStyle">Married:</p></label>
                    <div class="col-sm-8">
                        <div class="radio-inline">
                        <input type="radio" name="married" value="1" checked>Yes
                        </div>
                        <div class="radio-inline">
                        <input type="radio" name="married" value="0">No
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="children"><p class="residentInfoStyle">Children:</p></label>
                    <div class="col-sm-8">
                    <div class="radio-inline">
                    <input type="radio"name="children" value="1" checked>Yes
                    </div>
                    <div class="radio-inline">
                    <input type="radio"name="children" value="0">No
                    </div>
                    </div>
                </div>
            </div>
    </div>    
    </form>   
</div>
