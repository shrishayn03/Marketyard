<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
    </style>
</head>
<body>
    <script type="text/javascript">
        function ShowHideDiv(chkPassport) {
            var dvPassport = document.getElementById("dvPassport");
            dvPassport.style.display = chkPassport.checked ? "block" : "none";
        }
    </script>
    <label for="chkPassport">
        <input type="checkbox" id="chkPassport" onclick="ShowHideDiv(this)" />
        Do you have Passport?
    </label>
    <hr />
    <div id="dvPassport" style="display: none">
        Passport Number:
        <input type="text" id="txtPassportNumber" />
    </div>
</body>
</html>