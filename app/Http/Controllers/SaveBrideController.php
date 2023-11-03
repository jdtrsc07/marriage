<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SaveGroomController;
use App\Models\SaveBride;


class SaveBrideController extends Controller
{
    //


    // private $create_update;


    public function __construct()
    {
        $this->middleware('auth');
        // $this->create_update = new SaveGroomController();
    }



    function updateBride(Request $request)
    {
        $userId = auth()->user()->id;
        $database = SaveBride::where('user_id', $userId)->first();
        $response = $this->input_fields_update($request, $database);
        return $response;

    }

    function createBride(Request $request)
    {

        $userId = auth()->user()->id;
        $database = 'brides';
        $response = $this->input_fields_create($request, $database);
        return $response;
    }

    function input_fields_create(Request $request, $database)
    {

        $userId = auth()->user()->id;
        $lastname = $request->input('lastname');
        $middlename = $request->input('middlename');
        $firstname = $request->input('firstname');
        $dateofbirth = $request->input('dateofbirth');
        $age = $request->input('age');
        $municipality = $request->input('municipality');
        $province = $request->input('province');
        $country = $request->input('country');
        $sex = $request->input('sex');
        $citizenship = $request->input('citizenship');
        $reshouseno = $request->input('reshouseno');
        $resprovince = $request->input('resprovince');
        $rescity = $request->input('rescity');
        $resbarangay = $request->input('resbarangay');
        $rescountry = $request->input('rescountry');
        $religion = $request->input('religion');
        $civilstatus = $request->input('civilstatus');
        $reasonofdissolve = $request->input('reasonofdissolve');
        $dis_municipality = $request->input('dis_municipality');
        $dis_province = $request->input('dis_province');
        $dis_country = $request->input('dis_country');
        $dis_date = $request->input('dis_date');
        $degree_of_rel = $request->input('degree_of_rel');
        $fathername = $request->input('fathername');
        $fathermname = $request->input('fathermname');
        $fatherlname = $request->input('fatherlname');
        $fathercitizen = $request->input('fathercitizen');
        $fatherhouseno = $request->input('fatherhouseno');
        $fatherprovince = $request->input('fatherprovince');
        $fathercity = $request->input('fathercity');
        $fatherbarangay = $request->input('fatherbarangay');
        $fathercountry = $request->input('fathercountry');
        $motherfname = $request->input('motherfname');
        $mothermname = $request->input('mothermname');
        $motherlname = $request->input('motherlname');
        $mothercitizen = $request->input('mothercitizen');
        $motherhouseno = $request->input('motherhouseno');
        $motherprovince = $request->input('motherprovince');
        $mothercity = $request->input('mothercity');
        $motherbarangay = $request->input('motherbarangay');
        $mothercountry = $request->input('mothercountry');
        $consent = $request->input('consent');
        $consentrel = $request->input('consentrel');
        $consentcitizen = $request->input('consentcitizen');
        $consenthouseno = $request->input('consenthouseno');
        $consentprovince = $request->input('consentprovince');
        $consentcity = $request->input('consentcity');
        $consentbarangay = $request->input('consentbarangay');
        $consentcountry = $request->input('consentcountry');

        $query = DB::table($database)->insert([
            'user_id' => $userId,
            'lastname' => $lastname,
            'middlename' => $middlename,
            'firstname' => $firstname,
            'date_of_birth' => $dateofbirth,
            'age' => $age,
            'pob_municipality' => $municipality,
            'pob_province' => $province,
            'pob_country' => $country,
            'sex' => $sex,
            'citizenship' => $citizenship,
            'res_house_no_street' => $reshouseno,
            'res_barangay' => $resbarangay,
            'res_city' => $rescity,
            'res_province' => $resprovince,
            'res_country' => $rescountry,
            'Religion' => $religion,
            'civil_status' => $civilstatus,
            'prev_marriage_dissolved_reason' => $reasonofdissolve,
            'dissolved_municipality' => $dis_municipality,
            'dissolved_province' => $dis_province,
            'dissolved_country' => $dis_country,
            'date_dissolved' => $dis_date,
            'degree_of_relationship' => $degree_of_rel,
            'father_firstname' => $fathername,
            'father_middlename' => $fathermname,
            'father_lastname' => $fatherlname,
            'father_citizenship' => $fathercitizen,
            'father_houseno' => $fatherhouseno,
            'father_barangay' => $fatherbarangay,
            'father_city' => $fathercity,
            'father_province' => $fatherprovince,
            'father_country' => $fathercountry,
            'mother_firstname' => $motherfname,
            'mother_middlename' => $mothermname,
            'mother_lastname' => $motherlname,
            'mother_citizenship' => $mothercitizen,
            'mother_houseno' => $motherhouseno,
            'mother_barangay' => $motherbarangay,
            'mother_city' => $mothercity,
            'mother_province' => $motherprovince,
            'mother_country' => $mothercountry,
            'consent_name' => $consent,
            'consent_relationship' => $consentrel,
            'consent_citizenship' => $consentcitizen,
            'consent_houseno' => $consenthouseno,
            'consent_barangay' => $consentbarangay,
            'consent_city' => $consentcity,
            'consent_province' => $consentprovince,
            'consent_country' => $consentcountry,
            'updated_at' => now()->setTimezone('Asia/Manila')
        ]);

        if ($query) {
            return response()->json([

                'message' => 'created.'
            ]);
        } else {
            return response()->json([

                'message' => 'not created.'
            ]);
        }

    }

