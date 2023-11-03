// $(document).ready(function () {
// birthdate

$("#g_dateofbirth").focusout(function () {
    let inputDate = $("#g_dateofbirth").val();
    let currentDate = new Date();
    let eighteenYearsAgo = new Date();
    let maxAge = new Date();

    eighteenYearsAgo.setFullYear(currentDate.getFullYear() - 18);
    maxAge.setFullYear(currentDate.getFullYear() - 70);

    let parsedInputDate = new Date(inputDate)

    if (!inputDate) {
        return;
    }
    if (parsedInputDate > eighteenYearsAgo) {
        alert("Age must be 18 years old and above");
        $("#g_dateofbirth").val("");
    } else if (parsedInputDate < maxAge) {
        alert("Invalid year it exceeds the expected input");
        $("#g_dateofbirth").val("");
    } else {
        let age = currentDate.getFullYear() - parsedInputDate.getFullYear();
        if (currentDate < new Date(currentDate.getFullYear(), parsedInputDate.getMonth(), parsedInputDate.getDate())) {
            age--;

        }

        $('#g_age').val(age);
    }
});



// DROPDOWN
let g_country = $('#g_country');
let g_province = $('#g_province');
let g_city = $('#g_municipality');


$.get('/json/countries.json', function (data) {

    $.each(data, function (countryName, cities) {
        g_country.append($('<option />').val(countryName).text(countryName.toUpperCase()));
    });
});

g_country.on('change', function () {
    if (g_country.val() == 'Philippines') {
        g_city.empty();
        g_province.prop('disabled', false);
    } else {
        g_province.prop('disabled', true);
        g_city.empty();
        $.get('/json/countries.json', function (data) {

            let g_countryval = $('#g_country').val();
            g_city.empty();
            g_city.append($('<option />').val('').text('--SELECT MUNICIPALITY--').prop('hidden', true));

            $.each(data[g_countryval], function (countryName, cities) {
                g_city.append($('<option />').val(cities).text(cities.toUpperCase()));
                console.log(cities);
            });
        });
    }
})




