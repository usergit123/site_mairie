function THEFUNCTION(i) {
		var divSuperficie = document.getElementById('divSuperficie');
		switch(i) {
			
			case 1 : divSuperficie.style.display = ''; divMeteo.style.display = 'none'; break;
			case 2 : divMeteo.style.display = ''; divSuperficie.style.display = 'none'; break;
			default: divSuperficie.style.display = 'none'; divMeteo.style.display = 'none'; break;
		}
	}

