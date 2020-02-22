<?php 
    function biodata()
    {    
        return json_encode([
            'name' => 'Intan',
            'Age' => 22,
            'address' => 'Sukabumi',
            'hobbies' => array('musik','fashion'),
            'is_married' => false,
            'list_school' => array([
                'name' => 'SMAN 5 Sukabumi',
                'year_in' => '2012',
                'year_out' => '2015',
                'major' => NULL
            ],
            [
                'name' => 'UIKA Bogor',
                'year_in' => '2015',
                'year_out' => '2019',
                'major' => NULL
                            ]),
            'skills' => array([
                'skill_name' => 'Networking',
                'level'=> 'Beginner'
            ],
            [
                'skill_name' => 'Adobe Photoshop',
                'level'=> 'Beginner'
                            ]),
            'interest_in_coding' => true
        ]);
    }    
    echo biodata(); 
?>