$.get('/json/refprovince.json', function (data) {
    let dropdown = $('#g_province');
    let code;
    let city_dropdown = $('#g_municipality')
    $.each(data.RECORDS, function (index, region) {
        dropdown.append($('<option />').val(region.provDesc).text(region.provDesc));
    });
    // 1
    $('#g_province').on('change', function () {
        city_dropdown.empty();
        city_dropdown.append($('<option />').val('').text('--SELECT MUNICIPALITY--').prop('hidden', true));

        switch (dropdown.val()) {
            case "ILOCOS NORTE":
                code = "0128";
                break;
            case "ILOCOS SUR":
                code = "0129";
                break;
            case "LA UNION":
                code = "0133";
                break;
            case "PANGASINAN":
                code = "0155";
                break;
            case "BATANES":
                code = "0209";
                break;
            case "CAGAYAN":
                code = "0215";
                break;
            case "ISABELA":
                code = "0231";
                break;
            case "NUEVA VIZCAYA":
                code = "0250";
                break;
            case "QUIRINO":
                code = "0257";
                break;
            case "BATAAN":
                code = "0308";
                break;
            case "BULACAN":
                code = "0314";
                break;
            case "NUEVA ECIJA":
                code = "0349";
                break;
            case "PAMPANGA":
                code = "0354";
                break;
            case "TARLAC":
                code = "0369";
                break;
            case "ZAMBALES":
                code = "0371";
                break;
            case "AURORA":
                code = "0377";
                break;
            case "BATANGAS":
                code = "0410";
                break;
            case "CAVITE":
                code = "0421";
                break;
            case "LAGUNA":
                code = "0434";
                break;
            case "QUEZON":
                code = "0456";
                break;
            case "RIZAL":
                code = "0458";
                break;
            case "MARINDUQUE":
                code = "1740";
                break;
            case "OCCIDENTAL MINDORO":
                code = "1751";
                break;
            case "ORIENTAL MINDORO":
                code = "1752";
                break;
            case "PALAWAN":
                code = "1753";
                break;
            case "ROMBLON":
                code = "1759";
                break;
            case "ALBAY":
                code = "0505";
                break;
            case "CAMARINES NORTE":
                code = "0516";
                break;
            case "CAMARINES SUR":
                code = "0517";
                break;
            case "CATANDUANES":
                code = "0520";
                break;
            case "MASBATE":
                code = "0541";
                break;
            case "SORSOGON":
                code = "0562";
                break;
            case "AKLAN":
                code = "0604";
                break;
            case "ANTIQUE":
                code = "0606";
                break;
            case "CAPIZ":
                code = "0619";
                break;
            case "ILOILO":
                code = "0630";
                break;
            case "NEGROS OCCIDENTAL":
                code = "0645";
                break;
            case "GUIMARAS":
                code = "0679";
                break;
            case "BOHOL":
                code = "0712";
                break;
            case "CEBU":
                code = "0722";
                break;
            case "NEGROS ORIENTAL":
                code = "0746";
                break;
            case "SIQUIJOR":
                code = "0761";
                break;
            case "EASTERN SAMAR":
                code = "0826";
                break;
            case "LEYTE":
                code = "0837";
                break;
            case "NORTHERN SAMAR":
                code = "0848";
                break;
            case "SAMAR (WESTERN SAMAR)":
                code = "0860";
                break;
            case "SOUTHERN LEYTE":
                code = "0864";
                break;
            case "BILIRAN":
                code = "0878";
                break;
            case "ZAMBOANGA DEL NORTE":
                code = "0972";
                break;
            case "ZAMBOANGA DEL SUR":
                code = "0973";
                break;
            case "ZAMBOANGA SIBUGAY":
                code = "0983";
                break;
            case "CITY OF ISABELA":
                code = "0997";
                break;
            case "BUKIDNON":
                code = "1013";
                break;
            case "CAMIGUIN":
                code = "1018";
                break;
            case "LANAO DEL NORTE":
                code = "1035";
                break;
            case "MISAMIS OCCIDENTAL":
                code = "1042";
                break;
            case "MISAMIS ORIENTAL":
                code = "1043";
                break;
            case "DAVAO DEL NORTE":
                code = "1123";
                break;
            case "DAVAO DEL SUR":
                code = "1124";
                break;
            case "DAVAO ORIENTAL":
                code = "1125";
                break;
            case "COMPOSTELA VALLEY":
                code = "1182";
                break;
            case "DAVAO OCCIDENTAL":
                code = "1186";
                break;
            case "COTABATO (NORTH COTABATO)":
                code = "1247";
                break;
            case "SOUTH COTABATO":
                code = "1263";
                break;
            case "SULTAN KUDARAT":
                code = "1265";
                break;
            case "SARANGANI":
                code = "1280";
                break;
            case "COTABATO CITY":
                code = "1298";
                break;
            case "NCR, CITY OF MANILA, FIRST DISTRICT":
            case "CITY OF MANILA":
                code = "1339";
                break;
            case "NCR, SECOND DISTRICT":
                code = "1374";
                break;
            case "NCR, THIRD DISTRICT":
                code = "1375";
                break;
            case "NCR, FOURTH DISTRICT":
                code = "1376";
                break;
            case "ABRA":
                code = "1401";
                break;
            case "BENGUET":
                code = "1411";
                break;
            case "IFUGAO":
                code = "1427";
                break;
            case "KALINGA":
                code = "1432";
                break;
            case "MOUNTAIN PROVINCE":
                code = "1444";
                break;
            case "APAYAO":
                code = "1481";
                break;
            case "BASILAN":
                code = "1507";
                break;
            case "LANAO DEL SUR":
                code = "1536";
                break;
            case "MAGUINDANAO":
                code = "1538";
                break;
            case "SULU":
                code = "1566";
                break;
            case "TAWI-TAWI":
                code = "1570";
                break;
            case "AGUSAN DEL NORTE":
                code = "1602";
                break;
            case "AGUSAN DEL SUR":
                code = "1603";
                break;
            case "SURIGAO DEL NORTE":
                code = "1667";
                break;
            case "SURIGAO DEL SUR":
                code = "1668";
                break;
            case "DINAGAT ISLANDS":
                code = "1685";
                break;
            //continue here

            default:
            // code block
        }
        // if (dropdown.val() == "RIZAL") {
        $.get('/json/refcitymun.json', function (data) {
            let citiesInRizal = [];
            $.each(data.RECORDS, function (index, city) {
                if (city.provCode == code) {
                    citiesInRizal.push(city.citymunDesc);
                    city_dropdown.append($('<option />').val(city.citymunDesc).text(city.citymunDesc));
                }
            });


        })

    })
})




