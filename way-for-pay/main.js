$(document).ready(function () {
    let wayForPayGenerate = {}

	const getUTM = () => {
		const url = window.location.href;
		const urlParams = new URLSearchParams(url.split('?')[1]);
		const utmObj = {}

		if (urlParams.has('utm_source')) {
			utmObj.utmSource = urlParams.get('utm_source');
		}

		if (urlParams.has('utm_medium')) {
			utmObj.utmMedium = urlParams.get('utm_medium');
		}

		if (urlParams.has('utm_campaign')) {
			utmObj.utmCampaign = urlParams.get('utm_campaign');
		}

		if (urlParams.has('utm_content')) {
			utmObj.utmContent = urlParams.get('utm_content');
		}

		if (urlParams.has('utm_term')) {
			utmObj.utmTerm = urlParams.get('utm_term');
		}

		return utmObj;
	}
	const utm_obj = getUTM()

	$.param(utm_obj)
	const generateBuyer = function () {
		$.ajax({
			url: 'way-for-pay/generateBuyer.php',
			type: "POST",
			data: { utmTags: $.param(utm_obj) },
			async: false,
			success:function(result){
				wayForPayGenerate = JSON.parse(result)
			}
		});
	}

	$('.js-pay').on('click', function () {
		generateBuyer()
		const formPayment = $('#way-for-pay-form')

		formPayment.find('input[name="merchantSignature"]').val(wayForPayGenerate.signature)
		formPayment.find('input[name="orderReference"]').val(wayForPayGenerate.id_byuer)
		formPayment.find('input[name="orderDate"]').val(wayForPayGenerate.date)

		formPayment.submit()
      
        return false
	})
})