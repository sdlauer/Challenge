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
        <link type="text/css" rel="stylesheet" href="main2.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <!--"newFactory(5, -78910, 835910);-->
    <body id = "whatever">
        <div class="stripe-5"  onclick="newFactory(5, -78910, 835910);"><span >&nbsp;&nbsp;Root</span></div>
        <table id = "root" style="width:100%"></table>
        <object style="display: show;width:350px; height: 500px"  scrolling = "no" data="generator.html"></object>
        <object style="display: show;width:350px; height: 500px"  scrolling = "no" data="generator.html"></object>
        <object style="display: show;width:350px; height: 500px"  scrolling = "no" data="generator.html"></object>
        <object style="display: show;width:350px; height: 500px"  scrolling = "no" data="generator.html"></object>

        <!--     <fieldset  class = "chooser" id="factoryChoices"  style="display: show;font-size: 5px;" >
    <legend id="tiptop">&nbsp;&nbsp;Edit Factory: &nbsp;&nbsp;</legend>
    <div class="radio-item" >
        <input type="radio"  id="editName" name="editName" value="1" onclick="getClick('editName');">
        <label for="editName" style="font-size: 20px" id="editName1">Edit Name</label>
    </div> <br />
    <div class="radio-item" >
        <input type="radio"  id="newChild"  name="newChild" value="2" onclick="getClick('newChildren');">
        <label  for="newChild"  id="newChild1" style="font-size: 20px">Generate New Children</label>
    </div>
    <label for= "numChildren" style="display: show; font-size: 15px" id= "numChildren1"> &nbsp;&nbsp; Number of Children: &nbsp;&nbsp;     </label>
    <input   style="display: show; " id= "numChildren" name ="numChildren"
             type="number" min="0" max="15" step="1"
             placeholder='    enter a number:     0  &le;  number  &le;  15 ' >
    <label for= "minValue" style="display: show; font-size: 15px" id= "minValue1"> &nbsp;&nbsp; Minimum Value: &nbsp;&nbsp;     </label>
    <input   style="display: show; " id= "minValue" name ="minValue"
             type="number"
             placeholder='    enter the minimum value for a child ' >
    <label for= "maxValue" style="display: show; font-size: 15px" id= "maxValue1"> &nbsp;&nbsp; Maximum Value: &nbsp;&nbsp;     </label>
    <input   style="display: show; " id= "maxValue" name ="maxValue"
             type="number" min="1" max="50" step="1"
             placeholder='    enter the maximum value for a child ' >



    <p id ="submitEnd">
        <input type="submit" value = "PROJECT STAND--SUBMIT" /><br />
    </p>
   <input type="reset" onclick="mySetter()" value="Reset form">
  </fieldset>
        -->

        <script src="challenge.js"></script>

        <!--
             <div class="dropdown">
   <button class="dropbtn">Dropdown</button>
   <div class="dropdown-content">
     <a href="#">Link 1</a>
     <a href="#">Link 2</a>
     <a href="#">Link 3</a>
   </div>
 </div>



        <!--<form id = "myForm" action = "phpFile.php" method = "post">--

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
        <!--RING COUNT --
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
        <!--YEARS IN GRASS STAGE --
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

    <div id="textContainer"></div>
    <button onclick="CreateText();">Create a text node!</button>
    <script src="challenge.js"></script>
   <!-- <script>generateFactory(5,0,8);</script>--
    <input type="submit" value = "PROJECT STAND--SUBMIT" /><br />
</p>
<input type="reset" onclick="mySetter()" value="Reset form">

        <!-- </form> --
        <div id="textContainer"></div>
        <button onclick="CreateText();">Create a text node!</button>
        <script type="text/javascript">
            function CreateText() {
                var textContainer = document.getElementById("textContainer");
                var textNode = document.createTextNode("Dynamically generated text");
                textContainer.appendChild(textNode);
            }
        </script>
        -->
    </body>
</html>