// Ensure the element is enabled by default



$(function () {

    // $('#g_province').prop('disabled', true);
    $(document).on('click', '#save-both', function (e) {
        e.preventDefault();
        groom_main();
        bride_main();
    })


    // $('#document_upload').on('click', () => {

    //     $("#dialog").dialog({
    //         modal: true,
    //         resizable: false,
    //         draggable: false,
    //         height: 450,
    //         width: 450,
    //     });
    // })
    $('input, select').addClass("border border-info");
    $('hr').addClass("border border-dark");


    // $('#groom_form input, #groom_update').prop('disabled', true);
    // $('#bride_form input, #bride_update').prop('disabled', true);


    // $('#groom_modify').on('click', () => {
    //     $('#groom_form input:not(#groom_age), #groom_update').prop('disabled', false);
    // })

    // $('#bride_modify').on('click', () => {
    //     $('#bride_form input:not(#bride_age), #bride_update').prop('disabled', false);
    // })

    fetchgroom();

    function fetchgroom() {
        $.ajax({
            type: "GET",
            url: "/fetch-groom",
            dataType: "json",
            success: function (response) {
                // console.log(response);
                // let res = JSON.parse(response)
                if (response.status == 200) {


                    console.log(response);

                    // console.log(response.grooms[0]);
                    // let res = response.grooms[0];
                    $('tbody').html("");
                    $('#lastname').val(response.grooms.lastname);
                    // $.each(response.students, function(key, item) {
                    //     lastname
                    // });
                } else {
                    console.log(response.message);
                }
            }
        });
    }




    function groom_main() {
        let data = {
            'firstname': $('#g_firstname').val(),
            'middlename': $('#g_middlename').val(),
            'lastname': $('#g_lastname').val(),
            'dateofbirth': $('#g_dateofbirth').val(),
            'age': $('#g_age').val(),
            'municipality': $('#g_municipality').val(),
            'province': $('#g_province').val(),
            'country': $('#g_country').val(),
            'sex': $('#g_sex').val(),
            'citizenship': $('#g_citizenship').val(),
            'reshouseno': $('#g_reshouseno').val(),
            'resprovince': $('#g_resprovince').val(),
            'rescity': $('#g_rescity').val(),
            'resbarangay': $('#g_resbarangay').val(),
            'rescountry': $('#g_rescountry').val(),
            'religion': $('#g_religion').val(),
            'civilstatus': $('#g_civilstatus').val(),
            'reasonofdissolve': $('#g_reasonofdissolve').val(),
            'dis_municipality': $('#g_dis_municipality').val(),
            'dis_province': $('#g_dis_province').val(),
            'dis_country': $('#g_dis_country').val(),
            'dis_date': $('#g_dis_date').val(),
            'degree_of_rel': $('#g_degree_of_rel').val(),
            'fathername': $('#g_fathername').val(),
            'fathermname': $('#g_fathermname').val(),
            'fatherlname': $('#g_fatherlname').val(),
            'fathercitizen': $('#g_fathercitizen').val(),
            'fatherhouseno': $('#g_fatherhouseno').val(),
            'fatherprovince': $('#g_fatherprovince').val(),
            'fathercity': $('#g_fathercity').val(),
            'fatherbarangay': $('#g_fatherbarangay').val(),
            'fathercountry': $('#g_fathercountry').val(),
            'motherfname': $('#g_motherfname').val(),
            'mothermname': $('#g_mothermname').val(),
            'motherlname': $('#g_motherlname').val(),
            'mothercitizen': $('#g_mothercitizen').val(),
            'motherhouseno': $('#g_motherhouseno').val(),
            'motherprovince': $('#g_motherprovince').val(),
            'mothercity': $('#g_mothercity').val(),
            'motherbarangay': $('#g_motherbarangay').val(),
            'mothercountry': $('#g_mothercountry').val(),
            'consent': $('#g_consent').val(),
            'consentrel': $('#g_consentrel').val(),
            'consentcitizen': $('#g_consentcitizen').val(),
            'consenthouseno': $('#g_consenthouseno').val(),
            'consentprovince': $('#g_consentprovince').val(),
            'consentcity': $('#g_consentcity').val(),
            'consentbarangay': $('#g_consentbarangay').val(),
            'consentcountry': $('#g_consentcountry').val()
        };



        console.log(data);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "post",
            url: "/update-groom",
            data: data,
            dataType: "json",
            success: function (response) {
                // console.log(response);
                if (response.status == 200) {
                    console.log(response.message);
                } else {
                    console.log(response.message);
                    $.ajax({
                        type: "post",
                        url: "/create-groom",
                        data: data,
                        dataType: "json",
                        success: function (response) {
                            // console.log(response);
                            console.log(response.message);
                        }
                    });

                    // $('#update_msgList').html("");

                    // $('#success_message').addClass('alert alert-success');
                    // $('#success_message').text(response.message);
                    // $('#editModal').find('input').val('');
                    // $('.update_student').text('Update');
                    // $('#editModal').modal('hide');
                    // fetchstudent();

                }
            }
        });
    }



    function bride_main() {
        let data = {
            'firstname': $('#b_firstname').val(),
            'middlename': $('#b_middlename').val(),
            'lastname': $('#b_lastname').val(),
            'dateofbirth': $('#b_dateofbirth').val(),
            'age': $('#b_age').val(),
            'municipality': $('#b_municipality').val(),
            'province': $('#b_province').val(),
            'country': $('#b_country').val(),
            'sex': $('#b_sex').val(),
            'citizenship': $('#b_citizenship').val(),
            'reshouseno': $('#b_reshouseno').val(),
            'resprovince': $('#b_resprovince').val(),
            'rescity': $('#b_rescity').val(),
            'resbarangay': $('#b_resbarangay').val(),
            'rescountry': $('#b_rescountry').val(),
            'religion': $('#b_religion').val(),
            'civilstatus': $('#b_civilstatus').val(),
            'reasonofdissolve': $('#b_reasonofdissolve').val(),
            'dis_municipality': $('#b_dis_municipality').val(),
            'dis_province': $('#b_dis_province').val(),
            'dis_country': $('#b_dis_country').val(),
            'dis_date': $('#b_dis_date').val(),
            'degree_of_rel': $('#b_degree_of_rel').val(),
            'fathername': $('#b_fathername').val(),
            'fathermname': $('#b_fathermname').val(),
            'fatherlname': $('#b_fatherlname').val(),
            'fathercitizen': $('#b_fathercitizen').val(),
            'fatherhouseno': $('#b_fatherhouseno').val(),
            'fatherprovince': $('#b_fatherprovince').val(),
            'fathercity': $('#b_fathercity').val(),
            'fatherbarangay': $('#b_fatherbarangay').val(),
            'fathercountry': $('#b_fathercountry').val(),
            'motherfname': $('#b_motherfname').val(),
            'mothermname': $('#b_mothermname').val(),
            'motherlname': $('#b_motherlname').val(),
            'mothercitizen': $('#b_mothercitizen').val(),
            'motherhouseno': $('#b_motherhouseno').val(),
            'motherprovince': $('#b_motherprovince').val(),
            'mothercity': $('#b_mothercity').val(),
            'motherbarangay': $('#b_motherbarangay').val(),
            'mothercountry': $('#b_mothercountry').val(),
            'consent': $('#b_consent').val(),
            'consentrel': $('#b_consentrel').val(),
            'consentcitizen': $('#b_consentcitizen').val(),
            'consenthouseno': $('#b_consenthouseno').val(),
            'consentprovince': $('#b_consentprovince').val(),
            'consentcity': $('#b_consentcity').val(),
            'consentbarangay': $('#b_consentbarangay').val(),
            'consentcountry': $('#b_consentcountry').val()
        };



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "post",
            url: "/update-bride",
            data: data,
            dataType: "json",
            success: function (response) {
                // console.log(response);
                if (response.status == 200) {
                    console.log(response.message + "updating");
                } else {
                    console.log(response.message + "bride");
                    $.ajax({
                        type: "post",
                        url: "/create-bride",
                        data: data,
                        dataType: "json",
                        success: function (response) {
                            // console.log(response);
                            console.log(response.message + " creating");
                        }
                    });

                    // $('#update_msgList').html("");

                    // $('#success_message').addClass('alert alert-success');
                    // $('#success_message').text(response.message);
                    // $('#editModal').find('input').val('');
                    // $('.update_student').text('Update');
                    // $('#editModal').modal('hide');
                    // fetchstudent();

                }
            }
        });
    }

})