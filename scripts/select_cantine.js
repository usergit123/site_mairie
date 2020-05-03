function THEFUNCTION1(i) {
		var divreduction = document.getElementById('divReduction');
		switch(i) {
			
			
			case 1 : divReduction.style.display = ''; divBourse.style.display = 'none'; break;
			case 2 : divBourse.style.display = ''; divReduction.style.display = 'none'; break;
			default: divReduction.style.display = 'none'; divBourse.style.display = 'none'; break;
		}
	}