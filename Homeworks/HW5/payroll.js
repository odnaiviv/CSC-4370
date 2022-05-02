//js code for part a

function report() {
	//hourly wage variable
	var wagebyhour = 15;
	//array to store data
	var workinghours = new Array();
	//variables to loop
	var i = 0;
	var hours;
	var totalpay = 0;

	//prompting user to enter number of hours
	hours = parseInt(prompt("Enter Employee's Working Hour Number (-1 to Quit): "));
	//loop to check number of hours
	while (hours != -1) {
		workinghours[i] = hours;
		i++;
		//reprompts message when under -1
		hours = parseInt(prompt("Enter Employee's Working Hour Number (-1 to Quit): "));
	}

	//creating payroll table's headings
	var table = "<table><tr><th>Employee #</th>";
	table += "<th>Working Hours #</th>";
	table += "<th>Employee's Pay</th></tr>";

	//loop to check employee information
	for (var j = 0; j < workinghours.length; j++) {
		var pay = 0;
		//checking for number of working hours greater than 40
		if (workinghours[j] >= 40) {
			pay = parseFloat((40 * wagebyhour) + (workinghours[j] - 40) * 1.5 * wagebyhour)
		}
		else {
			pay = parseFloat(workinghours[j] * wagebyhour);
		}
		//adding each employee's pay to the total sum
		totalpay += pay;

		//creating payroll table's rows
		table += "<tr><td>" + (j + 1) + "</td>";
		table += "<td>" + workinghours[j] + "</td>";
		table += "<td>$" + pay + "</td></tr>";
	}
	table += "</table>";
	//adding payroll table and total pay to html file
	document.getElementById("payrolltab").innerHTML = table;
	document.getElementById("total").innerHTML = "Total Pay of All Employees: $" + totalpay;
}
