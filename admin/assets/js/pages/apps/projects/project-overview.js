(() => {
	'use strict'

	// Retrieves the theme's color palette to be used in charts.
	let primaryColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-primary');
	let dangerColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-danger');
	let successColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-success');
	let infoColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-info');
	let warningColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-warning');
	let bodyColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-body-color');

	// Helper function to clean up color values
	function cleanColor(color) {
		// remove any leading or trailing whitespace
		color = color.trim();
		// remove any leading # characters
		color = color.replace(/^#+/, '');
		// ensure the color string is exactly 6 characters long
		if (color.length < 6) {
			color = color.padStart(6, '0');
		} else if (color.length > 6) {
			color = color.slice(0, 6);
		}
		// add a leading # character
		color = '#' + color;
		return color;
	}

	// Clean up color values
	primaryColor = cleanColor(primaryColor);
	dangerColor = cleanColor(dangerColor);
	successColor = cleanColor(successColor);
	infoColor = cleanColor(infoColor);
	warningColor = cleanColor(warningColor);
	bodyColor = cleanColor(bodyColor);


	/******************** Calendar Start ********************/
	const calenderContainer = document.getElementsByClassName('calendar-container');
	if (calenderContainer.length > 0) {
		// Start Date
		const startMonth = '2023-05-01';

		// Marked days and class
		const markedDays = [
			['2023-04-04', 'bg-warning-subtle text-warning'],
			['2023-04-05', 'bg-warning-subtle text-warning'],
			['2023-04-06', 'bg-warning-subtle text-warning'],
			['2023-04-07', 'bg-warning-subtle text-warning'],
			['2023-04-16', 'bg-primary-subtle text-primary'],
			['2023-04-19', 'bg-success-subtle text-success'],
			['2023-04-24', 'bg-info-subtle text-info'],
			['2023-04-25', 'bg-info-subtle text-info'],
			['2023-05-04', 'bg-warning-subtle text-warning'],
			['2023-05-05', 'bg-warning-subtle text-warning'],
			['2023-05-06', 'bg-warning-subtle text-warning'],
			['2023-05-07', 'bg-warning-subtle text-warning'],
			['2023-05-16', 'bg-primary-subtle text-primary'],
			['2023-05-19', 'bg-success-subtle text-success'],
			['2023-05-24', 'bg-info-subtle text-info'],
			['2023-05-25', 'bg-info-subtle text-info'],
			['2023-06-04', 'bg-warning-subtle text-warning'],
			['2023-06-05', 'bg-warning-subtle text-warning'],
			['2023-06-06', 'bg-warning-subtle text-warning'],
			['2023-06-07', 'bg-warning-subtle text-warning'],
			['2023-06-16', 'bg-primary-subtle text-primary'],
			['2023-06-19', 'bg-success-subtle text-success'],
			['2023-06-24', 'bg-info-subtle text-info'],
			['2023-06-25', 'bg-info-subtle text-info'],
		];

		// Month names
		const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

		// Week names
		const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

		// Init Calendar
		const myCalendar = new Calendar(startMonth, markedDays, months, days);
	}
	/******************** Calendar End ********************/


	/******************** Timeline Start ********************/
	var container = document.getElementById('visualization');
	if(container) {
		// Create a DataSet (allows two way data-binding)
		var items = new vis.DataSet([
			{
				id: 1, 
				content: '<div><img src="../assets/media/avatars/4.jpg"> <span>Research</span></div><div><strong>SEO</strong></div>',
				start: '2023-04-09', 
				end: '2023-04-11',
				'className': 'bg-primary'
			},
			{
				id: 2, 
				content: '<div><img src="../assets/media/avatars/1.jpg"> <span>Dashboard Development</span></div><div><strong>DEVELOPMENT</strong></div>',
				start: '2023-04-12', 
				end: '2023-04-15',
				'className': 'bg-info'
			},
			{
				id: 3, 
				content: '<div><img src="../assets/media/avatars/6.jpg"> <span>Logo & Branding Design</span></div><div><strong>DESIGN</strong></div>',
				start: '2023-04-09', 
				end: '2023-04-13',
				'className': 'bg-success'
			},
			{
				id: 4, 
				content: '<div><img src="../assets/media/avatars/11.jpg"> <span>iOS Front-End</span></div><div><strong>MOBILE</strong></div>',
				start: '2023-04-10', 
				end: '2023-04-12',
				'className': 'bg-warning'
			},
			{
				id: 5, 
				content: '<div><img src="../assets/media/avatars/12.jpg"> <span>Android Front-End</span></div><div><strong>MOBILE</strong></div>',
				start: '2023-04-13', 
				end: '2023-04-15',
				'className': 'bg-danger'
			},
			{
				id: 6, 
				content: '<div><img src="../assets/media/avatars/13.jpg"> <span>Web Back-End</span></div><div><strong>DEVELOPMENT</strong></div>',
				start: '2023-04-10', 
				end: '2023-04-13',
				'className': 'bg-dark',
				graphHeight: '45px',
			},
		]);

		// Configuration for the Timeline
		var options = {
			zoomable: false,
			orientation: 'bottom',
			showMajorLabels: true,
			showMinorLabels: true,
			type: 'range',
			margin: {
				item: {
					vertical: 50,
				}
			}
		};

		// Create a Timeline
		var timeline = new vis.Timeline(container, items, options);
	}
	/******************** Timeline End ********************/
})()