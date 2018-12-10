<fieldset id="student_academic_qualification">

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Institution / School / College
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="institution" name="institution" required="">
            </div>
        </div>

    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                City / Country
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="city" name="city" required="">
            </div>
        </div>
    </div>

    <div class="input-container" style="    margin-bottom: 10px;">
        <div class="row">
            <div class="col-lg-3 text-box">
                Select Qualification
            </div>
            <div class="col-lg-8">
                <div class="col-lg-3">
<!--                    <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">-->
<!--                        Bachelor’s-->
<!--                    </button>-->
                    <input type="radio" id="qualification" name="qualification" value="Bachelor’s"> <b>Bachelor’s</b>
                    <input type="radio" id="qualification" name="qualification" value="Master’s"> <b>Master’s</b>
                    <input type="radio" id="qualification" name="qualification" value="Doctoral"> <b>Doctoral</b>
                </div>
            </div>

        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Subject
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="subject" name="subject" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Thesis Title ( if applicable )
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="thesis_title" name="thesis_title" required="">
            </div>
        </div>
    </div>

    <div class="input-container" style="    margin-bottom: 10px;">
        <div class="row">
            <div class="col-lg-3 text-box">
                Thesis abstract file
            </div>
            <div class="col-lg-8">
                <div class="col-lg-3">
                    <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                        +Add file
                    </button>
                </div>
                <div class="col-lg-8">
                    <small style="font-style: italic; color: white">Please insert file format PDF, MS Word Doc, JPEG, PNG</small>
                </div>
            </div>

        </div>
    </div>

    <div class="input-container" style="    margin-bottom: 10px;">
        <div class="row">
            <div class="col-lg-3 text-box">
                Academic certificates
            </div>
            <div class="col-lg-8">
                <div class="col-lg-3">
                    <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                        +Add file
                    </button>
                </div>

                <div class="col-lg-8">
                    <small style="font-style: italic; color: white">Please insert file format PDF, MS Word Doc, JPEG, PNG</small>
                </div>
            </div>

        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Start Date
            </div>
            <div class="col-lg-8">
                <div class="col-lg-4">
                    <input class="text" type="date" id="start_date" name="start_date" required="">
                </div>
                <div class="col-lg-4 text-box">
                    End Date<small style="font-style: italic">(Expected) </small>
                </div>
                <div class="col-lg-4">
                    <input class="text" type="date" id="end_date" name="end_date" required="">
                </div>

            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Graduation Date<small style="font-style: italic">(Expected) </small>
            </div>
            <div class="col-lg-8">
                <div class="col-lg-4">
                    <input class="text" type="date" id="graduation_date" name="graduation_date" required="">
                </div>
                <div class="col-lg-4 text-box">
                    Official Duration
                </div>
                <div class="col-lg-4">
                    <input class="text" type="text" id="official_duration" name="official_duration" placeholder="Year" required="">
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 100%; margin-top: -30vh;">
        <p style="font-family: lato-bold; font-size: 24px;color: white;">
            <button class="btn btn-primary" style="background-color: #121212bd; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                Qualifications 1
            </button>

            <button class="btn btn-primary" style="background-color: #121212bd; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                Qualifications 2
            </button>


            <button class="btn btn-primary" style="background-color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                Qualifications 3
            </button>

            <button class="btn btn-primary" style="background-color: #F15C2B; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                + Qualifications
            </button>
        </p>
    </div>

    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 100%; margin-top: -40vh;">
        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">ACADEMIC QUALIFICATION</p>
    </div>

    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>

    <p style="font-style: italic; font-size: 14px; font-family: lato-light; color: white;">
        Please provide details and attach the degree certificate/diploma
        as well as transcript of the relevant previous degree(s) you obtained, starting with the most recent one.
    </p>
    <input type="button" name="next" class="next action-button" value="Next"/>

</fieldset>