<fieldset id="student_contact_details">

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Address Line 1
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="address_line_1" name="address_line_1" required="">
            </div>
        </div>

    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Address Line 2
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="address_line_2" name="address_line_2" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                State/Province
            </div>
            <div class="col-lg-3">
                <input class="text" type="text" id="province" name="province" required="">
            </div>
            <div class="col-lg-2 text-box">
                Postcode
            </div>
            <div class="col-lg-3">
                <input class="text" type="text" id="postcode" name="postcode" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Country
            </div>
            <div class="col-lg-3">
                <input class="text" type="text" id="country" name="country" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Phone 1
            </div>
            <div class="col-lg-3">
                <input class="text" type="text" id="phone_1" name="phone_1" required="">
            </div>
            <div class="col-lg-2 text-box">
                Phone 2
            </div>
            <div class="col-lg-3">
                <input class="text" type="text" id="phone_2" name="phone_2" required="">
            </div>
        </div>
    </div>

    <div class="input-container" style="    margin-bottom: 10px;">
        <div class="row">
            <div class="col-lg-3 text-box">
                Do you want to add a correspondence address
            </div>
            <div class="col-lg-8">
                <div class="col-lg-2" id="title">
                    <input type="radio" id="correspondence_address_status" name="correspondence_address_status" value="YES"> <b>YES</b>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2" id="title">
                    <input type="radio" id="correspondence_address_status" name="correspondence_address_status" value="NO"> <b>NO</b>
                </div>
            </div>

        </div>

    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Please provide details
            </div>
            <div class="col-lg-8" style="text-align: left">
                <input class="text" type="text" id="correspondence_address_detail" name="correspondence_address_detail" required="">
                <p><a style="color: white;">Emergency Contact -></a></p>
            </div>
        </div>
    </div>

    <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
        <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
            Please provide the address of your permanent residence.<br>
            If your correspondence/ mailing address is different from the <br>
            permanent address during the period of the admissions process (Jan-July 2018), <br>
            please provide your correspondence address as well.</small>

    </div>

    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
            CONTACT DETAILS</p>
    </div>

    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
    <input type="button" name="next" class="next action-button" value="Next"/>

</fieldset>