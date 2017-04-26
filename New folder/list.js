
function fillCategory(){ 
 // this function is used to fill the category list on load
addOption(document.Registration.Province, "Eastern Cape", "Eastern Cape", "");
addOption(document.Registration.Province, "Free State", "Free State", "");
addOption(document.Registration.Province, "Gauteng", "Gauteng", "");
addOption(document.Registration.Province, "KwaZulu-Natal", "KwaZulu-Natal", "");
addOption(document.Registration.Province, "Limpopo", "Limpopo", "");
addOption(document.Registration.Province, "Mpumalanga", "Mpumalanga", "");
addOption(document.Registration.Province, "Northern Cape", "Northern Cape", "");
addOption(document.Registration.Province, "North West", "North West", "");
addOption(document.Registration.Province, "Western Cape", "Western Cape", "");
}

function SelectMunicipality(){
// ON selection of category this function will work

removeAllOptions(document.Registration.Municipality);
addOption(document.Registration.Municipality, "", "", "");

if(document.Registration.Province.value == 'Eastern Cape'){
addOption(document.Registration.Municipality,"Amahlathi Local","Amahlathi Local","");
addOption(document.Registration.Municipality,"Blue Crane Route Local" ,"Blue Crane Route Local","");
addOption(document.Registration.Municipality,"Buffalo City Metropolitan" ,"Buffalo City Metropolitan","");
addOption(document.Registration.Municipality,"Dr Beyers Naude Local" ,"Dr Beyers Naude Local","");
addOption(document.Registration.Municipality,"Elundini Local" ,"Elundini Local","");
addOption(document.Registration.Municipality,"Emalahleni Local" ,"Emalahleni Local","");
addOption(document.Registration.Municipality,"Engcobo Local" ,"Engcobo Local","");
addOption(document.Registration.Municipality,"Enoch Mgijima Local" ,"Enoch Mgijima Local","");
addOption(document.Registration.Municipality,"Great Kei Local" ,"Great Kei Local","");
addOption(document.Registration.Municipality,"Ingquza Hill Local" ,"Ingquza Hill Local","");
addOption(document.Registration.Municipality,"Intsika Yethu Local" ,"Intsika Yethu Local","");
addOption(document.Registration.Municipality,"Inxuba Yethemba Local" ,"Inxuba Yethemba Local","");
addOption(document.Registration.Municipality,"King Sabata Dalindyebo Local","King Sabata Dalindyebo Local","");
addOption(document.Registration.Municipality,"Kouga Local","Kouga Local","");
addOption(document.Registration.Municipality,"Koukamma Local","Koukamma Local","");
addOption(document.Registration.Municipality,"Makana Local","Makana Local","");
addOption(document.Registration.Municipality,"Matatiele Local","Matatiele Local","");
addOption(document.Registration.Municipality,"Mbhashe Local","Mbhashe Local","");
addOption(document.Registration.Municipality,"Mbizana Local","Mbizana Local","");
addOption(document.Registration.Municipality,"Mhlontlo Local","Mhlontlo Local","");
addOption(document.Registration.Municipality,"Mnquma Local","Mnquma Local","");
addOption(document.Registration.Municipality,"Ndlambe Local","Ndlambe Local","");
addOption(document.Registration.Municipality,"Nelson Mandela Bay Metropolitan","Nelson Mandela Bay Metropolitan","");
addOption(document.Registration.Municipality,"Ngqushwa Local","Ngqushwa Local","");
addOption(document.Registration.Municipality,"Ntabankulu Local","Ntabankulu Local","");
addOption(document.Registration.Municipality,"Nyandeni Local","Nyandeni Local","");
addOption(document.Registration.Municipality,"Port St Johns Local","Port St Johns Local","");
addOption(document.Registration.Municipality,"Raymond Mhlaba Local","Raymond Mhlaba Local","");
addOption(document.Registration.Municipality,"Sakhisizwe Local","Sakhisizwe Local","");
addOption(document.Registration.Municipality,"Senqu Local","Senqu Local","");
addOption(document.Registration.Municipality,"Sundays River Valley Local","Sundays River Valley Local","");
addOption(document.Registration.Municipality,"Umzimvubu Local","Umzimvubu Local","");
addOption(document.Registration.Municipality,"Walter Sisulu Local","Walter Sisulu Local","");
addOption(document.Registration.Municipality,"Buffalo City Metropolitan","Buffalo City Metropolitan","");
addOption(document.Registration.Municipality,"Dr Beyers Naudé Local","Dr Beyers Naudé Local","");
addOption(document.Registration.Municipality,"Elundini Local","Elundini Local","");
addOption(document.Registration.Municipality,"Emalahleni Local","Emalahleni Local","");
addOption(document.Registration.Municipality,"Engcobo Local","Engcobo Local","");
addOption(document.Registration.Municipality,"Enoch Mgijima Local","Enoch Mgijima Local","");
addOption(document.Registration.Municipality,"Great Kei Local","Great Kei Local","");
addOption(document.Registration.Municipality,"Ingquza Hill Local","Ingquza Hill Local","");
addOption(document.Registration.Municipality,"Intsika Yethu Local","Intsika Yethu Local","");
addOption(document.Registration.Municipality,"Inxuba Yethemba Local","Inxuba Yethemba Local","");
addOption(document.Registration.Municipality,"King Sabata Dalindyebo Local","King Sabata Dalindyebo Local","");
addOption(document.Registration.Municipality,"Kouga Local","Kouga Local","");
addOption(document.Registration.Municipality,"Koukamma Local","Koukamma Local","");
addOption(document.Registration.Municipality,"Makana Local","Makana Local","");
addOption(document.Registration.Municipality,"Matatiele Local","Matatiele Local","");
addOption(document.Registration.Municipality,"Mbhashe Local","Mbhashe Local","");
addOption(document.Registration.Municipality,"Mbizana Local","Mbizana Local","");
addOption(document.Registration.Municipality,"Mhlontlo Local","Mhlontlo Local","");
addOption(document.Registration.Municipality,"Mnquma Local","Mnquma Local","");
addOption(document.Registration.Municipality,"Ndlambe Local","Ndlambe Local","");
addOption(document.Registration.Municipality,"Nelson Mandela Bay Metropolitan","Nelson Mandela Bay Metropolitan","");
addOption(document.Registration.Municipality,"Ngqushwa Local","Ngqushwa Local","");
addOption(document.Registration.Municipality,"Ntabankulu Local","Ntabankulu Local","");
addOption(document.Registration.Municipality,"Nyandeni Local","Nyandeni Local","");
addOption(document.Registration.Municipality,"Port St Johns Local","Port St Johns Local","");
addOption(document.Registration.Municipality,"Raymond Mhlaba Local","Raymond Mhlaba Local","");
addOption(document.Registration.Municipality,"Sakhisizwe Local","Sakhisizwe Local","");
addOption(document.Registration.Municipality,"Senqu Local","Senqu Local","");
addOption(document.Registration.Municipality,"Sundays River Valley Local","Sundays River Valley Local","");
addOption(document.Registration.Municipality,"Umzimvubu Local","Umzimvubu Local","");
addOption(document.Registration.Municipality,"Walter Sisulu Local","Walter Sisulu Local","");
}
if(document.Registration.Province.value == 'Free State'){
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "", "");
}
if(document.Registration.Province.value == 'Gauteng'){
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
}
if(document.Registration.Province.value == 'KwaZulu-Natal'){
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
}
if(document.Registration.Province.value == 'Limpopo'){
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
}
if(document.Registration.Province.value == 'Mpumalanga'){
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
}
if(document.Registration.Province.value == 'Northern Cape'){
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
}
if(document.Registration.Province.value == 'North West'){
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
}
if(document.Registration.Province.value == 'Western Cape'){
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
addOption(document.Registration.Municipality,"", "","");
}
}

