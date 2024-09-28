$(document).ready(function () {
	let wayForPayGenerate = {}
	const generateBuyer = function () {
		$.ajax({
			url: 'way-for-pay/generateBuyer.php',
			type: "POST",
			async: false,
			success:function(result){
				wayForPayGenerate = JSON.parse(result)
			}
		});
	}

	const getUTM = () => {
		const url = window.location.href;
		const urlParams = new URLSearchParams(url.split('?')[1]);

		return{
			utmSource: urlParams.get('utm_source') || '',
			utmMedium: urlParams.get('utm_medium') || '',
			utmCampaign: urlParams.get('utm_campaign') || '',
			utmContent: urlParams.get('utm_content') || '',
			utmTerm: urlParams.get('utm_term') || ''
		}
	}

	var wayforpay = new Wayforpay();

	$('.js-pay').on('click', function () {
		generateBuyer()
		wayforpay.run({
				merchantAccount : "izungurian_com",
				merchantDomainName : "www.ungurian.site",
				/*merchantAuthType*/authorizationType : "SimpleSignature",

				merchantSignature : wayForPayGenerate.Key,

				orderReference : wayForPayGenerate.Id_byuer,
				orderDate : wayForPayGenerate.Date,
				amount : "390",
				currency : "UAH",
				productName : "Курс з акцентом на сідниці та прес",
				productPrice : "390",
				productCount : "1",
				paymentSystems: 'card;applePay;privat24;googlePay',
				language: "UA",
				straightWidget: true
			},
			function (response) {
				let transactionData = {
					Email: response.email,
					Phone: response.phone,
					...getUTM()
				}

				$.ajax({
					type: "POST",
					url: "way-for-pay/mail.php",
					data: transactionData,
					async: false
				})

				//submit to google sheets
				const appLink = 'https://script.google.com/macros/s/AKfycbzKW3Nt6iyeMsfLqS45aUWPhSz4_0fFJafHboDjCXlvvwRnv-fG0zFYGqC01EJBFVum/exec'
				transactionData.formGoogleSheetName = 'sheet-1'
				transactionData.honeypot = ''

				const formData = new FormData();

				for (const key in transactionData) {
					if (transactionData.hasOwnProperty(key)) {
						formData.append(key, transactionData[key]);
					}
				}

				$.ajax({
					url: appLink,
					type: "POST",
					data: formData,
					processData: false,
					contentType: false,
					async: false,
					beforeSend: function(){
						if(formData.get('honeypot').length) {
							return false;
						} else {
							formData.delete('honeypot');
						}
					},

				})

				window.location.href = 'https://tandurhouse.site/izungurian-anastasia-land/podyaka'
			},
			function (response) {
				console.log(response)
// on declined
			},
			function (response) {
				console.log(response)
// on pending or in processing
			}
		);
	})

	/*$.ajax({
		url: 'https://secure.wayforpay.com/pay',
		type: "post",
		data: {
			merchantAccount: 'test_merch_n1',
			merchantDomainName: 'https://merchant.com.ua/',
			merchantTransactionSecureType: 'AUTO',

		},
		success:function(result){
			console.log(result)
		}
	});*/
})