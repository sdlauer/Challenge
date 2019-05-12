<!DOCTYPE html>
<!--
/**
 *  Author     : Dr. Susan Lauer   sdlauer@gmail.com
 */
-->
<html>
    <head>
        <title>Full Stack Web Programming Challenge -- Lauer</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form id = "myForm" action = "phpFile.php" method = "post">
            <ui class="container" id = "root" ><p><button  onclick="newFactory(5, 0, 8);"></button> "Root"</p></ui>
            <fieldset class="tiptop" style="width:200px;">
                <legend class="tiptop">&nbsp;&nbsp;Initial &nbsp;&nbsp;Age</legend>
                <fieldset class = "insider" id="ringer"> 
                    <div class="radio-item">
                        <input type="radio" id="riteme" name="inputAgeOps" value="1" onclick="getClick('StandAge');" required="required">
                        <label for="riteme">Stand Age</label>
                    </div><br/>         
                    <div class="radio-item">
                        <input type="radio" id="ringcter"  name="inputAgeOps" value="2" onclick="getClick('RingCount');" required="required">
                        <label for="ringcter" >Ring Count</label>
                    </div><br/>
                    <div class="radio-item">
                        <input type="radio" id="ritemf" name="inputAgeOps" value="3" onclick="getClick('RingCnt_StAge');" required="required">
                        <label for="ritemf">Both Stand Age and Ring Count</label>
                    </div>     
                </fieldset> 
                <!--RING COUNT -->
                <div>
                    <label for="ringct" style="display: none;" id = "ringct1"> &nbsp;&nbsp; Ring Count: &nbsp;&nbsp;     </label>
                    <input  style="display: none; width:280px;" id = "ringct" name = "inputAgeBH" 
                            type="number" min="2" max="120" step="1" 
                            placeholder='    enter a number:    2 - 120' >  
                    <label  for="stAge" style="display: none;" id = "stAge1" > &nbsp;&nbsp; Stand Age: &nbsp;&nbsp;     </label>  
                    <input  style="display: none; width:280px;" id ="stAge" name = "inputStandAge" 
                            type="number" min="4" step="1"
                            placeholder='    enter a number:    > 3'> 
                </div><br/>
                <!--YEARS IN GRASS STAGE -->
                <fieldset  class = "insider" id="YgChoices" style="display: none;" >
                    <legend >&nbsp;&nbsp;Years in Grass Stage: &nbsp;&nbsp;</legend>
                    <div class="radio-item" >
                        <input type="radio"  id="Ygdef1" name="inputGStageOps" value="1" onclick="getClick('YgDef');">
                        <label for="Ygdef1" id="Ygdef">Default Value</label> 
                    </div> <br />
                    <div class="radio-item" >
                        <input type="radio"  id="YgEnter1"  name="inputGStageOps" value="2" onclick="getClick('YgEnt');">
                        <label  for="YgEnter1"  >Enter Years in Grass Stage</label>
                    </div>
                    <label for= "Yg" style="display: none;" id= "Yg1"> &nbsp;&nbsp; Years in Grass Stage: &nbsp;&nbsp;     </label>
                    <input  style="display: none; width:280px;" id= "Yg" name ="Yg" 
                            type="number" min="1" max="50" step="1"
                            placeholder='    enter a number: > 0 ' >   
                </fieldset>  
            </fieldset> <br/>
            <?php
            require '/path/to/vendor/autoload.php';
            ?>
            <?php
            include 'phpFile.php';
            ?>
            <div id="textContainer"></div>
            <button onclick="CreateText();">Create a text node!</button>
            <script src="challenge.js"></script>
           <!-- <script>generateFactory(5,0,8);</script>-->
            <input type="submit" value = "PROJECT STAND--SUBMIT" /><br />
        </p>
        <input type="reset" onclick="mySetter()" value="Reset form">

    </form>
    <div id="textContainer"></div>
    <button onclick="CreateText();">Create a text node!</button>
    <script type="text/javascript">
        function CreateText() {
            var textContainer = document.getElementById("textContainer");
            var textNode = document.createTextNode("Dynamically generated text");
            textContainer.appendChild(textNode);
        }
    </script>
</body>
</html>
