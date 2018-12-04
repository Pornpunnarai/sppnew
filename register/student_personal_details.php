<?php
include '../connect-mysql.php';
//$sql = "SELECT * FROM `student_personal_details` WHERE `student_account_id` = '1'";
//$objQuery = mysqli_query($objCon, $sql);
//$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>
<fieldset>
    <div class="input-container" style="margin-bottom: 10px;">
        <div class="row">
            <div class="col-lg-3 text-box">
                Title
            </div>
            <div class="col-lg-8">
                <button class="col-lg-2" id="Miss" onclick="title_name('Miss')">
                   <b style="color: white;">Miss</b>
                </button>
                <div class="col-lg-1"></div>
                <button class="col-lg-2" id="Mrs" onclick="title_name('Mrs')">
                    <b style="color: white;">Mrs.</b>
                </button>
                <div class="col-lg-1"></div>
                <button class="col-lg-2" id="Mr" onclick="title_name('Mr')">
                    <b style="color: white;">Mr.</b>
                </button>
                <div class="col-lg-1"></div>
                <button class="col-lg-2" id="Ms" onclick="title_name('Ms')">
                    <b style="color: white;">Ms.</b>
                </button>
            </div>

        </div>

    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                First / Given Name
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="firstname" required="">
            </div>
        </div>

    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Middle Name ( if any )
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="middlename" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Last / Family Name
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="familyname" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Date of birth
            </div>
            <div class="col-lg-8">
                <input class="text" type="date" id="dob" placeholder="DD/MM/YYYY" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Country of Birth
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="conutryofbirth" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                City of Birth
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="cityofbirth" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Citizenship
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="citizenship" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                County of Permanent Residence
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="county_permanent" required="">
            </div>
        </div>
    </div>

    <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 100%; margin-top: -30vh;">
        <p style="font-family: lato-bold; font-size: 24px;color: white;">Photocory of<br>Thai National or Passport<br>
            <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">+Add file</button>
            <small style="font-style: italic; font-size: 11px; font-family: lato-light;">Please insert file format PDF, MS Word Doc, JPEG, PNG. Limits file size : 20 MB</small>
        </p>
    </div>

    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">PERSONAL DETAILS</p>
    </div>

    <input type="button" name="next" class="next action-button" value="Next"/>

</fieldset>
<script>

    // function title_name(answer) {
    //     if(answer=="Miss"){
    //         document.getElementById("Miss").style = "background-color: #04B1DC;";
    //     }
    //
    // }

    var timeoutId;


$('form input, form textarea').on('input propertychange change', function() {
    // console.log(e.target.id);

    var firstname = document.getElementById("firstname").value;
    var middlename = document.getElementById("middlename").value;
    var lastname = document.getElementById("familyname").value;
    var dob = document.getElementById("dob").value;
    var conutryofbirth = document.getElementById("conutryofbirth").value;
    var cityofbirth = document.getElementById("cityofbirth").value;
    var citizenship = document.getElementById("citizenship").value;
    var county_permanent = document.getElementById("county_permanent").value;


    var student_personal_details = { "student_personal_details": [
            { "firstname": firstname,
                "middlename": middlename,
                "lastname": lastname,
                "dob": dob,
                "conutryofbirth": conutryofbirth,
                "cityofbirth": cityofbirth,
                "citizenship": citizenship,
                "county_permanent": county_permanent}
        ]};
console.log(JSON.stringify(student_personal_details));

    // $.ajax({
    //     type: 'POST',
    //     url: 'check-add.php',
    //     data: JSON.stringify(student_account),
    //     contentType: 'application/json',
    //     success: function(msg){
    //         console.log(msg);
    //     }
    //
    // });



    clearTimeout(timeoutId);
    timeoutId = setTimeout(function() {
        // Runs 1 second (1000 ms) after the last change
        // saveToDB();
    }, 1500);
});
</script>