function cleaner(cln) {
    document.getElementById(cln).value = "";
}
function clRad(cln) {
    var ele = document.getElementsByName(cln);
    for (var i = 0; i < ele.length; i++)
        ele[i].checked = false;
}
function clMaxMin() {
    cleaner('mini');
    cleaner('maxi');
    clRad('classInterval');
    redoTable();
    hide_er(['maxmin']);
}
function reqElem(x) {
    document.getElementById(x).required = 'required';
}
function no_req(x) {
    document.getElementById(x).removeAttribute('required');
}
function getClick(x) {
    if (x === "StandAge")
    {
        show_er(['stAge', 'stAge1', 'YgChoices']) & hide_er(['ringct1', 'ringct', 'Yg', 'Yg1']) &
                cleaner('ringct') & cleaner('Yg') & clRad('inputGStageOps') & reqElem('stAge') &
                reqElem('Ygdef1') & no_req('ringct');
    } else if (x === "RingCount")
    {
        show_er(['ringct1', 'ringct', 'YgChoices']) & hide_er(['stAge', 'stAge1', 'Yg', 'Yg1']) &
                cleaner('stAge') & cleaner('Yg') & clRad('inputGStageOps') & reqElem('ringct') &
                reqElem('Ygdef1') & no_req('stAge');
    } else if (x === "RingCnt_StAge")
    {
        show_er(['ringct1', 'ringct', 'stAge', 'stAge1', 'YgChoices']) & cleaner('Yg') &
                clRad('inputGStageOps') & hide_er(['Yg', 'Yg1', 'YgChoices']) & reqElem('ringct') &
                reqElem('stAge') & no_req('Ygdef1');
    } else if (x === "YgDef") {
        hide_er(['Yg', 'Yg1']) & cleaner('Yg') & no_req('Yg');
    } else if (x === "YgEnt") {
        show_er(['Yg', 'Yg1']) & reqElem('Yg');
    } else if (x === "StInd")
    {
        hide_er(['siteHgt', 'siteHgt1']) & show_er(['siteIndex', 'siteIndex1', 'SiteDef']) &
                cleaner('siteHgt') & clRad('siteIndDef') & reqElem('siteIndex') & reqElem('ritemb') & no_req('siteHgt');
    } else if (x === "StHt")
    {
        show_er(['siteHgt', 'siteHgt1']) & hide_er(['siteIndex', 'siteIndex1', 'SiteDef']) &
                cleaner('siteIndex') & clRad('siteIndDef') & no_req('siteIndex') & reqElem('siteHgt') & no_req('ritemb');
    } else if (x === "Unthinned") {
        hide_er(['maxmin']) & show_er(['unthinned']) & clMaxMin();
    } else if (x === "TPAonly")
    {
        clMaxMin() & hide_er(['BA', 'BA1']) & show_er(['inputTPA', 'inputTPA1']) & cleaner('BA1')
                & reqElem('inputTPA1') & no_req('BA1') & reqElem('mini') & reqElem('maxi') & reqElem('classInterval1')
                & no_req('mini') & no_req('maxi') & no_req('classInterval1');
    } else if (x === "TPA_BA") {
        clMaxMin() & show_er(['BA', 'BA1', 'inputTPA', 'inputTPA1'])
                & reqElem('inputTPA1') & reqElem('BA1') & reqElem('mini') & reqElem('maxi') & reqElem('classInterval1')
                & no_req('mini') & no_req('maxi') & no_req('classInterval1');
    } else if (x === "StTable") {
        show_er(['maxmin']) & hide_er(['BA', 'BA1', 'inputTPA', 'inputTPA1'])
                & no_req('inputTPA1') & no_req('BA1') & reqElem('mini') & reqElem('maxi') & reqElem('classInterval1');
    } else if (x === "thinned")
    {
        clRad('BA_TPA_StandTable') & show_er(['maxmin']) &
                hide_er(['BA', 'BA1', 'inputTPA', 'inputTPA1', 'unthinned']) &
                cleaner('BA1') & cleaner('inputTPA1')
                & no_req('inputTPA1') & no_req('BA1') & reqElem('mini') & reqElem('maxi') & reqElem('classInterval1');
    } else if (x === "Unknown")
    {
        clRad('BA_TPA_StandTable') & show_er(['maxmin']) &
                hide_er(['BA', 'BA1', 'inputTPA', 'inputTPA1', 'unthinned']) &
                cleaner('BA1') & cleaner('inputTPA1')
                & no_req('inputTPA1') & no_req('BA1') & reqElem('mini') & reqElem('maxi') & reqElem('classInterval1');
    } else if (x === "mini") {
        getClick('redo') & clRad('classInterval');
        document.getElementById("validateMaxMin").innerHTML = "";
    } else if (x === "maxi") {
        getClick('redo') & clRad('classInterval');
        document.getElementById("validateMaxMin").innerHTML = "";
    } else if (x === "redo") {
        redoTable();
    } else if (x === "created") {
        addTable(document.getElementById('mini').value, document.getElementById('maxi').value, document.getElementsByName('classInterval'));
    }

}
function show_er(IDnames) {
    for (i = 0; i < IDnames.length; i++) {
        document.getElementById(IDnames[i]).style.display = 'block';
    }
}
function hide_er(IDnames) {
    for (i = 0; i < IDnames.length; i++) {
        document.getElementById(IDnames[i]).style.display = 'none';
        cleaner(IDnames[i]);
    }
}
function mySetter() {
    redoTable();
    hide_er(['Yg', 'Yg1', 'YgChoices', 'ringct1', 'ringct',
        'stAge', 'stAge1', 'siteIndex', 'siteIndex1', 'SiteDef', 'siteHgt', 'siteHgt1',
        'maxmin', 'BA', 'BA1', 'inputTPA', 'inputTPA1', 'unthinned']);
    document.forms[0].reset();
}
function redoTable() {

    var tables = document.getElementsByTagName('table');
    var sizer = tables.length;
    for (var i = sizer; i-- > 0; )
        tables[i].parentNode.removeChild(tables[i]);
}


