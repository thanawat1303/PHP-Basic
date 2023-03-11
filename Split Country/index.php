<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split </title>
</head>
<body>
    <?php 
        $Asia = ["CentralAsia" => ["Kazakhstan" , "Kyrgyzstan" , "Tajikistan" , "Turkmenistan" , "Uzbekistan"] , 
                 "EasternAsia" => ["China" , "Hong Kong Special Administrative Region" 
                    , "Macao Special Administrative Region"
                    , "Japan" , "Mongolia" , "North Korea"],
                 "SouthernAsia" => ["Afghanistan","Bangladesh","Bhutan","India","Iran","Maldives","Nepal"
                    ,"Pakistan"
                    ,"Sri Lanka"] ,
                 "SouthEasternAsia" => ["Brunei Darussalam","Cambodia","Indonesia","Lao","Malaysia","Myanmar" 
                    ,"Philippines","Singapore","Thailand","Timor-Leste","Viet Nam"],
                 "WesternAsia" => ["Armenia","Azerbaijan","Bahrain","Cyprus","Georgia","Iraq","Israel","Jordan" 
                    ,"Kuwait","Lebanon","Oman","Qatar","Saudi Arabia","State of Palestine","Syrian Arab Republic" 
                    ,"Turkey","United Arab Emirates","Yemen"]
                ];
        $globe = array("Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo","Costa Rica","Cote d'Ivoire","Croatia","Cuba","Cyprus","Czechia","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Eswatini","Ethiopia","Fiji","Finland","France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Grenada","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Morocco","Mozambique","Myanmar","Namibia","Nauru","Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","North Korea","North Macedonia","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Qatar","Romania","Russia","Rwanda","Saint Kitts and Nevis","Saint Lucia","Saint Vincent and the Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe");
        
        function Mutifile( $pathFile , $multifile , $globe , $Asia) {
            
            foreach ($multifile as $file){
                $arrCountry = array();
                $fileO = fopen($pathFile.$file , "r");
                $textFile = fread($fileO,filesize($pathFile.$file));
                foreach ($globe as $country){
                    if(preg_match("/".$country."/i",$textFile)){
                        $textFile = preg_replace("/".$country."/i" , "<span style='color:red'>".$country."</span>" , $textFile);
                        array_push($arrCountry,$country);        
                    }
                }

                echo "<h3 style='margin:0'>".$file."</h3>".
                    $textFile.
                    "<br>";
                echo "<div style='
                                background-color: red;
                                height: 2px;
                                margin: 2px 0px;'></div>";
                echo print_r($arrCountry)."<br>";
                foreach ($Asia as $South => $Ctry) {
                    sort($arrCountry);
                    foreach ($arrCountry as $cty) {
                        if(preg_grep("/".$cty."/i" , $Ctry)){
                            if(!isset($i)){
                                echo $South . " => ";
                                $i = 0;
                            } else {
                                echo " | ";
                            }
                            echo $cty;
                        }
                    }
                    echo isset($i) ? "<br>" : "";
                    unset($i);
                }
                echo "<div style='
                                background-color: red;
                                height: 3px;
                                margin: 3px 0px;'></div>";
                echo "<br>";
            }
        }

        $fileName = ["hw-doc01.txt" , "hw-doc02.txt" , "hw-doc03.txt"];
        Mutifile("assets/" , $fileName , $globe , $Asia);
    ?>
</body>
</html>