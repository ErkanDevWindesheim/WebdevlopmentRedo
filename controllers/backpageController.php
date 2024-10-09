<?php


/*--------------------------------------------------//
//                                                  //
//                     Controller:                  //
//                  #backpageController             //
//            Deze class is verantwoordelijk voor   //
//             alle actions, bijvoorbeeld save()    //
//                 functie die vervolgens           //
//                  De model aanroept om            //
//              een query sturen naar de database   //
//                                                  //
//--------------------------------------------------*/

class backpageController 
{
    public function backPage(): void
    {
        $title = "backpage";
        $ContentHTML = "
        <p class='title'><strong class='W'>W</strong>strong</p>
        <div class='papier'>
        <h2>Wil jij deel deel uitmaken van het Student<br>Windesheim Ambassadeurs Team?<br>(SWAT Team)<br></h2>
        <br>
        <p>
        We zijn op zoek naar active en enthousiaste studenten die als<br>amassadeur onze hogeschool willen vertegenwoordigen. 
        </p>
        <br>
        <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        </div>
        ";

        include(__DIR__ . "/../views/backpage.view.php");
    }
}
