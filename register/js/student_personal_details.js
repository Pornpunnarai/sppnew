if(obj.title!=null){
    var radios = $('input:radio[name=title_name]');
    if(radios.is(':checked') === false) {
        var title = "\""+obj.title+"\"";
        radios.filter("[value="+title+"]").prop('checked', true);
    }
}
document.getElementById("firstname").value = obj.first_name;
document.getElementById("middlename").value = obj.middle_name;
document.getElementById("familyname").value = obj.last_name;
document.getElementById("citizenship").value = obj.citizenship
document.getElementById("dob").value = obj.date_of_birth;
document.getElementById("conutryofbirth").value = obj.country_of_birth;
document.getElementById("cityofbirth").value = obj.city_of_birth;
document.getElementById("citizenship").value = obj.citizenship;
document.getElementById("county_permanent").value = obj.county_of_permanent_residence;

// document.getElementById("gender").value = obj.first_name;


document.getElementById("student_personal_details").onchange = function() {student_personal_details()};
function student_personal_details() {

    var title =document.querySelector("input[name=title_name]:checked").value;
    var firstname = document.getElementById("firstname").value;
    var middlename = document.getElementById("middlename").value;
    var lastname = document.getElementById("familyname").value;
    var dob = document.getElementById("dob").value;
    var conutryofbirth = document.getElementById("conutryofbirth").value;
    var cityofbirth = document.getElementById("cityofbirth").value;
    var citizenship = document.getElementById("citizenship").value;
    var county_permanent = document.getElementById("county_permanent").value;


    var student_personal_details = { "student_personal_details": [
            {
                "student_account_id": obj.student_account_id,
                "title": title,
                "firstname": firstname,
                "middlename": middlename,
                "lastname": lastname,
                "dob": dob,
                "conutryofbirth": conutryofbirth,
                "cityofbirth": cityofbirth,
                "citizenship": citizenship,
                "county_permanent": county_permanent}
        ]};
    console.log(JSON.stringify(student_personal_details));


    $.ajax({
        type: 'POST',
        url: 'check-add.php',
        data: JSON.stringify(student_personal_details),
        contentType: 'application/json',
        success: function(msg){
            console.log(msg);
        }

    });

}
function student_personal_details_check() {
    console.log("sssssss")
}