function SelectCity(){
removeAllOptions(document.Registration.City);
addOption(document.Registration.City, "", "", "");

if(document.Registration.Municipality.value == 'Amahlathi Local'){
addOption(document.Registration.City,"Cathcart", "Cathcart");
addOption(document.Registration.City,"Kei Road", "Kei Road");
addOption(document.Registration.City,"Keiskammahoek", "Keiskammahoek");
addOption(document.Registration.City,"Stutterheim", "Stutterheim");
}

if(document.Registration.Municipality.value == 'Blue Crane Route Local'){
addOption(document.Registration.City,"Cookhouse", "Cookhouse");
addOption(document.Registration.City,"Pearston", "Pearston");
addOption(document.Registration.City,"Petersburg", "Petersburg");
addOption(document.Registration.City,"Somerset East", "Somerset East");
}

if(document.Registration.Municipality.value == 'Buffalo City Metropolitan'){
addOption(document.Registration.City,"Bisho", "Bisho");
addOption(document.Registration.City,"Dimbaza", "Dimbaza");
addOption(document.Registration.City,"East London", "East London");
addOption(document.Registration.City,"Kidd's Beach", "Kidd's Beach");
addOption(document.Registration.City,"King William's Town", "King William's Town");
addOption(document.Registration.City,"Mdantsane", "Mdantsane");
addOption(document.Registration.City,"Phakamisa", "Phakamisa");
addOption(document.Registration.City,"Zwelitsha", "Zwelitsha");
}

if(document.Registration.Municipality.value == 'Dr Beyers Naude Local'){
addOption(document.Registration.City,"Aberdeen", "Aberdeen");
addOption(document.Registration.City,"Adendorp", "Adendorp");
addOption(document.Registration.City,"Graaff-Reinet", "Graaff-Reinet");
addOption(document.Registration.City,"Jansenville", "Jansenville");
addOption(document.Registration.City,"Kendrew", "Kendrew");
addOption(document.Registration.City,"Klipplaat", "Klipplaat");
addOption(document.Registration.City,"Nieu-Bethesda", "Nieu-Bethesda");
addOption(document.Registration.City,"Rietbron", "Rietbron");
addOption(document.Registration.City,"Steytlerville", "Steytlerville");
addOption(document.Registration.City,"Waterford", "Waterford");
addOption(document.Registration.City,"Willowmore", "Willowmore");
}
if(document.Registration.Municipality.value == 'Great Kei Local'){
addOption(document.Registration.City,"Amatola Coastal", "Amatola Coastal");
addOption(document.Registration.City," Kei Mouth", " Kei Mouth");
addOption(document.Registration.City,"Komga", "Komga");
addOption(document.Registration.City,"Morgan Bay", "Morgan Bay");
}
}
////////////////// 

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}


