<?php

namespace  App\Service;

class PythagorUtility {


    public function display () : string
    {
        $html = "<H1>ANDRIAN JOHANNE</H1> 
        <table style=\"width: 500px; text-align:center; border: solid ;border-collapse : collapse;\" >
        <thead >
            <th >0</th>
        ";
        
            for ($i = 1; $i <= 10; $i++) {
               $html .= "<th style=\"width: 500px; border: solid ;\">$i</th>";
            }
        $html .= "</thead>
        <tbody>
        ";

            for ($i = 1; $i <= 10; $i++) {
                $html .= "<tr style=\"width: 500px; border: solid ;\">";
                $html .= "<td>$i</td>";
                for ($j = 1; $j <= 10; $j++) {
                    $html .= "<td  style=\"border: 3px solid black;\">";
                    $resul = $i === $j ? "X"  : $i*$j;
                    $html .= "$resul";
                    $html .= "</td>";
                }
                $html .= ("</tr>");
            }
          
            $html .= "</tbody>";
            $html .= "</table>";
        return $html;
    }
}