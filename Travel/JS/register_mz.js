// Mingyu Zhang Work Begins
function validate()
	{
		
		var busphone=document.getElementById("CustBusPhone");
				var regex=  /^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$/;
				if (!regex.test(busphone.value))
				{
					alert("Business Phone number format invalid");
					busphone.focus();
					return false;
				}
		
		var homephone=document.getElementById("CustHomePhone");
				var regex=  /^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$/;
				if (!regex.test(homephone.value))
				{
					alert("Home Phone number format invalid");
					homephone.focus();
					return false;
				}
				
		var postal=document.getElementById("CustPostal");
				postal.value=postal.value.toUpperCase();
				//var regex= new RegExp("/[A-Z]\d[A-Z][ -]?\d[A-Z]\d$/);
				var regex= /(^[A-Z]\d[A-Z][ -]?\d[A-Z]\d$)|(^\d{5}([ -]\d{4})?$)/;
				if (!regex.test(postal.value))
				{
					alert("Postal Code format invalid");
					postal.focus();
					return false;
				}
				
		
				
		return confirm("Form Okay, Continue submitting?");
	}
// Mingyu Zhang Work Ends