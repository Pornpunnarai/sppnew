<fieldset id="student_submission">
    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Source of funding
            </div>
            <div class="col-lg-8" style="color: white">
                <div class="col-lg-4">
                    Individual Funding Resources
                </div>
                <div class="col-lg-2">
                    <input class="text" type="text" id="individual_funding_resources" name="individual_funding_resources" required="">
                </div>
                <div class="col-lg-1">
                    %
                </div>

            </div>

            <div class="col-lg-1 text-box">
            </div>
            <div class="col-lg-11">
                <div class="col-lg-8" style="color: white;">
                    Do you consider to apply for funding other than CMU Financial Aid
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-4" id="title">
                        <input type="radio" id="question_sub" name="question_sub" value="YES"> <b>YES</b>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4" id="title">
                        <input type="radio" id="question_sub" name="question_sub" value="NO"> <b>NO</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!---->
<!--    <div class="input-container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-3 text-box">-->
<!--                First / Given Name-->
<!--            </div>-->
<!--            <div class="col-lg-8">-->
<!--                <input class="text" type="text" name="sub_firstname" required="">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                Please provide details:
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="detail_1" name="detail_1" required="">
            </div>
        </div>
    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                How did you hear about CMU School of Public Policy?
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="detail_2" name="detail_2" required="">
            </div>
        </div>

    </div>

    <div class="input-container">
        <div class="row">
            <div class="col-lg-3 text-box">
                What do you find most attractive about CMU?
            </div>
            <div class="col-lg-8">
                <input class="text" type="text" id="detail_3" name="detail_3" required="">
            </div>
        </div>

    </div>


    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
            SUBMISSION
        </p>
    </div>

    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
    <input type="submit" name="submit" class="submit action-button" value="Submit"/>

</fieldset>