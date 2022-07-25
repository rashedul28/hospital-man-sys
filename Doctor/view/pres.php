<?php include"navbar.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prescription</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/presdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>
<body>
    <div class="main-container" id="prescription">
        <div class="prescription" >
            <div class="doc-info">
                <h4>Doctor Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="docname" name="docname" type="text"></h4>
                <br>
                <h5>Doctor's Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="docphn" name="docphn" type="text"> </h5>
                <br>
                <p>MBBS, FCPS, pHD</p>
            </div>
            <div class="sep"></div>
            <div class="patienet-box">
                <div class="name">Patient Name: <input id="patname" name="patname" type="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patient Age: <input id="patage" name="patage" type="text"></div>
            </div>
            <div class="sep2"></div>

            <div class="main-flex">
                <div class="pres-left">
                    <h3>Symptoms:</h3>
                    <textarea id="symname" name="symname" class="symptom">
                    		--
                    </textarea>
                    <br>
                    <br>
                    <h3>Tests:</h3>
                    <textarea id="tests" name="tests" class="test">
                    		--
                    </textarea>
                </div>
                <div class="pres-right">
                    <div class="medicine-box">
                        R<i>x</i><br>
                        <textarea id="mdname" name="mdname" id="" cols="45" rows="10" class="medicine">
                        	--
                        </textarea><br>
                        <i>Fellow Consultation</i><br>
                        <textarea name="consult" id="consult" cols="45" rows="5">
                        	--
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <button id="download" class="button blue">Download</button>
    </div>
</body>
</html>