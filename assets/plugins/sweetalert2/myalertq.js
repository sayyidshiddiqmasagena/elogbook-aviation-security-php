const flashData = $('.flash-data').data('flashdata');
// console.log(flashData);

	if (flashData=='tambah') {
		Swal.fire({
		    icon: 'success',
		    title: 'Success',
		    text: 'Berhasil menyimpan data'		    
		})
	}

	if (flashData=='tambahq') {
		Swal.fire({
		    position: 'top-end',
			icon: 'success',
			title: 'Berhasil menyimpan data',
			showConfirmButton: false,
			timer: 1500
	  	})
	}

	if (flashData=='approv') {
		Swal.fire({
		    icon: 'success',
		    title: 'Success',
		    text: 'Berhasil mengirim approval',
		    showConfirmButton: false,
			timer: 1800
		})
	}

	if (flashData=='error_app') {
		Swal.fire({
		    icon: 'error',
			title: 'Oops...',
			text: 'Gagal mengirim approval!'
		})
	}