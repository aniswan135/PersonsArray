<?php
    $persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

    foreach ($persons_array as $key => &$val) {
    $fullname = $val['fullname'];
    list($surname, $name, $patronomyc) = explode(" ", $fullname);
    }

    foreach ($persons_array as $val1) {
    $fullname1 = $val1['fullname'];
    }

    function getFullnameFromParts ($surname, $name, $patronomyc) {
        echo $surname." ".$name." ".$patronomyc." "."<br>";
    }

    getFullnameFromParts(Иванов, Иван, Иванович);
    getFullnameFromParts(Степанова, Наталья, Степановна);
    getFullnameFromParts(Пащенко, Владимир, Александрович);
    getFullnameFromParts(Громов, Александр, Иванович);
    getFullnameFromParts(Славин, Семён, Сергеевич);
    getFullnameFromParts(Цой, Владимир, Антонович);
    getFullnameFromParts(Быстрая, Юлия, Сергеевна);
    getFullnameFromParts(Шматко, Антонина, Сергеевна);
    getFullnameFromParts("аль-Хорезми", Мухаммад, "ибн-Муса");
    getFullnameFromParts(Бардо, Жаклин, Фёдоровна);
    getFullnameFromParts(Шварцнегер, Арнольд, Густавович);

    function getPartsFromFullname ($fullname1) {
        $parts = (explode(" ", $fullname1));
        print_r($parts);
        print_r('<br>');
    }

    getPartsFromFullname('Иванов Иван Иванович');
    getPartsFromFullname('Степанова Наталья Степановна');
    getPartsFromFullname('Пащенко Владимир Александрович');
    getPartsFromFullname('Громов Александр Иванович');
    getPartsFromFullname('Славин Семён Сергеевич');
    getPartsFromFullname('Цой Владимир Антонович');
    getPartsFromFullname('Быстрая Юлия Сергеевна');
    getPartsFromFullname('Шматко Антонина Сергеевна');
    getPartsFromFullname('аль-Хорезми Мухаммад ибн-Муса');
    getPartsFromFullname('Бардо Жаклин Фёдоровна');
    getPartsFromFullname('Шварцнегер Арнольд Густавович');


    function getShortName ($fullname1) {
        list($surname, $name, $patronomyc) = explode(" ", $fullname1);
        $shortsurname = mb_substr($surname, 0, 1);
        $shortname = $name." ".$shortsurname."."."<br>";
        $short = str_replace($fullname1, $shortname, $fullname1);
        echo $short;
    }

    getShortName('Иванов Иван Иванович');
    getShortName('Степанова Наталья Степановна');
    getShortName('Пащенко Владимир Александрович');
    getShortName('Громов Александр Иванович');
    getShortName('Славин Семён Сергеевич');
    getShortName('Цой Владимир Антонович');
    getShortName('Быстрая Юлия Сергеевна');
    getShortName('Шматко Антонина Сергеевна');
    getShortName('аль-Хорезми Мухаммад ибн-Муса');
    getShortName('Бардо Жаклин Фёдоровна');
    getShortName('Шварцнегер Арнольд Густавович');

    function getGenderFromName ($fullname1) {
        list($surname, $name, $patronomyc) = explode(" ", $fullname1);
        $mainGender = 0;
          if(mb_strripos($surname,"в", -1,"utf-8")) {
            $mainGender ++;
          }
          if(mb_strripos($name,"й", -1,"utf-8")) {
            $mainGender ++;
          }
          if(mb_strripos($name,"н", -1,"utf-8")) {
            $mainGender ++;
          }
          if(mb_strripos($patronomyc,"ич", -1,"utf-8")) {
            $mainGender ++;
          }
          if(mb_strripos($surname,"ва", -1,"utf-8")) {
            $mainGender --;
          }
          if(mb_strripos($name,"а", -1,"utf-8")) {
            $mainGender --;
          }
          if(mb_strripos($patronomyc,"вна", -1,"utf-8")) {
            $mainGender --;
          }

          if ($mainGender >= 1) {
            echo $fullname1.' - мужчина<br>';
          } else if ($mainGender === 0) {
            echo $fullname1.' - пол неопределен<br>';
          } else {
            echo $fullname1.' - женщина<br>';
          }

    }

    getGenderFromName('Иванов Иван Иванович');
    getGenderFromName('Степанова Наталья Степановна');
    getGenderFromName('Пащенко Владимир Александрович'); 
    getGenderFromName('Громов Александр Иванович');
    getGenderFromName('Славин Семён Сергеевич');
    getGenderFromName('Цой Владимир Антонович');
    getGenderFromName('Быстрая Юлия Сергеевна');
    getGenderFromName('Шматко Антонина Сергеевна');
    getGenderFromName('аль-Хорезми Мухаммад ибн-Муса');
    getGenderFromName('Бардо Жаклин Фёдоровна');
    getGenderFromName('Шварцнегер Арнольд Густавович');


    $gender_array = [
      'Иванов Иван Иванович' => 'мужчина',
      'Степанова Наталья Степановна' => 'женщина',
      'Пащенко Владимир Александрович' => 'пол неопределен',
      'Громов Александр Иванович' => 'мужчина',
      'Славин Семён Сергеевич' => 'мужчина',
      'Цой Владимир Антонович' => 'пол неопределен',
      'Быстрая Юлия Сергеевна' => 'женщина',
      'Шматко Антонина Сергеевна' => 'женщина',
      'аль-Хорезми Мухаммад ибн-Муса' => 'женщина',
      'Бардо Жаклин Фёдоровна' => 'женщина',
      'Шварцнегер Арнольд Густавович' => 'мужчина'
    ];


    $result = array_count_values($gender_array);
    $men = $result['мужчина'];
    $women = $result['женщина'];
    $neutral = $result['пол неопределен'];
    $sum = count($gender_array);

    $countMen = round((($men/$sum)*100),1);
    $countFemale = round((($women/$sum)*100),1);
    $countNeutral = round((($neutral/$sum)*100),1);


    function getGenderDescription ($countMen, $countFemale, $countNeutral) {
      echo 'мужчины - '.$countMen.'%<br>'.'женщины - '.$countFemale.'%<br>'.'пол не определен - '.$countNeutral.'%<br>';
    }

    getGenderDescription($countMen, $countFemale, $countNeutral);



?>

