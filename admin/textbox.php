<html>
<head>
<script type="application/javascript">

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>
</head>

<body>
    <input type="text" name="tel_num" value="" onkeypress="return isNumberKey(event)" maxlength="12"/>
</body>
</html>