function addTable(min, max, CW1) {
    mini = parseInt(min);
    maxi = parseInt(max);
    var CW;
    for (var i = 0; i < CW1.length; i++) {
        if (CW1[i].checked) {
            CW = CW1[i].value;
        }
    }
    CW = parseInt(CW);
    var myTableDiv = document.getElementById("Stand_Table");
    var table = document.createElement('TABLE');
    table.setAttribute('id', "STable");
    var tableBody = document.createElement('TBODY');
    table.border = '1';
    table.appendChild(tableBody);
    var heading = [];
    heading[0] = "Diameter Class";
    heading[1] = "Trees Per Acre";
    var inputTPA = [];
    for (i = 0; i <= maxi - mini; i += CW) {
        inputTPA[i] = [i + mini, ""];
    }

    //TABLE COLUMNS
    var tr = document.createElement('TR');
    tableBody.appendChild(tr);
    for (i = 0; i < heading.length; i++) {
        var th = document.createElement('TH');
        th.width = '110';
        th.appendChild(document.createTextNode(heading[i]));
        tr.appendChild(th);

    }
    var TPAi = [];
    for (i = 0; i < inputTPA.length; i += CW) {
        var tr = document.createElement('TR');
        for (j = 0; j < inputTPA[i].length; j++) {
            var td = document.createElement('TD');
            td.style = "text-align:center";
            td.appendChild(document.createTextNode(inputTPA[i][j]));
            if (j === 1) {
                td.innerHTML += ' <input type="number" min = "0" step=".0001" style="width: 100px;"name = "TPAi[]" required="required"/>';
                td.style.background = "rgb(204,255,153)";
            } else {
                td.style.background = "beige";
            }
            tr.appendChild(td);
        }
        tableBody.appendChild(tr);

    }
    myTableDiv.appendChild(table);
}
//checks max min values for table        
function ValMaxMin() {
    var txt = "";
    var x = parseInt(document.forms["myForm"]["mini"].value);
    var y = parseInt(document.forms["myForm"]["maxi"].value);
    if (x === "") {
        txt = "Minimum must entered.";
        clRad('classInterval');
    } else if (x < 1) {
        txt = " The minimum must be greater than zero.";
        clRad('classInterval');
    } else if (y === "") {
        txt = "Maximum must be entered.";
        clRad('classInterval');
    } else if (x >= y) {
        txt = "The maximum must be greater than the minimum.";
        txt += x;
        txt += " ";
        txt += y;
        clRad('classInterval');
    } else {
        getClick('redo') & getClick('created');
    }
    document.getElementById("validateMaxMin").innerHTML = txt;
}

// keeps enter from submitting form
function stopRKey(evt) {
    var evt = (evt) ? evt : ((event) ? event : null);
    var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
    if ((evt.keyCode === 13) && (node.type === "text")) {
        return false;
    }
}
document.onkeypress = stopRKey;