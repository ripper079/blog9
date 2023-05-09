<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonController extends Controller
{
    //
    function listone()
    {


        $person = [
            "firstname" => "Stora",
            "lastname" => "Bamse",
            "age" => 84
        ];
        return $person;
    }

    function listall()
    {

        $persons = [    
                        [
                            "firstname" => "Stora", 
                            "lastname" => "Bamse", 
                            "age" => 84
                        ],
                        [
                            "firstname" => "Pell", 
                            "lastname" => "Svanlös", 
                            "age" => 67
                        ],
                        [
                            "firstname" => "Olle", 
                            "lastname" => "Bengtsson", 
                            "age" =>23
                        ]
                ];

        return $persons;
    }



    function addrambohero()
    {
        //IN php this works
        //http_response_code(404);
        
        $data = ["Result" => "A user Rambo has been"];

        return response()->json($data, 201);
        
    }

    function addperson($idofperson)
    {
        $data = ["Result" => "A fake person with id $idofperson has been added"]; 
        //return $data;

        $responseWithStatusCode = response()->json($data, 201);

        return $responseWithStatusCode;
    }

    function addpersonjson(Request $req)
    {
        //json must match, "normal" formatting
        // {
        //     "firstname" : "Daniel",
        //     "lastname" : "Oikarainen",
        //     "age" : 43
        // }

        $receivedfirstname = $req->firstname;
        $receivedlastname = $req->lastname;
        $receivedage = $req->age;

        //Save to db here in real world


        $data = ["Result" => "A real person with name $receivedfirstname $receivedlastname with age $receivedage"];
        //Add Response code (aka response status) to the response
        return response()->json($data, 201);
        
        //return ["Result" => "A real person with name $receivedfirstname $receivedlastname with age $receivedage"];
    }


    function removeperson($idofperson)
    {
        //Interact with db, locate idofperson and delete it

        //This actually gets discarded when performing a DELETE verb to the response
        $data = ["Result" => "A person with id = $idofperson was deleted"];    
        $responseWithStatusCode = response()->json($data, 204);


        return $responseWithStatusCode;
    }

    
    function modifyperson($idpersontomodify)
    {
        //Interact with db, locate idofperson and delete it

        $data = ["Result" => "A person with id ($idpersontomodify has been Edited"]; 

        $responseWithStatusCode = response()->json($data, 202);

        return $responseWithStatusCode;

    }
    
}
