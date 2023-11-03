<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>

    </style>

    <div class="py-6" id="form-container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> --}}
            <div class="sm:rounded-lg" id="inner-div">
                {{-- <div class="p-6 bg-white border-b border-gray-200"> --}}
                <div class="p-6">
                    <div class="text-center">
                        <h4 class="font-sans fw-bold" style="color:white;">APPLICATION FOR MARRIAGE LICENSE</h4>
                    </div>
                    {{-- You're logged in!
                    <input type="text" id="HBlname"> --}}
                    <div class="row">
                        <div class="col-lg-5 text-center details">GROOM DETAILS <a class="" id="groom_modify"
                                style="cursor: pointer;">Click
                                here to
                                update</a></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 text-center details">BRIDE DETAILS <a class="" id="bride_modify"
                                style="cursor: pointer;">Click here to update</a>
                        </div>
                    </div>


                    <div id="dialog" style="display: none;" title="Documents">
                        <p>This is the default dialog which is useful for displaying information. The dialog window
                            can be moved, resized and closed with the 'x' icon.</p>
                    </div>
                    <div id="sub-inner" class="row rounded">
                        {{-- Groom --}}

                        <div class="col-lg-5 p-3">
                            <form action="" method="post" id="groom_form">
                                @csrf
                                {{-- 1 --}}
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">First
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_firstname"
                                            class="form-control h-75 border border-info" maxlength="50">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Middle
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_middlename"
                                            class="form-control h-75" maxlength="50"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Last
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_lastname"
                                            class="form-control h-75" maxlength="50"></div>
                                </div>
                                <hr>
                                {{-- 2 --}}

                                <div class="row">
                                    <div class="col-lg-6">
                                        <small for="" class="form-label font-mono">Date of
                                            Birth:</small>
                                        <input type="date" id="g_dateofbirth" class="form-control h-50"
                                            min='1950-01-01' max='2000-01-01' placeholder="mm/dd/yyyy" required>
                                        <script></script>
                                    </div>
                                    <div class="col-lg-4">
                                        <small for="" class="form-label font-mono">Age:</small>
                                        <input type="text" id="g_age" class="form-control h-50" readonly>
                                    </div>
                                </div>
                                <hr>
                                {{-- 3 --}}

                                <div class="row pt-1">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="g_country" class="form-select pl-1 pt-0 pb-0 pr-0">
                                            <option value="PHILIPPINES" hidden>PHILIPPINES</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="g_province" class="form-select pl-1 pt-0 pb-0 pr-0">
                                            <option value="" hidden>--FOR PHILIPPINES--</option>
                                        </select>
                                        <span class="p-0 bg-warning text-xs">Foreign countries do not need to choose a
                                            province.</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Municipality:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="g_municipality" class="form-select pl-1 pt-0 pb-0 pr-0">
                                            <option value="" hidden>--SELECT CITY--</option>
                                        </select>

                                    </div>

                                </div>

                                <hr>
                                {{-- 4 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small for="" class="form-label font-mono">Male/Female:</small>
                                        <input type="text" id="g_sex" class="form-control h-50" readonly
                                            value="Male">
                                    </div>
                                    <div class="col-lg-8">
                                        <small for="" class="form-label font-mono">Citizenship</small>
                                        <input type="text" id="g_citizenship" class="form-control h-50">
                                    </div>
                                </div>
                                <hr>
                                {{-- 5 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">House No., St.,</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_reshouseno" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_resprovince" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">City:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_rescity" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Barangay:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_resbarangay" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_rescountry" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 6 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="g_religion" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 7 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="g_civilstatus" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 8 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="g_reasonofdissolve" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 9 --}}
                                <div class="row">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Municipality:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_dis_municipality"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_dis_province"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_dis_country"
                                            class="form-control h-75"></div>
                                </div>
                                <hr>
                                {{-- 10 --}}

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="date" id="g_dis_date" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 11 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="g_degree_of_rel" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 12 --}}
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">First
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_fathername"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Middle
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_fathermname"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Last
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_fatherlname"
                                            class="form-control h-75"></div>
                                </div>
                                <hr>
                                {{-- 13 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="g_fathercitizen" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 14 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">House No., St.,</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_fatherhouseno" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_fatherprovince" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">City:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_fathercity" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Barangay:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_fatherbarangay" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_fathercountry" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 15 --}}
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">First
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_motherfname"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Middle
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_mothermname"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Last
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="g_motherlname"
                                            class="form-control h-75"></div>
                                </div>
                                <hr>
                                {{-- 16 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="g_mothercitizen" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>

                                {{-- 17 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">House No., St.,</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_motherhouseno" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_motherprovince" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">City:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_mothercity" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Barangay:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_motherbarangay" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_mothercountry" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 18 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="g_consent" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 19 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="g_consentrel" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 20 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="g_consentcitizen" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 21 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">House No., St.,</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_consenthouseno" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_consentprovince" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">City:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_consentcity" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Barangay:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_consentbarangay" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="g_consentcountry" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                {{-- <button type="submit" class="btn btn-success" id="groom_update"
                                    value="save">Save</button> --}}
                            </form>
                        </div>


                        {{-- Middle --}}
                        <div class="col-lg-2 d-none d-lg-block" id="mid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 138px;">
                                        <small class="font-mono">1. Name of
                                            Applicant</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 94px;">
                                        <small class="font-mono">2. Date of Birth / Age</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 140px;">
                                        <small class="font-mono">3. Place of Birth</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 93px;">
                                        <small class="font-mono">4. Sex / Citizenship</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 210px;">
                                        <small class="font-mono">5. Residence</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 69px;">
                                        <small class="font-mono">6. Religion/Religious Sect</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 69px;">
                                        <small class="font-mono">7. Civil Status</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 69px;">
                                        <small class="font-mono">8. IF PREVIOUSLY MARRIED: How was it
                                            dissolved?</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 139px;">
                                        <small class="font-mono">9. Place where dissolved</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 72px;">
                                        <small class="font-mono">10. Date when dissolved</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 69px;">
                                        <small class="font-mono">11. Degree of relationship of contracting
                                            parties</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 137px;">
                                        <small class="font-mono">12. Name of Father</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 69px;">
                                        <small class="font-mono">13. Citizenship</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 210px;">
                                        <small class="font-mono">14. Residence</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 139px;">
                                        <small class="font-mono">15. Maiden Name of Mother</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 69px;">
                                        <small class="font-mono">16. Citizenship</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 209px;">
                                        <small class="font-mono">17. Residence</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 69px;">
                                        <small class="font-mono">18. Person who gave consent or advice</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 69px;">
                                        <small class="font-mono">19. Relationship</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-bottom border-black"
                                        style="height: 69px;">
                                        <small class="font-mono">20. Citizenship</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center border-black" style="height: 209px;">
                                        <small class="font-mono">21. Residence</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Bride --}}

                        <div class="col-lg-5 p-3">
                            <form action="" id="bride_form">

                                @csrf
                                {{-- 1 --}}
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">First
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_firstname"
                                            class="form-control h-75 border border-info">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Middle
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_middlename"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Last
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_lastname"
                                            class="form-control h-75"></div>
                                </div>
                                <hr>
                                {{-- 2 --}}

                                <div class="row">

                                    <div class="col-lg-6">
                                        <small for="" class="form-label font-mono">Date of
                                            Birth:</small>
                                        <input type="date" id="b_dateofbirth" class="form-control h-50">
                                    </div>
                                    <div class="col-lg-4">
                                        <small for="" class="form-label font-mono">Age:</small>
                                        <input type="text" id="b_age" class="form-control h-50" readonly>
                                    </div>
                                </div>
                                <hr>
                                {{-- 3 --}}

                                <div class="row pt-1">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="b_country" class="form-select pl-1 pt-0 pb-0 pr-0">
                                            <option value="PHILIPPINES" hidden>PHILIPPINES</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="b_province" class="form-select pl-1 pt-0 pb-0 pr-0">
                                            <option value="" hidden>--FOR PHILIPPINES--</option>
                                        </select>
                                        <span class="p-0 bg-warning text-xs">Foreign countries do not need to choose a
                                            province.</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Municipality:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="b_municipality" class="form-select pl-1 pt-0 pb-0 pr-0">
                                            <option value="" hidden>--SELECT CITY--</option>
                                        </select>

                                    </div>

                                </div>

                                <hr>
                                {{-- 4 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small for="" class="form-label font-mono">Male/Female:</small>
                                        <input type="text" id="b_sex" class="form-control h-50" readonly
                                            value="Female">
                                    </div>
                                    <div class="col-lg-8">
                                        <small for="" class="form-label font-mono">Citizenship</small>
                                        <input type="text" id="b_citizenship" class="form-control h-50">
                                    </div>
                                </div>
                                <hr>
                                {{-- 5 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">House No., St.,</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_reshouseno" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_resprovince" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">City:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_rescity" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Barangay:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_resbarangay" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_rescountry" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 6 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="b_religion" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 7 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="b_civilstatus" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 8 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="b_reasonofdissolve" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 9 --}}
                                <div class="row">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Municipality:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_dis_municipality"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_dis_province"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for=""
                                            class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_dis_country"
                                            class="form-control h-75"></div>
                                </div>
                                <hr>
                                {{-- 10 --}}

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="date" id="b_dis_date" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 11 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="b_degree_of_rel" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 12 --}}
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">First
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_fathername"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Middle
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_fathermname"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Last
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_fatherlname"
                                            class="form-control h-75"></div>
                                </div>
                                <hr>
                                {{-- 13 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="b_fathercitizen" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 14 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">House No., St.,</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_fatherhouseno" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_fatherprovince" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">City:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_fathercity" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Barangay:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_fatherbarangay" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_fathercountry" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 15 --}}
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">First
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_motherfname"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Middle
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_mothermname"
                                            class="form-control h-75"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"> <small for="" class="form-label font-mono">Last
                                            Name:</small>
                                    </div>
                                    <div class="col-lg-8"> <input type="text" id="b_motherlname"
                                            class="form-control h-75"></div>
                                </div>
                                <hr>
                                {{-- 16 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="b_mothercitizen" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>

                                {{-- 17 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">House No., St.,</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_motherhouseno" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_motherprovince" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">City:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_mothercity" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Barangay:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_motherbarangay" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_mothercountry" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 18 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="b_consent" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 19 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="b_consentrel" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 20 --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" id="b_consentcitizen" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <hr>
                                {{-- 21 --}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">House No., St.,</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_consenthouseno" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Province:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_consentprovince" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">City:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_consentcity" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Barangay:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_consentbarangay" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <small class="form-label font-mono">Country:</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="b_consentcountry" class="form-control h-75"
                                            name="">
                                    </div>
                                </div>
                                {{-- <button type="submit" class="btn btn-success" id="bride_update">Save</button> --}}

                            </form>

                        </div>

                        <button id="save-both" class="p-2 btn btn-success font-sans fw-bold">CLICK TO SAVE</button>

                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <script src="{{ asset('/js/jquery-3.7.1.min.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>

    <script></script>
</x-app-layout>