////////////////////////////////////////////////////////////////////////
//////////////////////POSTAL ADDRESS////////////////////////////////////
////////////////////////////////////////////////////////////////////////


function _fillCategory(){ 
 // this function is used to fill the category list on load
_addOption(document.Registration._Province, "Eastern Cape", "Eastern Cape", "");
_addOption(document.Registration._Province, "Free State", "Free State", "");
_addOption(document.Registration._Province, "Gauteng", "Gauteng", "");
_addOption(document.Registration._Province, "KwaZulu-Natal", "KwaZulu-Natal", "");
_addOption(document.Registration._Province, "Limpopo", "Limpopo", "");
_addOption(document.Registration._Province, "Mpumalanga", "Mpumalanga", "");
_addOption(document.Registration._Province, "Northern Cape", "Northern Cape", "");
_addOption(document.Registration._Province, "North West", "North West", "");
_addOption(document.Registration._Province, "Western Cape", "Western Cape", "");
}

function _SelectMunicipality(){
// ON selection of category this function will work

_removeAllOptions(document.Registration._Municipality);
_addOption(document.Registration._Municipality, "", "", "");

if(document.Registration._Province.value == 'Eastern Cape'){
_addOption(document.Registration._Municipality,"Amahlathi Local","Amahlathi Local","");
_addOption(document.Registration._Municipality,"Blue Crane Route Local" ,"Blue Crane Route Local","");
_addOption(document.Registration._Municipality,"Buffalo City Metropolitan" ,"Buffalo City Metropolitan","");
_addOption(document.Registration._Municipality,"Dr Beyers Naude Local" ,"Dr Beyers Naude Local","");
_addOption(document.Registration._Municipality,"Elundini Local" ,"Elundini Local","");
_addOption(document.Registration._Municipality,"Emalahleni Local" ,"Emalahleni Local","");
_addOption(document.Registration._Municipality,"Engcobo Local" ,"Engcobo Local","");
_addOption(document.Registration._Municipality,"Enoch Mgijima Local" ,"Enoch Mgijima Local","");
_addOption(document.Registration._Municipality,"Great Kei Local" ,"Great Kei Local","");
_addOption(document.Registration._Municipality,"Ingquza Hill Local" ,"Ingquza Hill Local","");
_addOption(document.Registration._Municipality,"Intsika Yethu Local" ,"Intsika Yethu Local","");
_addOption(document.Registration._Municipality,"Inxuba Yethemba Local" ,"Inxuba Yethemba Local","");
_addOption(document.Registration._Municipality,"King Sabata Dalindyebo Local","King Sabata Dalindyebo Local","");
_addOption(document.Registration._Municipality,"Kouga Local","Kouga Local","");
_addOption(document.Registration._Municipality,"Koukamma Local","Koukamma Local","");
_addOption(document.Registration._Municipality,"Makana Local","Makana Local","");
_addOption(document.Registration._Municipality,"Matatiele Local","Matatiele Local","");
_addOption(document.Registration._Municipality,"Mbhashe Local","Mbhashe Local","");
_addOption(document.Registration._Municipality,"Mbizana Local","Mbizana Local","");
_addOption(document.Registration._Municipality,"Mhlontlo Local","Mhlontlo Local","");
_addOption(document.Registration._Municipality,"Mnquma Local","Mnquma Local","");
_addOption(document.Registration._Municipality,"Ndlambe Local","Ndlambe Local","");
_addOption(document.Registration._Municipality,"Nelson Mandela Bay Metropolitan","Nelson Mandela Bay Metropolitan","");
_addOption(document.Registration._Municipality,"Ngqushwa Local","Ngqushwa Local","");
_addOption(document.Registration._Municipality,"Ntabankulu Local","Ntabankulu Local","");
_addOption(document.Registration._Municipality,"Nyandeni Local","Nyandeni Local","");
_addOption(document.Registration._Municipality,"Port St Johns Local","Port St Johns Local","");
_addOption(document.Registration._Municipality,"Raymond Mhlaba Local","Raymond Mhlaba Local","");
_addOption(document.Registration._Municipality,"Sakhisizwe Local","Sakhisizwe Local","");
_addOption(document.Registration._Municipality,"Senqu Local","Senqu Local","");
_addOption(document.Registration._Municipality,"Sundays River Valley Local","Sundays River Valley Local","");
_addOption(document.Registration._Municipality,"Umzimvubu Local","Umzimvubu Local","");
_addOption(document.Registration._Municipality,"Walter Sisulu Local","Walter Sisulu Local","");
_addOption(document.Registration._Municipality,"Buffalo City Metropolitan","Buffalo City Metropolitan","");
_addOption(document.Registration._Municipality,"Dr Beyers Naudé Local","Dr Beyers Naudé Local","");
_addOption(document.Registration._Municipality,"Elundini Local","Elundini Local","");
_addOption(document.Registration._Municipality,"Emalahleni Local","Emalahleni Local","");
_addOption(document.Registration._Municipality,"Engcobo Local","Engcobo Local","");
_addOption(document.Registration._Municipality,"Enoch Mgijima Local","Enoch Mgijima Local","");
_addOption(document.Registration._Municipality,"Great Kei Local","Great Kei Local","");
_addOption(document.Registration._Municipality,"Ingquza Hill Local","Ingquza Hill Local","");
_addOption(document.Registration._Municipality,"Intsika Yethu Local","Intsika Yethu Local","");
_addOption(document.Registration._Municipality,"Inxuba Yethemba Local","Inxuba Yethemba Local","");
_addOption(document.Registration._Municipality,"King Sabata Dalindyebo Local","King Sabata Dalindyebo Local","");
_addOption(document.Registration._Municipality,"Kouga Local","Kouga Local","");
_addOption(document.Registration._Municipality,"Koukamma Local","Koukamma Local","");
_addOption(document.Registration._Municipality,"Makana Local","Makana Local","");
_addOption(document.Registration._Municipality,"Matatiele Local","Matatiele Local","");
_addOption(document.Registration._Municipality,"Mbhashe Local","Mbhashe Local","");
_addOption(document.Registration._Municipality,"Mbizana Local","Mbizana Local","");
_addOption(document.Registration._Municipality,"Mhlontlo Local","Mhlontlo Local","");
_addOption(document.Registration._Municipality,"Mnquma Local","Mnquma Local","");
_addOption(document.Registration._Municipality,"Ndlambe Local","Ndlambe Local","");
_addOption(document.Registration._Municipality,"Nelson Mandela Bay Metropolitan","Nelson Mandela Bay Metropolitan","");
_addOption(document.Registration._Municipality,"Ngqushwa Local","Ngqushwa Local","");
_addOption(document.Registration._Municipality,"Ntabankulu Local","Ntabankulu Local","");
_addOption(document.Registration._Municipality,"Nyandeni Local","Nyandeni Local","");
_addOption(document.Registration._Municipality,"Port St Johns Local","Port St Johns Local","");
_addOption(document.Registration._Municipality,"Raymond Mhlaba Local","Raymond Mhlaba Local","");
_addOption(document.Registration._Municipality,"Sakhisizwe Local","Sakhisizwe Local","");
_addOption(document.Registration._Municipality,"Senqu Local","Senqu Local","");
_addOption(document.Registration._Municipality,"Sundays River Valley Local","Sundays River Valley Local","");
_addOption(document.Registration._Municipality,"Umzimvubu Local","Umzimvubu Local","");
_addOption(document.Registration._Municipality,"Walter Sisulu Local","Walter Sisulu Local","");
}
if(document.Registration._Province.value == 'Free State'){
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "", "");
}
if(document.Registration._Province.value == 'Gauteng'){
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
}
if(document.Registration._Province.value == 'KwaZulu-Natal'){
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
}
if(document.Registration._Province.value == 'Limpopo'){
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
}
if(document.Registration._Province.value == 'Mpumalanga'){
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
}
if(document.Registration._Province.value == 'Northern Cape'){
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
}
if(document.Registration._Province.value == 'North West'){
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
}
if(document.Registration._Province.value == 'Western Cape'){
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
_addOption(document.Registration._Municipality,"", "","");
}
}

