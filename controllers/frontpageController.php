<?php

class frontpageController
{

    public function frontPage(): void
    {
        $title = "front page";
        $contentText = "
        <p class='title'><strong class='W'>W</strong>il jij een leuke bijbaan?</p>
        <div class='papier'>
        <h2>Wil jij deel deel uitmaken van het Student<br>Windesheim Ambassadeurs Team?<br>(SWAT Team)<br></h2>
        <br>
        <p>
        We zijn op zoek naar active en enthousiaste studenten die als<br>amassadeur onze hogeschool willen vertegenwoordigen. 
        </p>
        <br>
        <p>
        Je voert voorlichtingstaken uit en biedt ondersteuning bij evenementen. Je bent als ambassadeur het gezicht van jouw<br>opleiding en visitekaartje van Windesheim.
        </p>
        </div>
        ";
        include(__DIR__ . "/../views/backpage.view.php");
    }
}