    function input_fields_update(Request $request, $record)
    {

        $userId = auth()->user()->id;
        $lastname = $request->input('lastname');
        $middlename = $request->input('middlename');
        $firstname = $request->input('firstname');
        $dateofbirth = $request->input('dateofbirth');
        $age = $request->input('age');
        $municipality = $request->input('municipality');
        $province = $request->input('province');
        $country = $request->input('country');
        $sex = $request->input('sex');
        $citizenship = $request->input('citizenship');
        $reshouseno = $request->input('reshouseno');
        $resprovince = $request->input('resprovince');
        $rescity = $request->input('rescity');
        $resbarangay = $request->input('resbarangay');
        $rescountry = $request->input('rescountry');
        $religion = $request->input('religion');
        $civilstatus = $request->input('civilstatus');
        $reasonofdissolve = $request->input('reasonofdissolve');
        $dis_municipality = $request->input('dis_municipality');
        $dis_province = $request->input('dis_province');
        $dis_country = $request->input('dis_country');
        $dis_date = $request->input('dis_date');
        $degree_of_rel = $request->input('degree_of_rel');
        $fathername = $request->input('fathername');
        $fathermname = $request->input('fathermname');
        $fatherlname = $request->input('fatherlname');
        $fathercitizen = $request->input('fathercitizen');
        $fatherhouseno = $request->input('fatherhouseno');
        $fatherprovince = $request->input('fatherprovince');
        $fathercity = $request->input('fathercity');
        $fatherbarangay = $request->input('fatherbarangay');
        $fathercountry = $request->input('fathercountry');
        $motherfname = $request->input('motherfname');
        $mothermname = $request->input('mothermname');
        $motherlname = $request->input('motherlname');
        $mothercitizen = $request->input('mothercitizen');
        $motherhouseno = $request->input('motherhouseno');
        $motherprovince = $request->input('motherprovince');
        $mothercity = $request->input('mothercity');
        $motherbarangay = $request->input('motherbarangay');
        $mothercountry = $request->input('mothercountry');
        $consent = $request->input('consent');
        $consentrel = $request->input('consentrel');
        $consentcitizen = $request->input('consentcitizen');
        $consenthouseno = $request->input('consenthouseno');
        $consentprovince = $request->input('consentprovince');
        $consentcity = $request->input('consentcity');
        $consentbarangay = $request->input('consentbarangay');
        $consentcountry = $request->input('consentcountry');
        $updated_at = now()->setTimezone('Asia/Manila');
        if ($record) {

            $record->lastname = $lastname;
            $record->middlename = $middlename;
            $record->firstname = $firstname;
            $record->date_of_birth = $dateofbirth;
            $record->age = $age;
            $record->pob_municipality = $municipality;
            $record->pob_province = $province;
            $record->pob_country = $country;
            $record->sex = $sex;
            $record->citizenship = $citizenship;
            $record->res_house_no_street = $reshouseno;
            $record->res_barangay = $resbarangay;
            $record->res_city = $rescity;
            $record->res_province = $resprovince;
            $record->res_country = $rescountry;
            $record->Religion = $religion;
            $record->civil_status = $civilstatus;
            $record->prev_marriage_dissolved_reason = $reasonofdissolve;
            $record->dissolved_municipality = $dis_municipality;
            $record->dissolved_province = $dis_province;
            $record->dissolved_country = $dis_country;
            $record->date_dissolved = $dis_date;
            $record->degree_of_relationship = $degree_of_rel;
            $record->father_firstname = $fathername;
            $record->father_middlename = $fathermname;
            $record->father_lastname = $fatherlname;
            $record->father_citizenship = $fathercitizen;
            $record->father_houseno = $fatherhouseno;
            $record->father_barangay = $fatherbarangay;
            $record->father_city = $fathercity;
            $record->father_province = $fatherprovince;
            $record->father_country = $fathercountry;
            $record->mother_firstname = $motherfname;
            $record->mother_middlename = $mothermname;
            $record->mother_lastname = $motherlname;
            $record->mother_citizenship = $mothercitizen;
            $record->mother_houseno = $motherhouseno;
            $record->mother_barangay = $motherbarangay;
            $record->mother_city = $mothercity;
            $record->mother_province = $motherprovince;
            $record->mother_country = $mothercountry;
            $record->consent_name = $consent;
            $record->consent_relationship = $consentrel;
            $record->consent_citizenship = $consentcitizen;
            $record->consent_houseno = $consenthouseno;
            $record->consent_barangay = $consentbarangay;
            $record->consent_city = $consentcity;
            $record->consent_province = $consentprovince;
            $record->consent_country = $consentcountry;
            $record->updated_at = $updated_at;
            $record->update();

            return response()->json([
                'status' => 200,
                'message' => 'Record Updated.'
            ]);
        } else {

            return response()->json([
                'status' => 300,
                'message' => 'no Record.'
            ]);

        }

    }

}