function _SelectCity(){
_removeAllOptions(document.Registration._City);
_addOption(document.Registration._City, "", "", "");

if(document.Registration._Municipality.value == 'Amahlathi Local'){
_addOption(document.Registration._City,"Cathcart", "Cathcart");
_addOption(document.Registration._City,"Kei Road", "Kei Road");
_addOption(document.Registration._City,"Keiskammahoek", "Keiskammahoek");
_addOption(document.Registration._City,"Stutterheim", "Stutterheim");
}

if(document.Registration._Municipality.value == 'Blue Crane Route Local'){
_addOption(document.Registration._City,"Cookhouse", "Cookhouse");
_addOption(document.Registration._City,"Pearston", "Pearston");
_addOption(document.Registration._City,"Petersburg", "Petersburg");
_addOption(document.Registration._City,"Somerset East", "Somerset East");
}

if(document.Registration._Municipality.value == 'Buffalo City Metropolitan'){
_addOption(document.Registration._City,"Bisho", "Bisho");
_addOption(document.Registration._City,"Dimbaza", "Dimbaza");
_addOption(document.Registration._City,"East London", "East London");
_addOption(document.Registration._City,"Kidd's Beach", "Kidd's Beach");
_addOption(document.Registration._City,"King William's Town", "King William's Town");
_addOption(document.Registration._City,"Mdantsane", "Mdantsane");
_addOption(document.Registration._City,"Phakamisa", "Phakamisa");
_addOption(document.Registration._City,"Zwelitsha", "Zwelitsha");
}

if(document.Registration._Municipality.value == 'Dr Beyers Naude Local'){
_addOption(document.Registration._City,"Aberdeen", "Aberdeen");
_addOption(document.Registration._City,"Adendorp", "Adendorp");
_addOption(document.Registration._City,"Graaff-Reinet", "Graaff-Reinet");
_addOption(document.Registration._City,"Jansenville", "Jansenville");
_addOption(document.Registration._City,"Kendrew", "Kendrew");
_addOption(document.Registration._City,"Klipplaat", "Klipplaat");
_addOption(document.Registration._City,"Nieu-Bethesda", "Nieu-Bethesda");
_addOption(document.Registration._City,"Rietbron", "Rietbron");
_addOption(document.Registration._City,"Steytlerville", "Steytlerville");
_addOption(document.Registration._City,"Waterford", "Waterford");
_addOption(document.Registration._City,"Willowmore", "Willowmore");
}
if(document.Registration._Municipality.value == 'Great Kei Local'){
_addOption(document.Registration._City,"Amatola Coastal", "Amatola Coastal");
_addOption(document.Registration._City," Kei Mouth", " Kei Mouth");
_addOption(document.Registration._City,"Komga", "Komga");
_addOption(document.Registration._City,"Morgan Bay", "Morgan Bay");
}
}
////////////////// 

function _removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function _addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}