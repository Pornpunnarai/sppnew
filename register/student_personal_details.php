

<fieldset id="student_personal_details">
    <div class="input-container" style="margin-bottom: 10px;">
        <div class="row">
            <div class="col-lg-3 text-box">
                Title
            </div>
            <div class="col-lg-8">
                <div class="col-lg-3" id="title">
                    <input type="radio" id="title_name" name="title_name" value="Miss"> <b>Miss</b>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2" id="title">
                    <input type="radio" id="title_name" name="title_name" value="Mrs."> <b>Mrs.</b>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2" id="title">
                    <input type="radio" id="title_name" name="title_name" value="Mr."> <b>Mr.</b>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2" id="title">
                    <input type="radio" id="title_name" name="title_name" value="Ms."> <b>Ms.</b>
                </div>
            </div>

        </div>

    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                First / Given Name
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="firstname" name="firstname" required="">
            </div>
        </div>

    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Middle Name ( if any )
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="middlename" name="middlename" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Last / Family Name
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="familyname" name="familyname" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Date of birth
            </div>
            <div class="col-lg-8">
                <input class="text" type="date" id="dob" name="dob" placeholder="DD/MM/YYYY" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Country of Birth
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="conutryofbirth" name="conutryofbirth" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                City of Birth
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="cityofbirth" name="cityofbirth" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Citizenship
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="citizenship" name="citizenship" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                County of Permanent Residence
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="county_permanent" name="county_permanent" required="">
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

    <button name="next" class="next action-button" onclick="student_personal_details_check()">Next<button>

</fieldset>
