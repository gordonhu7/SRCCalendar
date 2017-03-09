/**
 *stuff to include in the html based on the parser
 *this parses the google spreadsheet into arrays
 */


//don't forget to update the path to the parser
script type="text/javascript" src="/path/to/googleSpreadsheetsParser.js"></script>

//sample is title of the sheet be sure to update it
//update publishedUrl


var url = "https://docs.google.com/spreadsheets/u/1/d/1PJ3WNzB0MT-KN-_hDV00InJ4BaYeuFrXDIgIsIw5tms/pubhtml"

var gss = new GoogleSpreadsheetParser(url, {sheetTitle: '', hasTitle: true});

//gets the titles of the columns aka the date location fb link etc...
//this isn't needed but may be helpful later on
console.log(gss.title);

//start of the spreadsheets. The 2-d array is parsed through using the two 
//brackets

//trying to print out the event labels and info
<p>Event title: </p>
console.log(gss.contents[2][2]);

//trying to get the location from the websheet
<P>Location: </p>
console.log(gss.contents[3][2]);

//continue until all data is parsed and logged

//delete first one and check for null, if null then parse the next row



















