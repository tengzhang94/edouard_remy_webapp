<div class="container-fluid">
    <form class="form-horizontal" method="post" action="addResidentConfirm">
    <div class="row">
        <div class="col-sm-6 col-xs-12" >
             <button class="btn-photo">{uploadPhoto}</button>   
             <div class="row">
             <div class="form-group"style="height:55px;">
                <div class="col-sm-4 col-xs-12 ">
                    <input type="submit" class="btn-confirm" name="submit1" value="Submit">
                </div>
                <div class="col-sm-4 col-sm-offset-1 col-xs-12">
                    <input type="button" class="btn-confirm" name="return1" onclick="location='resident'" value="Return">
                </div>
            </div>
             </div>
        </div>
        
            <div class="col-sm-6 col-xs-12">
                <div class="form-group" style="margin-top: 70px;">
                    <label class="control-label col-sm-4" for="firstname"><p class="residentInfoStyle">{firstName}:</p></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="firstname" placeholder="first name" name="firstName" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="lastname"><p class="residentInfoStyle">{lastName}:</p></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lastname" placeholder="last name " name="lastName" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="birthdate"><p class="residentInfoStyle">{birthDate}:</p></label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="birthdate" placeholder="dd-mm-jj" name="birthDate" required >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="sector"><p class="residentInfoStyle">{sector}:</p></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="sector" placeholder="sector number "  name="sector" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="room"><p class="residentInfoStyle">{room}:</p></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="room" placeholder="room number " name="room" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender"><p class="residentInfoStyle">{gender}:</p></label>
                    <div class="col-sm-8">
                    <div class="radio-inline">
                            <input type="radio"  name="gender" value="Male" checked>{male}
                    </div>
                    <div class="radio-inline">
                            <input type="radio" name="gender" value="Female">{female}
                    </div>
                    </div>   
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="married"><p class="residentInfoStyle">{married}:</p></label>
                    <div class="col-sm-8">
                        <div class="radio-inline">
                        <input type="radio" name="married" value="1" checked>{yes}
                        </div>
                        <div class="radio-inline">
                        <input type="radio" name="married" value="0">{no}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="children"><p class="residentInfoStyle">{children}:</p></label>
                    <div class="col-sm-8">
                    <div class="radio-inline">
                    <input type="radio"name="children" value="1" checked>{yes}
                    </div>
                    <div class="radio-inline">
                    <input type="radio"name="children" value="0">{no}
                    </div>
                    </div>
                </div>
            </div>
    </div>    
    </form>   
</div>
